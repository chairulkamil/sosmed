<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;
use App\Like;
use App\Suka;
use Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Post::with('user', 'likes', 'comments')->orderBy('id', 'desc')->get();
        $likes = Like::select('post_id')->where('user_id', Auth::user()->id)->get();
        $likeArr= Arr::flatten($likes->toArray()); //convert multidimensional array to single array for easy access

        $users= User::paginate(5);
        
        
        $followed = User::join('followings', 'users.id', '=', 'followings.follower_profile_id')
                    ->where('followings.follower_profile_id', Auth::user()->id)
                    ->get();

        return view('post.index', ['data'=>$data,'likes'=>$likeArr, 'users'=>$users]);

        
    }

    public function like(Request $request)
    {
        $like = new Like();

        $like->post_id = $request->post_id;
        $like->user_id = $request->user_id;

        $like->save();
        return redirect(url()->previous().'#postingan'.$request->post_id);
    }

    public function unlike(Request $request)
    {
        $user_id =  $request->user_id;
        $post_id = $request->post_id;
        

        Like::where('user_id', $user_id)
            ->where('post_id', $post_id)
            ->delete();
            return redirect(url()->previous().'#postingan'.$post_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if(!$request->status && !$request->caption && !$request->image && !$request->quotes){
            return redirect('/post');
        }
        Auth::user();
        $post =  new Post();
        $post->user_id = Auth::user()->id;
        $post->status = $request->get('status');
        $post->image = $request->get('image');
        $post->caption = $request->get('caption');
        $post->quotes = $request->get('quotes');
    
        $post->save();
        // $data = Post::create($request->all());
        if(!empty($request->file('image'))){
            $nama = md5($post->id);
            $folder = 'private/storage/image';
            $extension = $request->file('image')->getClientOriginalExtension();
            $file = $nama.".".$extension;
            //cek kalo sudah ada hapus
            if(file_exists($folder."/".$file)){
                unlink($folder."/".$file);
            }
            //proses upload
            if($request->file('image')->move($folder, $file)){
                $post->image = $folder."/".$file;
                $post->save();
            }
        }
        
        // dd($data);
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * 
     * [
     *  {
     *  name: 'post'
     * code :cpde,
     * user: {
     *  username
     * }
     * }
     * ]
     * 
     * $post->username
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Post::with('user', 'likes', 'comments')->findOrFail($id);
        $likes = Like::select('post_id')->where('user_id', [Auth::user()->id])->get();
        $likeArr= Arr::flatten($likes->toArray()); //convert multidimensional array to single array for easy access

        $clikes = Suka::select('comment_id')->where('user_id', [Auth::user()->id])->get();
        $clikeArr= Arr::flatten($clikes->toArray()); //convert multidimensional array to single array for easy access

        $comment = Comment::with('users')->where('post_id', $id)->get();
        // dd($comment);
        return view('post.show', ['data'=>$data,'likes'=>$likeArr, 'comment'=>$comment, 'clikes'=>$clikeArr]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {   
        // dd($post);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post = Post::find($post->id);
        // $post->user_id = Auth::user()->id;
        $post->status = $request->get('status');
        // $post->image = $request->get('image');
        $post->caption = $request->get('caption');
        $post->quotes = $request->get('quotes');
        $post->save();
        if(!empty($request->file('image'))){
            $nama = md5($post->id);
            $folder = 'private/storage/image';
            $extension = $request->file('image')->getClientOriginalExtension();
            $file = $nama.".".$extension;
            //cek kalo sudah ada hapus
            if(file_exists($folder."/".$file)){
                unlink($folder."/".$file);
            }
            //proses upload
            if($request->file('image')->move($folder, $file)){
                $post->image = $folder."/".$file;
                $post->save();
            }
        }
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect()->back()->with('message', 'Data berhasil dihapus!');
    }

    
}

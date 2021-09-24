<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;
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
        $data = Post::with('user')->orderBy('id', 'desc')->get();
        
        return view('post.index', compact('data'));

        
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
        }else{
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
        }
        // dd($data);
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

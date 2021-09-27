<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Post;
use Auth;
use App\Like;
use Illuminate\Support\Arr;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $profile = $user->profiles;
        $data = $user->posts;
        $likes = Like::select('post_id')->where('user_id', Auth::user()->id)->get();
        $likeArr= Arr::flatten($likes->toArray()); //convert multidimensional array to single array for easy access
        // dd($post);
        
        return view('profile.index', ['data'=>$data,'likes'=>$likeArr, 'profile'=>$profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Auth::user();
        $profile =  new Profile();
        $profile->user_id = Auth::user()->id;
        $profile->fullName = $request->get('fullName');
        $profile->alamat = $request->get('alamat');
        $profile->no_hp = $request->get('no_hp');
        $profile->foto = $request->get('foto');
        $profile->tgl_lahir = $request->get('tgl_lahir');
        $profile->work = $request->get('work');
        $profile->bio = $request->get('bio');
        $profile->hobby = $request->get('hobby');
    
        $profile->save();
        // $data = Post::create($request->all());
        if(!empty($request->file('foto'))){
            $nama = md5($profile->id);
            $folder = 'private/storage/foto';
            $extension = $request->file('foto')->getClientOriginalExtension();
            $file = $nama.".".$extension;
            //cek kalo sudah ada hapus
            if(file_exists($folder."/".$file)){
                unlink($folder."/".$file);
            }
            //proses upload
            if($request->file('foto')->move($folder, $file)){
                $profile->foto = $folder."/".$file;
                $profile->save();
            }
        }
        // dd($data);
        return redirect('/profile' . Auth::user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $profile = User::find($id)->profiles;
        $data = User::find($id)->posts;
        $likes = Like::select('post_id')->where('user_id', Auth::user()->id)->get();
        $likeArr= Arr::flatten($likes->toArray()); //convert multidimensional array to single array for easy access
        //  dd($post);
        
        return view('profile.user', ['data'=>$data,'likes'=>$likeArr, 'profile'=>$profile, 'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        Profile::where('id', $id)
                ->update([
                    'fullName' => $request->fullName,
                    'alamat' => $request->alamat,
                    'no_hp' => $request->no_hp,
                    'tgl_lahir' => $request->tgl_lahir,
                    'work' => $request->work,
                    'bio' => $request->bio,
                    'hobby' => $request->hobby,
                    
                ]);
                
                return redirect('/profile');
        
    }

    public function gantiDP(Request $request, $id)
    {
                if(!empty($request->file('image'))){
                    $nama = md5($id);
                    $folder = 'private/storage/image';
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $file = $nama.".".$extension;
                    //cek kalo sudah ada hapus
                    if(file_exists($folder."/".$file)){
                        unlink($folder."/".$file);
                    }
                    //proses upload
                    if($request->file('image')->move($folder, $file)){
                        Profile::where('id', $id)
                                ->update(['foto' => $folder."/".$file, ]);
                        
                    }
                }
                

                return redirect('/profile');
        
    }

    public function gantiCover(Request $request1)
    {
                if(!empty($request1->file('cover'))){
                    $nama1 = md5($request1->id);
                    $folder1 = 'private/storage/foto';
                    $extension1 = $request1->file('cover')->getClientOriginalExtension();
                    $file1 = $nama1.".".$extension1;
                    //cek kalo sudah ada hapus
                    if(file_exists($folder1."/".$file1)){
                        unlink($folder1."/".$file1);
                    }
                    //proses upload
                    $request1->file('cover')->move($folder1, $file1);
                    
                        Profile::where('id', $request1->id)
                                ->update(['cover' => $folder1."/".$file1, ]);
                        
                    
                }
                

                return redirect('/profile');
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

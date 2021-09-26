<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Post;
use Auth;
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
        // dd($post);
        return view('profile.index', compact('profile', 'data'));
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
        return redirect('/profile/' . Auth::user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $profile = User::find($id)->profiles;
        $data = User::find($id)->posts;
        //  dd($post);
        return view('profile.user', compact('profile', 'data'));
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

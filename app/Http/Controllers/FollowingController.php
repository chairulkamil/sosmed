<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class FollowingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function following()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $users = User::all();
        
        return view('profile.following', [
            'total' => $user->follows,
            'following' => $user->follows()->paginate(5),
            'users' => $users,
        ]);
    }

    public function followingid($id)
    {
        
        $user = User::find($id);
        $users = User::all();
        
        return view('profile.following', [
            'total' => $user->follows,
            'following' => $user->follows()->paginate(5),
            'users' => $users,
        ]);
    }

    public function followers()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $users = User::all();
        
        return view('profile.followers', [
            'total' => $user->followed,
            'followers' => $user->followed()->paginate(5),
            'users' => $users,
        ]);
    }

    public function followersid($id)
    {
        
        $user = User::find($id);
        $users = User::all();
        
        return view('profile.followers', [
            'total' => $user->followed,
            'followers' => $user->followed()->paginate(5),
            'users' => $users,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $follower_id = Auth::user()->id;
        $follower = User::find($follower_id);
        $user = User::find($request->user_id);
        if ($follower->hasFollow($user)) {
            $follower->unfollow($user);
        } else {
            $follower->follow($user);
        }
        
        
        
        return redirect(url()->previous());
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
        //
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

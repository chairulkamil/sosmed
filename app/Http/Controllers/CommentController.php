<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Suka;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if ($request->komentar === NULL) return redirect()->back();
        
        $comment =  new Comment();
        $comment->user_id = $request->get('user_id');
        $comment->post_id = $request->get('post_id');
        $comment->komentar = $request->get('komentar');
        $comment->save();

        return redirect()->back();
    }

    public function suka(Request $request)
    {
        
        $suka = new Suka();

        $suka->comment_id = $request->comment_id;
        $suka->user_id = $request->user_id;

        $suka->save();
        
        return redirect(url()->previous().'#komentar'.$request->comment_id);
    }

    public function unsuka(Request $request)
    {
        $user_id =  $request->user_id;
        $comment_id = $request->comment_id;
        

        Suka::where('user_id', $user_id)
            ->where('comment_id', $comment_id)
            ->delete();
            return redirect(url()->previous().'#komentar'.$comment_id);
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

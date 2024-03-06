<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\User;
use App\Models\Detail_tiket;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comments::all();
        return view('home.comment.index',compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $detail_ticket = Detail_tiket::all();
        return view('home.comment.tambah',compact('user','detail_ticket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'id_user'  => 'required|numeric|min:2|max:225',
            // 'id_detail_ticket'  => 'required|numeric|min:2|max:225',
            'komentar'  => 'required|min:2|max:225',
        ]);
       
        Comments::create([
            'id_user' => $request -> id_user,
            'id_detail_ticket' => $request -> id_detail_ticket,
            'komentar' => $request -> komentar,
            'updated_by' => Auth()->User()->nama,
        ]);
        return redirect('/comment')->with($validated);
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
        $comment = Comments::find($id);
        $user = User::all();
        $detail_ticket = Detail_tiket::all();
        return view('home.comment.edit',compact('comment','user','detail_ticket'));
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
        $comment = Comments::find($id);
        $comment->update([
            'id_user' => $request -> id_user,
            'id_detail_ticket' => $request -> id_detail_ticket,
            'komentar' => $request -> komentar,
            'updated_by' => Auth()->User()->nama,
        ]);
        return redirect('/comment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comments::find($id);
        $comment->delete();
        return redirect('/comment');
    }
}

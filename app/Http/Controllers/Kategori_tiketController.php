<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori_tiket;

class Kategori_tiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $k_ticket = Kategori_tiket::all();
        return view('home.kategori_ticket.index',compact('k_ticket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.kategori_ticket.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        Kategori_tiket::create([
            'nama_kategori' => $request -> nama_kategori,
            'nama_sub_kategori' => $request -> nama_sub_kategori,
            'updated_by' => Auth()->User()->nama,
            ]);
            return redirect('/k_ticket');
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
        $k_ticket = Kategori_tiket::find($id);
        return view('home.kategori_ticket.edit',compact('k_ticket'));
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
        $k_ticket = Kategori_tiket::find($id);
        $k_ticket->update([
            'nama_kategori' => $request -> nama_kategori,
            'nama_sub_kategori' => $request -> nama_sub_kategori,
            'updated_by' => Auth()->User()->nama,
        ]);
        return redirect('/k_ticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $k_ticket = Kategori_tiket::find($id);
        $k_ticket->delete();
        return redirect('/k_ticket');
    }
}

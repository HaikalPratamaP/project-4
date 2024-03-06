<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_tiket;
use App\Models\kategori_tiket;
class Detail_tiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_ticket = Detail_tiket::all();
        return view('home.detail_ticket.index',compact('detail_ticket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $k_ticket = Kategori_tiket::all();
        return view('home.detail_ticket.tambah',compact('k_ticket'));
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
            // 'id_kategori_ticket'  => 'required|numeric|min:2|max:225',
            'processed_by' => 'required|string|min:2|max:225',
            // 'role' => 'required|string|min:2|max:225',
            'process_at'  => 'required|date|min:2|max:225',
            'pending_at'  => 'required|date|min:2|max:225',
            'pending_time'  => 'required|string|min:2|max:225',
            'solved_time'  => 'required|string|min:2|max:225',
            'note'  => 'required|string|min:2|max:225',
        ]);

        Detail_tiket::create([
            'id_kategori_ticket' => $request -> id_kategori_ticket,
            'processed_by' => $request -> processed_by,
            'role' => $request -> role,
            'process_at' => $request -> process_at,
            'pending_at' => $request -> pending_at,
            'pending_time' => $request -> pending_time,
            'solved_time' => $request -> solved_time,
            'note' => $request -> note,
            'updated_by' => Auth()->User()->nama,
        ]);
        return redirect('/detail_ticket');
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
        $detail_ticket = Detail_tiket::find($id);
        $k_ticket = Kategori_tiket::all();
        return view('home.detail_ticket.edit',compact('detail_ticket','k_ticket'));
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
        $detail_ticket = Detail_tiket::find($id);
        $detail_ticket->update([
            'id_kategori_ticket' => $request -> id_kategori_ticket,
            'processed_by' => $request -> processed_by,
            'role' => $request -> role,
            'process_at' => $request -> process_at,
            'pending_at' => $request -> pending_at,
            'pending_time' => $request -> pending_time,
            'solved_time' => $request -> solved_time,
            'note' => $request -> note,
            'updated_by' => Auth()->User()->nama,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail_ticket = Detail_tiket::find($id);
        $detail_ticket->delete();
        return redirect('/detail_ticket');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Locations;
use App\Models\Positions;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return view('home.client.index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = Locations::all();
        $position = Positions::all();
        return view('home.client.tambah',compact('location','position'));
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
            'nik' => 'required|numeric|min:2|max:225',
            'nama' => 'required|string|min:2|max:225',
            // 'id_position' => 'required|string|min:2|max:225',
            // 'id_location' => 'required|string|min:2|max:225',
        ]);

        Client::create([
            'nik' => $request -> nik,
            'nama' => $request -> nama,
            'id_position' => $request ->id_position,
            'id_location' => $request -> id_location,
            'updated_by'=> Auth()->User()->nama,
        ]);
        
        return redirect('/client')->with($validated);
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
        $client = Client::find($id);
        $location = Locations::all();
        $position = Positions::all();
        return view('home.client.edit',compact('client','location','position'));
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
        $client = Client::find($id);
        $client->update([
            'nik' => $request -> nik,
            'nama' => $request -> nama,
            'id_position' => $request ->id_position,
            'id_location' => $request -> id_location,
            'updated_by'=> Auth()->User()->nama,
        ]);
        return redirect('/client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/client');
    }
}

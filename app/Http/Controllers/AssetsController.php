<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assets;
use App\Models\Kategori;
use App\Models\Locations;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asset = Assets::all();
        return view('home.asset.index',compact('asset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $location = Locations::all();
        return view('home.asset.tambah',compact('kategori','location'));
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
            'no_asset' => 'required|numeric|min:2|max:11',
            'nama_barang'  => 'required|string|min:2|max:225',
            'id_kategori'  => 'required|numeric|min:2|max:225',
            'no_serial'  => 'required|numeric|min:2|max:225',
            'merk'  => 'required|string|min:2|max:225',
            'model'  => 'required|string|min:2|max:225',
            'status'  => 'required|string|min:2|max:225',
            'id_location'  => 'required|numeric|min:2|max:225',
        ]);

        Assets::create([
            'no_asset' => $request -> no_asset,
            'nama_barang' => $request -> nama_barang,
            'id_kategori' => $request -> id_kategori,
            'no_serial' => $request -> no_serial,
            'merk' => $request -> merk,
            'model' => $request -> model,
            'status' => $request -> status,
            'id_location' => $request -> id_location,
            'updated_by' => Auth()->User()->nama,
        ]);
        return redirect('/asset')->with($validated);
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
        $asset = Assets::find($id);
        $kategori = Kategori::all();
        $location = Locations::all();
        return view('home.asset.edit',compact('asset','kategori','location'));
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
        $asset = Assets::find($id);
        $asset->update([
            'no_asset' => $request -> no_asset,
            'nama_barang' => $request -> nama_barang,
            'id_kategori' => $request -> id_kategori,
            'no_serial' => $request -> no_serial,
            'merk' => $request -> merk,
            'model' => $request -> model,
            'status' => $request -> status,
            'id_location' => $request -> id_location,
            'updated_by' => Auth()->User()->nama,
        ]);
        return redirect('/asset');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Assets::find($id);
        $asset->delete();
        return redirect('/asset');
    }
}

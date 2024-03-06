<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Locations;
use App\Models\Positions;
use Auth\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(Auth()->User()->level = 'user') { 
        $user = User::all();
        return view('home.user.index',compact('user'));
    // }else{
    //     return redirect('/login')->with('error','Anda Tidak memliki Akses Ke Halaman Ini');
    //     }
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
        return view('home.user.tambah',compact('location','position'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('foto');
        $nama = hexdec(uniqid());
        $ext = strtolower($img->getClientOriginalExtension());
        $foto = $nama.'.'.$ext;
        $img->move('image/user/',$foto);

        User::create([
            'nik' => $request -> nik,
            'nama' => $request -> nama,
            'id_position' => $request ->id_position,
            'id_location' => $request -> id_location,
            'password' => bcrypt( $request -> password),
            'role' => $request -> role,
            'level' => $request -> level,
            'foto' => $foto,
            'updated_by'=> Auth()->User()->nama,
            
        ]);
        return redirect('/user');
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
        $user = User::find($id);
        $location = Locations::all();
        $position = Positions::all();
        return view('home.user.edit',compact('user','location','position'));
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
        $img = $request->file('foto');
        $nama = hexdec(uniqid());
        $ext = strtolower($img->getClientOriginalExtension());
        $foto = $nama.'.'.$ext;
        $img->move('image/user/',$foto);

        $user = User::find($id);
        $user->update([
            'nik' => $request -> nik,
            'nama' => $request -> nama,
            'id_position' => $request ->id_position,
            'id_location' => $request -> id_location,
            'password' => bcrypt( $request -> password),
            'role' => $request -> role,
            'level' => $request -> level,
            'foto' => $foto,
            'updated_by'=> Auth()->User()->nama,
        ]);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}

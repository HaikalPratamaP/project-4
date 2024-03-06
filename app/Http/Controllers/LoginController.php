<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\Positions;   
use App\Models\Locations;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = Positions::all();
        $location = Locations::all();
        return view('home.register',compact('position','location'));
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
            'updated_by'=> $request -> updated_by,
            // 'updated_by'=> Auth()->User()->nama,
            
        ]);
        return redirect('/login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt($request->only('nama','password'))) {
            return redirect('/dashboard');
        }else{
            return redirect('/login')->with('error','maaf nama atau password salah!');
        }
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

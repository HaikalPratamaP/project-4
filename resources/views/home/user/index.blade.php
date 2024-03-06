@extends('layouts.master')
@section('title','halaman user')
@section('content')

   
       
         
<div class="content-wrapper">
    <section class="content">
     
    <div class="row">
        <div class="col-12">
            <div class="card ">
           
           <div class="card-body">
           <h4 class="card-title">halaman user
            <a href="/user/tambah" class="btn btn-primary">Tambah Data</a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>\
                            <th>Foto</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Position</th>
                            <th>Location</th>                     
                            <th>role</th>                     
                            <th>Level</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)
                            
                       
                        <tr class="">
                            <td scope="row">{{$u->id}}</td>
                            <td><img class="img-xs rounded-circle ml-2" src="{{asset("image/user/$u->foto")}}" alt="" width="50px"></td>
                            <td>{{$u->nik}}</td>
                            <td>{{$u->nama}}</td>
                            <td>{{$u->Positions->nama_jabatan}}</td>
                            <td>{{$u->Locations->nama_lokasi}}</td>
                            <td>{{$u->role}}</td>
                            <td>{{$u->level}}</td>
                            <td>{{$u->updated_by}}</td>
                            <td>
                                <a href="/user/{{$u->id}}/edit" class="btn btn-warning" >Edit</a> 
                                <a href="/user/{{$u->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
           
            
     
         </div>
        </section>
  
         </div>
         </div>
         </div>
      </div>
      @endsection
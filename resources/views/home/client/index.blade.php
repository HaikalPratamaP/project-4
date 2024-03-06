@extends('layouts.master')
@section('title','halaman client')
@section('content')

   
       
         
<div class="content-wrapper">
    <section class="content">
     
    <div class="row">
        <div class="col-12">
            <div class="card ">
           
           <div class="card-body">
           <h4 class="card-title">halaman client
            <a href="/client/tambah" class="btn btn-primary">Tambah Data</a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Position</th>
                            <th>Location</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($client as $c)
                            
                       
                        <tr class="">
                            <td scope="row">{{$c->id}}</td>
                            <td>{{$c->nik}}</td>
                            <td>{{$c->nama}}</td>
                            <td>{{$c->Positions->nama_jabatan}}</td>
                            <td>{{$c->Locations->nama_lokasi}}</td>
                            <td>{{$c->updated_by}}</td>
                            <td>
                                <a href="/client/{{$c->id}}/edit" class="btn btn-warning" >Edit</a> 
                                <a href="/client/{{$c->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a> 
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
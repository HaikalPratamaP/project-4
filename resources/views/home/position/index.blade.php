@extends('layouts.master')
@section('title','halaman position')
@section('content')

   
       
         
<div class="content-wrapper">
    <section class="content">
     
    <div class="row">
        <div class="col-12">
            <div class="card ">
           
           <div class="card-body">
           <h4 class="card-title">halaman position
            <a href="/position/tambah" class="btn btn-primary">Tambah Data</a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama jabatan</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($position as $p)
                            
                       
                        <tr class="">
                            <td scope="row">{{$p->id}}</td>
                            <td>{{$p->nama_jabatan}}</td>
                            <td>{{$p->updated_by}}</td>
                            <td>
                                <a href="/position/{{$p->id}}/edit" class="btn btn-warning" >Edit</a> 
                                <a href="/position/{{$p->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a> 
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
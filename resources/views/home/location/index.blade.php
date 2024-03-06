@extends('layouts.master')
@section('title','halaman location')
@section('content')

   
       
         
<div class="content-wrapper">
    <section class="content">
     
    <div class="row">
        <div class="col-12">
            <div class="card ">
           
           <div class="card-body">
           <h4 class="card-title">halaman location
            <a href="/location/tambah" class="btn btn-primary">Tambah Data</a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama lokasi</th>
                            <th>Wilayah</th>
                            <th>Regional</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($location as $l)
                            
                       
                        <tr class="">
                            <td scope="row">{{$l->id}}</td>
                            <td>{{$l->nama_lokasi}}</td>
                            <td>{{$l->wilayah}}</td>
                            <td>{{$l->regional}}</td>
                            <td>{{$l->updated_by}}</td>
                            <td>
                                <a href="/location/{{$l->id}}/edit" class="btn btn-warning" >Edit</a> 
                                <a href="/location/{{$l->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a> 
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
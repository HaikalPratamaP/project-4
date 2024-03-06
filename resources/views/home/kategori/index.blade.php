@extends('layouts.master')
@section('title','halaman kategori')
@section('content')

   
       
         
<div class="content-wrapper">
    <section class="content">
     
    <div class="row">
        <div class="col-12">
            <div class="card ">
           
           <div class="card-body">
           <h4 class="card-title">halaman kategori
            <a href="/kategori/tambah" class="btn btn-primary">Tambah Data</a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama Kategori</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $k)
                            
                       
                        <tr class="">
                            <td scope="row">{{$k->id}}</td>
                            <td>{{$k->nama_kategori}}</td>
                            <td>{{$k->updated_by}}</td>
                            <td>
                                <a href="/kategori/{{$k->id}}/edit" class="btn btn-warning" >Edit</a> 
                                <a href="/kategori/{{$k->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a> 
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
@extends('layouts.master')
@section('title','halaman asset')
@section('content')

   
       
         
<div class="content-wrapper">
    <section class="content">
     
    <div class="row">
        <div class="col-12">
            <div class="card ">
           
           <div class="card-body">
           <h4 class="card-title">halaman asset
            <a href="/asset/tambah" class="btn btn-primary">Tambah Data</a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>No asset</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>No serial</th>
                            <th>Merk</th>
                            <th>Model</th>
                            <th>Status</th>
                            <th>Lokasi</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($asset as $a)
                            
                       
                        <tr class="">
                            <td scope="row">{{$a->id}}</td>
                            <td>{{$a->no_asset}}</td>
                            <td>{{$a->nama_barang}}</td>
                            <td>{{$a->Kategori->nama_kategori}}</td>
                            <td>{{$a->no_serial}}</td>
                            <td>{{$a->merk}}</td>
                            <td>{{$a->model}}</td>
                            <td>{{$a->status}}</td>
                            <td>{{$a->Locations->nama_lokasi}}</td>
                            <td>{{$a->updated_by}}</td>
                            <td>
                                <a href="/asset/{{$a->id}}/edit" class="btn btn-warning" >Edit</a> 
                                <a href="/asset/{{$a->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a> 
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
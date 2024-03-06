@extends('layouts.master')
@section('title','halaman comment')
@section('content')

   
       
         
<div class="content-wrapper">
    <section class="content">
     
    <div class="row">
        <div class="col-12">
            <div class="card ">
           
           <div class="card-body">
           <h4 class="card-title">halaman comment
            <a href="/comment/tambah" class="btn btn-primary">Tambah Data</a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>User</th>
                            <th>Detail_Ticket</th>
                            <th>komentar</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comment as $c)
                            
                       
                        <tr class="">
                            <td scope="row">{{$c->id}}</td>
                            <td>{{$c->User->nama}}</td>
                            <td>{{$c->Detail_tiket->processed_by}}</td>
                            <td>{{$c->komentar}}</td>
                            <td>{{$c->updated_by}}</td>
                            <td>
                                <a href="/comment/{{$c->id}}/edit" class="btn btn-warning" >Edit</a> 
                                <a href="/comment/{{$c->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a> 
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
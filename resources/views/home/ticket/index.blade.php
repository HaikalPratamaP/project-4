@extends('layouts.master')
@section('title','halaman ticket')
@section('content')

   
       
         
<div class="content-wrapper">
    <section class="content">
     
    <div class="row">
        <div class="col-12">
            <div class="card ">
           
           <div class="card-body">
           <h4 class="card-title">halaman ticket
            <a href="/ticket/tambah" class="btn btn-primary">Tambah Data</a>
            <a href="/ticket/cetak" target="_blank" class="btn btn-success" > <span class="fa fa-print"> Cetak Data</span></a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Foto</th>
                            <th>No ticket</th>
                            <th>Kendala</th>
                            <th>Detail Kendala</th>
                            <th>Assets</th>
                            <th>User</th>
                            <th>Client</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Penilaian</th>
                            <th>Jam Kerja</th>
                            <th>Estimasi</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ticket as $t)
                            
                       
                        <tr class="">
                            <td scope="row">{{$t->id}}</td>
                            <td><img class="img-xs rounded-circle ml-2" src="{{asset("image/kendala/$t->foto")}}" alt="" width="50px"></td>
                            <td>{{$t->no_tiket}}</td>
                            <td>{{$t->kendala}}</td>
                            <td>{{$t->detail_kendala}}</td>
                            <td>{{$t->Assets->no_asset}}</td>
                            <td>{{$t->User->nama}}</td>
                            <td>{{$t->Client->nama}}</td>
                            <td>{{$t->status}}</td>
                            <td>{{$t->priority}}</td>
                            <td>{{$t->penilaian}}</td>
                            <td>{{$t->jam_kerja}}</td>
                            <td>{{$t->estimated}}</td>
                            <td>{{$t->updated_by}}</td>
                            <td>
                                <a href="/ticket/{{$t->id}}/edit" class="btn btn-warning" >Edit</a> 
                                <a href="/ticket/{{$t->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a> 
                                <a href="/ticket/{{$t->id}}/struk" target="_blank" class="btn btn-success" > <span class="fa fa-print"> struk</span></a>
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
@extends('layouts.master')
@section('title','halaman detail_ticket')
@section('content')

   
       
         
<div class="content-wrapper">
    <section class="content">
     
    <div class="row">
        <div class="col-12">
            <div class="card ">
           
           <div class="card-body">
           <h4 class="card-title">halaman detail_ticket
            <a href="/detail_ticket/tambah" class="btn btn-primary">Tambah Data</a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Kategori_tiket</th>
                            <th>Processed By</th>
                            <th>Role</th>
                            <th>Process At</th>
                            <th>Pending At</th>
                            <th>Pending Time</th>
                            <th>Solved Time</th>
                            <th>Note</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail_ticket as $d)
                            
                       
                        <tr class="">
                            <td scope="row">{{$d->id}}</td>
                            <td>{{$d->Kategori_tiket->nama_kategori}}</td>
                            <td>{{$d->processed_by}}</td>
                            <td>{{$d->role}}</td>
                            <td>{{$d->process_at}}</td>
                            <td>{{$d->pending_at}}</td>
                            <td>{{$d->pending_time}}</td>
                            <td>{{$d->solved_time}}</td>
                            <td>{{$d->note}}</td>
                            <td>{{$d->updated_by}}</td>
                            <td>
                                <a href="/detail_ticket/{{$d->id}}/edit" class="btn btn-warning" >Edit</a> 
                                <a href="/detail_ticket/{{$d->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a> 
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
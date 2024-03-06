@extends('layouts.master')
@section('title','halaman k_ticket')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah Data k_ticket</div>
           <hr>
            <form action="/k_ticket/simpan" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">Nama kategori</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your kategori" name="nama_kategori" required>
           </div>
           <div class="form-group">
            <label for="input-2">Nama Sub Kategori</label>
            <input type="text" class="form-control" id="input-2" placeholder="Enter Your sub_kategori" name="nama_sub_kategori">
           </div>
           {{-- <div class="form-group">
            <label for="input-5">Updated By</label>
            <input type="text" class="form-control" id="input-5" placeholder="Confirm update" name="updated_by">
           </div> --}}
          
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Submit</button>
            <button type="reset" class="btn btn-light px-5"><i class="icon-lock"></i>reset</button>
          </div>
          </form>
         </div>
         </div>
      </div>
      @endsection
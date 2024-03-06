@extends('layouts.master')
@section('title','halaman kategori')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah Data kategori</div>
           <hr>
            <form action="/kategori/simpan" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">Nama Kategori</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your nama_kategori" name="nama_kategori" required>
            @error('nama_kategori')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
          </div>
           {{-- <div class="form-group">
            <label for="input-2">Updated_by</label>
            <input type="text" class="form-control" id="input-2" placeholder="Enter Your update" name="updated_by">
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
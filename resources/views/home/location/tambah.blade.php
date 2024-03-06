@extends('layouts.master')
@section('title','halaman location')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah Data location</div>
           <hr>
            <form action="/location/simpan" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">Nama Lokasi</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your lokasi" name="nama_lokasi" required>
           </div>
           <div class="form-group">
            <label for="input-2">Wilayah</label>
            <input type="text" class="form-control" id="input-2" placeholder="Enter Your wilayah" name="wilayah">
           </div>
           <div class="form-group">
            <label for="input-3">Regional</label>
            <input type="text" class="form-control" id="input-3" placeholder="Enter Your Region" name="regional">
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
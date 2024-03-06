@extends('layouts.master')
@section('title','halaman asset')
@section('content')


<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah Data asset</div>
           <hr>
            <form action="/asset/simpan" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">No Asset</label>
            <input type="number" class="form-control" id="input-1" placeholder="Enter Your No_Asset" name="no_asset" >
            @error('no_asset')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
           </div>
           <div class="form-group">
            <label for="input-2">Nama Barang</label>
            <input type="text" class="form-control" id="input-2" placeholder="Enter Your nama_barang" name="nama_barang">
            @error('nama_barang')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
           </div>
           <div class="form-group">
            <label for="input-3">Kategori</label>
            <select name="id_kategori" id="" class="form-control">
                @foreach ($kategori as $kategori)
                <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                @endforeach
            </select>
            @error('id_kategori')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
          </div>
           <div class="form-group">
            <label for="input-5">No Serial</label>
            <input type="number" class="form-control" id="input-5" placeholder="Enter Your no_serial" name="no_serial">
            @error('no_serial')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
           </div>
           <div class="form-group">
            <label for="input-5">Merk</label>
            <input type="text" class="form-control" id="input-5" placeholder="Enter Your merk" name="merk">
            @error('merk')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
           </div>
           <div class="form-group">
            <label for="input-5">Model</label>
            <input type="text" class="form-control" id="input-5" placeholder="Enter Your Model" name="model">
            @error('model')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
           </div>
           <div class="form-group">
            <label for="input-5">Status</label>
          <select name="status" id="" class="form-control">
            <option value="digunakan">digunakan</option>
            <option value="stock">stock</option>
          </select>
           </div>
          <div class="form-group">
           <label for="input-4">Location</label>
           <select name="id_location" id="" class="form-control">
               @foreach ($location as $location)
               <option value="{{$location->id}}">{{$location->nama_lokasi}}</option>
               @endforeach
           </select>
           @error('id_location')
           <div class="alert alert-danger" >{{ $message }}</div>
           @enderror
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
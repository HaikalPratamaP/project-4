@extends('layouts.master')
@section('title','halaman client')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah Data client</div>
           <hr>
            <form action="/client/simpan" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">Nik</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Nik" name="nik" required>
            @error('nik')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
          </div>
           <div class="form-group">
            <label for="input-2">Nama</label>
            <input type="text" class="form-control" id="input-2" placeholder="Enter Your name" name="nama">
            @error('nama')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
          </div>
           <div class="form-group">
            <label for="input-3">Position</label>
            <select name="id_position" id="" class="form-control">
                @foreach ($position as $position)
                <option value="{{$position->id}}">{{$position->nama_jabatan}}</option>
                @endforeach
            </select>
            {{-- @error('id_position')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
           </div> --}}
           <div class="form-group">
            <label for="input-4">Location</label>
            <select name="id_location" id="" class="form-control">
                @foreach ($location as $location)
                <option value="{{$location->id}}">{{$location->nama_lokasi}}</option>
                @endforeach
            </select>
            {{-- @error('id_location')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror --}}
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
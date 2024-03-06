@extends('layouts.master')
@section('title','halaman position')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Edit Data position</div>
           <hr>
            <form action="/position/{{$position->id}}/update" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">Nama jabatan</label>
            <input type="text" value="{{$position->nama_jabatan}}" class="form-control" id="input-1" placeholder="Enter Your nama_jabatan" name="nama_jabatan" required>
           </div>
           {{-- <div class="form-group">
            <label for="input-2">Updated By</label>
            <input type="text" value="{{$position->updated_by}}" class="form-control" id="input-2" placeholder="Enter Your update" name="updated_by">
           </div>
           --}}
          
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Submit</button>
            <button type="reset" class="btn btn-light px-5"><i class="icon-lock"></i>reset</button>
          </div>
          </form>
         </div>
         </div>
      </div>
      @endsection
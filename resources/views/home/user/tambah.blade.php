@extends('layouts.master')
@section('title','halaman user')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah Data user</div>
           <hr>
            <form action="/user/simpan" method="POST" enctype="multipart/form-data">
                @csrf
           <div class="form-group">
            <label for="input-1">Nik</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Nik" name="nik" required>
           </div>
           <div class="form-group">
            <label for="input-2">Nama</label>
            <input type="text" class="form-control" id="input-2" placeholder="Enter Your name" name="nama">
           </div>
           <div class="form-group">
            <label for="input-3">Position</label>
            <select name="id_position" id="" class="form-control">
                @foreach ($position as $position)
                <option value="{{$position->id}}">{{$position->nama_jabatan}}</option>
                @endforeach
            </select>
           </div>
           <div class="form-group">
            <label for="input-4">Location</label>
            <select name="id_location" id="" class="form-control">
                @foreach ($location as $location)
                <option value="{{$location->id}}">{{$location->nama_lokasi}}</option>
                @endforeach
            </select>
           </div>
           <div class="form-group">
            <label for="input-5">Password</label>
            <input type="password" class="form-control" id="input-5" placeholder="Confirm Password" name="password">
           </div>
           <div class="form-group">
            <label for="input-5">Role</label>
          <select name="role" id="" class="form-control">
            <option value="user">User</option>
            <option value="service_desk">Service_Desk</option>
            <option value="agent">Agent</option>
          </select>
           </div>
           <div class="form-group">
            <label for="input-5">Level</label>
          <select name="level" id="" class="form-control">
            <option value="chief">Chief</option>
            <option value="korwil">Korwil</option>
            <option value="toko">Toko</option>
          </select>
           </div>
           <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="" placeholder="confirm foto" aria-describedby="fileHelpId"
            />
            <div id="fileHelpId" class="form-text"></div>
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
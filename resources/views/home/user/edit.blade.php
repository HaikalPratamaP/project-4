@extends('layouts.master')
@section('title','halaman user')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Edit Data user</div>
           <hr>
            <form action="/user/{{$user->id}}/update" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">Nik</label>
            <input type="text" value="{{$user->nik}}" class="form-control" id="input-1" placeholder="Enter Your Nik" name="nik">
           </div>
           <div class="form-group">
            <label for="input-2">Nama</label>
            <input type="text" value="{{$user->nama}}" class="form-control" id="input-2" placeholder="Enter Your name" name="nama" required>
           </div>
           <label for="input-3">Position</label>
            <select name="id_position" id="" class="form-control">
                @foreach ($position as $position)
                <option value="{{$position->id}}">{{$position->nama_jabatan}}</option>
                @endforeach
            </select>
           </div>
           <div class="form-group">
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
            <input type="password"  value="{{$user->password}}" class="form-control" id="input-5" placeholder="Confirm Password" name="password">
           </div>
           <div class="form-group">
            <label for="input-5">Role</label>
          <select name="role" id="" class="form-control"  value="{{$user->level}}">
            <option value="user">User</option>
            <option value="service_desk">Service_Desk</option>
            <option value="agent">Agent</option>
          </select>
           </div>
           <div class="form-group">
            <label for="input-5">Level</label>
          <select name="level" id="" class="form-control"  value="{{$user->level}}">
            <option value="chief">Chief</option>
            <option value="korwil">Korwil</option>
            <option value="toko">Toko</option>
          </select>
           </div>
           {{-- <div class="form-group">
            <label for="input-5">Updated By</label>
            <input type="text"  value="{{$user->updated_by}}" class="form-control" id="input-5" placeholder="Confirm update" name="updated_by">
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
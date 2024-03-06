@extends('layouts.master')
@section('title','halaman comment')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah Data comment</div>
           <hr>
            <form action="/comment/simpan" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">User</label>
            <select name="id_user" id="" class="form-control">
              @foreach ($user as $user)
              <option value="{{$user->id}}">{{$user->nama}}</option>
              @endforeach
          </select>
          {{-- @error('id_user')
          <div class="alert alert-danger" >{{ $message }}</div>
          @enderror
           </div> --}}
           <div class="form-group">
            <label for="input-2">Detail Ticket</label>
            <select name="id_detail_ticket" id="" class="form-control">
              @foreach ($detail_ticket as $detail_ticket)
              <option value="{{$detail_ticket->id}}">{{$detail_ticket->processed_by}}</option>
              @endforeach
          </select>
          {{-- @error('id_detail_ticket')
          <div class="alert alert-danger" >{{ $message }}</div>
          @enderror
           </div> --}}
           <div class="form-group">
            <label for="input-5">Komentar</label>
            <input type="text" class="form-control" id="input-5" placeholder="Confirm Komentar" name="komentar">
            @error('komentar')
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
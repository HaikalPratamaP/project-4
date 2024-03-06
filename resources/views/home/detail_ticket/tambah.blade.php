@extends('layouts.master')
@section('title','halaman detail_ticket')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah Data detail_ticket</div>
           <hr>
            <form action="/detail_ticket/simpan" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">Kategori Tiket</label>
            <select name="id_kategori_ticket" id="" class="form-control">
              @foreach ($k_ticket as $k_ticket)
              <option value="{{$k_ticket->id}}">{{$k_ticket->nama_kategori}}</option>
              @endforeach
          </select>
           </div>
           <div class="form-group">
            <label for="input-2">processed By</label>
            <input type="text" class="form-control" id="input-2" placeholder="Enter Your proces_by" name="processed_by" required>
            @error('processed_by')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
          </div>
           <div class="form-group">
            <label for="input-3">role</label>
            <select name="role" id="" class="form-control">
                <option value="service_desk">Service_desk</option>
                <option value="agent">Agent</option>
            </select>
          </div>
           <div class="form-group">
            <label for="input-5">process at</label>
            <input type="date" class="form-control" id="input-5" placeholder="Enter Your process_at" name="process_at">
          </div>
           <div class="form-group">
            <label for="input-5">Pending at</label>
            <input type="date" class="form-control" id="input-5" placeholder="Enter Your pending_at" name="pending_at">
           </div>
           <div class="form-group">
            <label for="input-5">Pending Time</label>
            <input type="text" class="form-control" id="input-5" placeholder="Enter Your pending_time" name="pending_time">
            @error('pending_time')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
          </div>
           <div class="form-group">
            <label for="input-5">Solved Time</label>
            <input type="text" class="form-control" id="input-5" placeholder="Enter Your solved_time" name="solved_time">
            @error('solved_time')
            <div class="alert alert-danger" >{{ $message }}</div>
            @enderror
          </div>
           <div class="form-group">
            <label for="input-5">Note</label>
            <input type="text" class="form-control" id="input-5" placeholder="Enter Your note" name="note">
            @error('note')
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
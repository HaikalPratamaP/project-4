@extends('layouts.master')
@section('title','halaman ticket')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Edit Data ticket</div>
           <hr>
            <form action="/ticket/{{$ticket->id}}/update" method="POST" enctype="multipart/form-data">
                @csrf
           <div class="form-group">
            <label for="input-1">No ticket</label>
            <input type="number" value="{{$ticket->no_tiket}}" class="form-control" id="input-1" placeholder="Enter Your No_ticket" name="no_tiket" required>
           </div>
           <div class="form-group">
            <label for="input-2">Kendala</label>
            <input type="text" value="{{$ticket->kendala}}" class="form-control" id="input-2" placeholder="Enter Your kendala" name="kendala" required>
           </div>
           <div class="form-group">
            <label for="input-2">Detail Kendala</label>
            <input type="text" value="{{$ticket->detail_kendala}}" class="form-control" id="input-2" placeholder="Enter Your detail_kendala" name="detail_kendala">
           </div>
           <div class="form-group">
            <label for="input-3">Assets</label>
            <select name="id_assets" id="" class="form-control">
                @foreach ($assets as $assets)
                <option value="{{$assets->id}}">{{$assets->no_asset}}</option>
                @endforeach
            </select>
          </div>
           <div class="form-group">
            <label for="input-3">User</label>
            <select name="id_user" id="" class="form-control">
                @foreach ($user as $user)
                <option value="{{$user->id}}">{{$user->nama}}</option>
                @endforeach
            </select>
          </div>
           <div class="form-group">
            <label for="input-3">Client</label>
            <select name="id_client" id="" class="form-control">
                @foreach ($client as $client)
                <option value="{{$client->id}}">{{$client->nama}}</option>
                @endforeach
            </select>
          </div>
           <div class="form-group">
            <label for="input-5">Status</label>
          <select name="status" id="" class="form-control">
            <option value="created">created</option>
            <option value="onprocess">onprocess</option>
            <option value="pending">pending</option>
            <option value="resolved">resolved</option>
          </select>
           </div>
           <div class="form-group">
            <label for="input-5">Priority</label>
          <select name="priority" id="" class="form-control">
            <option value="high">high</option>
            <option value="medium">medium</option>
            <option value="low">low</option>
          </select>
           </div>
           <div class="form-group">
            <label for="input-2">penilaian</label>
            <input type="text" value="{{$ticket->penilaian}}" class="form-control" id="input-2" placeholder="Enter Your penilaian" name="penilaian">
           </div>
           <div class="form-group">
            <label for="input-5">jam Kerja</label>
          <select name="jam_kerja" id="" class="form-control">
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
          </select>
           </div>
           <div class="form-group">
            <label for="input-5">Estimasi</label>
            <input type="date" value="{{$ticket->estimated}}" class="form-control" id="input-5" placeholder="Confirm estimasi" name="estimated">
           </div>
           <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="" value="{{$ticket->foto}}" placeholder="confirm foto" aria-describedby="fileHelpId"
            />
            <div id="fileHelpId" class="form-text"></div>
           </div>
           {{-- <div class="form-group">
            <label for="input-5">Updated By</label>
            <input type="text" value="{{$ticket->updated_by}}" class="form-control" id="input-5" placeholder="Confirm update" name="updated_by">
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Register</title>
  <!-- loader-->
  <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet"/>
  <script src="{{asset('assets/js/pace.min.js')}}"></script>
  <!--favicon-->
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  
  <link href="{{asset('/css/pace.min.css')}}" rel="stylesheet"/>
  <script src="{{asset('/js/pace.min.js')}}"></script>
  <!--favicon-->
  <link rel="icon" href="{{asset('/images/favicon.ico')}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{asset('/css/app-style.css')}}" rel="stylesheet"/>
</head>
<body class="bg-theme bg-theme1">
    <div id="wrapper">

        <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
           <div class="card card-authentication1 mx-auto my-5">
               <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="{{asset('/images/logo-icon.png')}}" alt="logo icon">
                    </div>
                 <div class="card-title text-uppercase text-center py-3">Register</div>
                 <form action="/register/simpan" method="POST" enctype="multipart/form-data">
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
               <div class="form-group">
                <label for="input-5">Updated By</label>
                <input type="text" class="form-control" id="input-5" placeholder="Confirm update" name="updated_by">
               </div>
              
               <div class="form-group">
                <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Submit</button>
                <button type="reset" class="btn btn-light px-5"><i class="icon-lock"></i>reset</button>
              </div>
              </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@extends('layouts.master')
@section('title','dashboard')
@section('content')
    
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="card mt-3">
      <div class="card-content">
          <div class="row row-group m-0">
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">{{$jumlah_assets}} <span class="float-right"><i class="fa fa-user"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                    <p class="mb-0 text-white small-font">Jumlah Assets </p>
                  
                  <a href="/asset" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                
                  </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">{{$jumlah_client}} <span class="float-right"><i class="fa fa-user"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                    <p class="mb-0 text-white small-font">Jumlah Client</p>
                    <a href="/client" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">{{$jumlah_comment}} <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                    <p class="mb-0 text-white small-font">Jumlah Comment</p>
                    <a href="/comment" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">{{$jumlah_ticket}} <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                    <p class="mb-0 text-white small-font">Jumlah Ticket</p>
                    <a href="/ticket" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
   </div>  
      
    <div class="row">
       <div class="col-12 col-lg-8 col-xl-8">
        <div class="card">
       <div class="card-header">Site Traffic
         <div class="card-action">
         <div class="dropdown">
         <a href="/ticket" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
          <i class="icon-options"></i>
         </a>
          <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="javascript:void();">Action</a>
          <a class="dropdown-item" href="javascript:void();">Another action</a>
          <a class="dropdown-item" href="javascript:void();">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void();">Separated link</a>
           </div>
          </div>
         </div>
       </div>
       <div class="card-body">
          <ul class="list-inline">
          <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>New Visitor</li>
          <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Old Visitor</li>
        </ul>
        <div class="chart-container-1">
          <canvas id="chart1"></canvas>
        </div>
       </div>
       
       <div class="row m-0 row-group text-center border-top border-light-3">
         <div class="col-12 col-lg-4">
           <div class="p-3">
             <h5 class="mb-0">45.87M</h5>
           <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
           </div>
         </div>
         <div class="col-12 col-lg-4">
           <div class="p-3">
             <h5 class="mb-0">15:48</h5>
           <small class="mb-0">Visitor Duration <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
           </div>
         </div>
         <div class="col-12 col-lg-4">
           <div class="p-3">
             <h5 class="mb-0">245.65</h5>
           <small class="mb-0">Pages/Visit <span> <i class="fa fa-arrow-up"></i> 5.62%</span></small>
           </div>
         </div>
       </div>
       
      </div>
     </div>
  
       <div class="col-12 col-lg-4 col-xl-4">
          <div class="card">
             <div class="card-header">Weekly sales
               <div class="card-action">
               <div class="dropdown">
               <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                <i class="icon-options"></i>
               </a>
                <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:void();">Action</a>
                <a class="dropdown-item" href="javascript:void();">Another action</a>
                <a class="dropdown-item" href="javascript:void();">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
                </div>
               </div>
             </div>
             <div class="card-body">
           <div class="chart-container-2">
                 <canvas id="chart2"></canvas>
          </div>
             </div>
             <div class="table-responsive">
               <table class="table align-items-center">
                 <tbody>
                   <tr>
                     <td><i class="fa fa-circle text-white mr-2"></i> Direct</td>
                     <td>$5856</td>
                     <td>+55%</td>
                   </tr>
                   <tr>
                     <td><i class="fa fa-circle text-light-1 mr-2"></i>Affiliate</td>
                     <td>$2602</td>
                     <td>+25%</td>
                   </tr>
                   <tr>
                     <td><i class="fa fa-circle text-light-2 mr-2"></i>E-mail</td>
                     <td>$1802</td>
                     <td>+15%</td>
                   </tr>
                   <tr>
                     <td><i class="fa fa-circle text-light-3 mr-2"></i>Other</td>
                     <td>$1105</td>
                     <td>+5%</td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
       </div>
    </div><!--End Row-->
    
    <div class="row">
     <div class="col-12 col-lg-12">
       <div class="card">
         <div class="card-header">Recent Order Tables
        <div class="card-action">
               <div class="dropdown">
               <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                <i class="icon-options"></i>
               </a>
                <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:void();">Action</a>
                <a class="dropdown-item" href="javascript:void();">Another action</a>
                <a class="dropdown-item" href="javascript:void();">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
                </div>
               </div>
       </div>
       <table class="table  table-responsive">
        <thead>
            <tr>
                <th>id</th>
                <th>No ticket</th>
                <th>Kendala</th>
                <th>Detail Kendala</th>
                <th>Assets</th>
                <th>User</th>
                <th>Client</th>
                <th>Status</th>
                <th>Priority</th>
                <th>Penilaian</th>
                <th>Jam Kerja</th>
                <th>Estimasi</th>
                <th>Updated By</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($ticket as $t)
                
           
            <tr class="">
                <td scope="row">{{$t->id}}</td>
                <td>{{$t->no_tiket}}</td>
                <td>{{$t->kendala}}</td>
                <td>{{$t->detail_kendala}}</td>
                <td>{{$t->Assets->no_asset}}</td>
                <td>{{$t->User->nama}}</td>
                <td>{{$t->Client->nama}}</td>
                <td>{{$t->status}}</td>
                <td>{{$t->priority}}</td>
                <td>{{$t->penilaian}}</td>
                <td>{{$t->jam_kerja}}</td>
                <td>{{$t->estimated}}</td>
                <td>{{$t->updated_by}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
                     @endsection
  </div>
</div>

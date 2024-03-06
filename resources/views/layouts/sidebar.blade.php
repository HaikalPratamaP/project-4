{{-- @if(Auth()->User()->level == 'user') --}}
<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">{{Auth()->User()->nama}}</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
       <a href="/dashboard">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
       </a>
     </li>
     <li>
      
       <a href="/asset">
         <i class="zmdi zmdi"></i> <span>Kelola data assets</span>
       </a>
     </li>

     <li>
       <a href="/client">
         <i class="zmdi zmdi"></i> <span>Kelola data clients</span>
       </a>
     </li>
     <li>

       <a href="/comment">
         <i class="zmdi zmdi"></i> <span>Kelola data comments</span>
       </a>
     </li>

     <li>
       <a href="/detail_ticket">
         <i class="zmdi zmdi"></i> <span>Kelola data detail tickets</span>
       </a>
     </li>
     <li>
       <a href="/ticket">
         <i class="zmdi zmdi"></i> <span>Kelola data tickets</span>
       </a>
     </li>
     <li>
       <a href="/kategori">
         <i class="zmdi zmdi"></i> <span>Kelola data kategori assets</span>
       </a>
     </li>
     <li>
       <a href="/k_ticket">
         <i class="zmdi zmdi"></i> <span>Kelola data kategori tickets</span>
       </a>
     </li>
     <li>
       <a href="/location">
         <i class="zmdi zmdi"></i> <span>Kelola data location</span>
       </a>
     </li>
     <li>
       <a href="/position">
         <i class="zmdi zmdi"></i> <span>Kelola data position</span>
       </a>
     </li>
     <li>
       <a href="/user">
         <i class="zmdi zmdi"></i> <span>Kelola data user</span>
       </a>
     </li>
   


    

     {{-- <li class="sidebar-header">LABELS</li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> --}}

   </ul>
  </div>
  {{-- @else
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">{{Auth()->User()->nama}}</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
       <a href="/dashboard">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
       </a>
     </li>
     <li>
      
       <a href="/asset">
         <i class="zmdi zmdi"></i> <span>Kelola data assets</span>
       </a>
     </li>

     <li>
       <a href="/client">
         <i class="zmdi zmdi"></i> <span>Kelola data clients</span>
       </a>
     </li>
     <li>

       <a href="/comment">
         <i class="zmdi zmdi"></i> <span>Kelola data comments</span>
       </a>
     </li>

     <li>
       <a href="/detail_ticket">
         <i class="zmdi zmdi"></i> <span>Kelola data detail tickets</span>
       </a>
     </li>
     <li>
       <a href="/ticket">
         <i class="zmdi zmdi"></i> <span>Kelola data tickets</span>
       </a>
     </li>
     <li>
       <a href="/kategori">
         <i class="zmdi zmdi"></i> <span>Kelola data kategori assets</span>
       </a>
     </li>
     <li>
       <a href="/k_ticket">
         <i class="zmdi zmdi"></i> <span>Kelola data kategori tickets</span>
       </a>
     </li>
     <li>
       <a href="/location">
         <i class="zmdi zmdi"></i> <span>Kelola data location</span>
       </a>
     </li>
     <li>
       <a href="/position">
         <i class="zmdi zmdi"></i> <span>Kelola data position</span>
       </a>
     </li>
     <li>
       <a href="/user">
         <i class="zmdi zmdi"></i> <span>Kelola data user</span>
       </a>
     </li>   --}}
  {{-- <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">{{Auth()->User()->nama}}</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
       <a href="/dashboard">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
       </a>
     </li>
     <li>
      
       <a href="/ticket">
         <i class="zmdi zmdi"></i> <span>Kelola data ticket</span>
       </a>
     </li>
     <li>
       <a href="/comment">
         <i class="zmdi zmdi"></i> <span>Kelola data comment</span>
       </a>
     </li>
     </ul>
    </div> --}}
  {{-- @endif --}}
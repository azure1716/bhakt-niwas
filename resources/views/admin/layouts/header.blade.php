 <style>
     .logo {
         padding: 0 !important;
         /* height: 7rem; */
     }

     .wrapper .leftside-menu .logo {
         background: #383838 !important;
     }

     .wrapper .leftside-menu .logo-one {
         width: 90%;
         margin: 0 auto;
     }

     html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .logo-one {
         display: none;
     }

     html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .logo-sm img {
         width: 100%;
         height: 100%;
     }

     html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover .side-nav-link {
         background: #f0f0f0dc;
         color: #30a3a3;
         border: 1px solid #30a3a3;
         border-radius: 6px;
     }

     .notification-list .noti-icon-badge {
         display: inline-block;
         position: absolute;
         top: 18px;
         right: 0px;
         border-radius: 50%;
         height: 15px;
         width: 15px;
         background-color: var(--ct-danger);
     }

     .side-nav .menuitem-active {
         background: #f3f3f3;
         border-radius: 5px;
     }

     html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .content-page {
         min-height: auto !important;
     }

     .content-page {
         min-height: auto !important;
     }

     .table-responsive {
         overflow: hidden;
     }
 </style>

 <!-- ========== Topbar Start ========== -->
 <div class="navbar-custom">
     <div class="topbar container-fluid">
         <div class="d-flex align-items-center gap-lg-2 gap-1">
             <!-- Topbar Brand Logo -->
             <div class="logo-topbar">
                 <!-- Logo light -->
                 <a href="{{ route('dashboard') }}" class="logo-light">
                     <span class="logo">
                         <img src="{{ asset($site_setting->logo ?? 'backend/GM_sansthan.png') }}" alt="logo"
                             width="100%">
                     </span>
                 </a>
                 <!-- Logo Dark -->
                 <a href="{{ route('dashboard') }}" class="logo-dark">
                     <span class="logo">
                         <img src="{{ asset($site_setting->logo ?? 'backend/GM_sansthan.png') }}" alt="dark logo"
                             width="100%">
                     </span>
                 </a>
             </div>

             <!-- Sidebar Menu Toggle Button -->
             <button class="button-toggle-menu">
                 <i class="ri-menu-5-line"></i>
             </button>

             <!-- Horizontal Menu Toggle Button -->
             <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                 <div class="lines">
                     <span></span>
                     <span></span>
                     <span></span>
                 </div>
             </button>
         </div>

         <ul class="topbar-menu d-flex align-items-center gap-3">
             <li class="d-none d-md-inline-block">
                 <a class="nav-link" href="#" data-toggle="fullscreen">
                     <i class="ri-fullscreen-line font-22"></i>
                 </a>
             </li>


             <li class="dropdown">
                 <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#"
                     role="button" aria-haspopup="false" aria-expanded="false">
                     <span class="d-lg-flex flex-column gap-1 d-none">
                         <h5 class="my-0">{{ Auth::user()->name ?? 'Admin' }}</h5>
                         <h6 class="my-0 fw-normal">Admin</h6>
                     </span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                     <form method="POST" action="{{ route('logout') }}">
                         @csrf
                         <button type="submit" class="dropdown-item">
                             <i class="ri-login-circle-line font-16 me-1"></i><span>Logout</span></button>
                     </form>
                 </div>
             </li>
         </ul>
     </div>
 </div>
 <!-- ========== Topbar End ========== -->

 <!-- ========== Left Sidebar Start ========== -->
 <div class="leftside-menu" style="background: #fff !important;">
     <!-- Brand Logo Light -->
     <a href="{{ route('dashboard') }}" class="logo logo-light" style="background: #383838 !important;">
         <span class="logo logo-one" style="padding: 10px 0 !important;">
             <img src="{{ asset($site_setting->logo ?? 'backend/GM_sansthan.png') }}" alt="logo" width="100%">
         </span>
         <span class="logo-sm">
             <img src="{{ asset($site_setting->logo ?? 'backend/GM_sansthan.png') }}" alt="small logo">
         </span>
     </a>
     <!-- Brand Logo Dark -->
     <a href="{{ route('dashboard') }}" class="logo logo-dark">
         <span class="logo">
             <img src="{{ asset($site_setting->logo ?? 'backend/GM_sansthan.png') }}" alt="dark logo" width="100%">
         </span>
     </a>
     <!-- Sidebar Hover Menu Toggle Button -->
     <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
         <i class="ri-checkbox-blank-circle-line align-middle"></i>
     </div>
     <!-- Full Sidebar Menu Close Button -->
     <div class="button-close-fullsidebar">
         <i class="ri-close-fill align-middle"></i>
     </div>
     <!-- Sidebar -->
     <div class="h-100" id="leftside-menu-container" data-simplebar>
         <ul class="side-nav mt-3" style="height: 100%; ">
             <li class="side-nav-title" style="color:#ae7f24;">Navigation</li>
             <li class="side-nav-item">
                 <a href="{{ route('dashboard') }}"
                     class="side-nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                     <i class="uil-home-alt"></i>
                     <span> Dashboards </span>
                 </a>
             </li>

             <li class="side-nav-title" style="color:#ae7f24;">Blog</li>
             <li class="side-nav-item {{ request()->routeIs('admin.blog.*') ? 'menuitem-active' : '' }}">
                 <a href="{{ route('admin.blog.index') }}"
                     class="side-nav-link {{ request()->routeIs('admin.blog.*') ? 'active' : '' }}">
                     <i class="uil-blogger"></i>
                     <span> Manage Blogs </span>
                 </a>
             </li>



             {{-- <li class="side-nav-title" style="color:#ae7f24;">Site Settings</li>
             <li class="side-nav-item mb-4">
                 <a href="{{ url('admin/site-settings/edit') }}"
                     class="side-nav-link {{ request()->routeIs('admin.site-settings.edit') ? 'active' : '' }}">
                     <i class="uil uil-circle"></i>
                     <span> Site Settings </span>
                 </a>
             </li> --}}

         </ul>
         <!--- End Sidemenu -->

         <div class="clearfix"></div>
     </div>
 </div>



 <!-- ========== Left Sidebar End ========== -->

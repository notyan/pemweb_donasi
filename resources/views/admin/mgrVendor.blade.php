<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Manajemen Saran</title>
  
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/" class="brand-link">
      <span class="brand-text font-weight-light">Admin Kibatisa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Edit Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('superuser.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Data User </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.konten.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit Konten </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/mgrAgama" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit Data Agama </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/mgrRekening" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Data Rekening</p>
                    </a>
                </li>
                <li class="nav-item"> 
                    <a href="/admin/mgrVendor" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Data Vendor </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/mgrWilayah" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Data Wilayah </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/mgrProfesi" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Data Profesi </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/mgrSaran" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lihat Saran </p>
                    </a>
                </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manajemen Vendor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Vendor</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tambah Profesi</h5>
                  </br>
                  
                    <form action='/admin/mgrVendor/add' method="post">
                      <div class='row row-cols-lg-4'>
                        <div class="col input-group mb-3">
                          <span class="input-group-text" style="border-radius: 4px 0px 0px 4px;" id="basic-addon1">Vendor</span>
                            <input class="form-control col-lg-10" style="border-radius: 0px 4px 4px 0px;" type="text" name="nama" placeholder="Nama Vendor Bank/E-Wallet"/>
                            {{ csrf_field() }}
                        </div>
                          <div class="col input-group mb-3">
                            <button class="btn btn-dark " type="submit" >Submit</button>
                          </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            <div class="col-lg-12">
              <div class="card">
                <table class="table ">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Rekening/E-Wallet</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($vendor as $a)
                      <tr>
                        <th>{{ $a-> id }}</li>
                        <td>{{ $a-> nama}}</td>
                        <td><a href="#">Edit</a></td>
                        <td><a href="#">Delete</a></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('js/adminlte.min.js') }}"></script>
</body>
</html>

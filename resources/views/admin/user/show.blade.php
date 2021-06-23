<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Kibatisa </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('css/adminlte.min.css') }}">
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
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
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
    <a href="#" class="brand-link">
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
                    <a href="{{ route('superuser.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Data User </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../mgrAgama" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit Data Agama </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../mgrRekening" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Data Rekening</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../mgrVendor" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Data Vendor </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../mgrWilayah" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Data Wilayah </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../mgrProfesi" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Data Profesi </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../mgrSaran" class="nav-link">
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
            <h1 class="m-0">Detail Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Dashboard</li>
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
              <table class="table ">
                <tr>
                    <td>Nama</td>
                    <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>@if($data->level > 1) {{ "Admin" }} @else {{ "User" }} @endif</td>
                </tr>
                <tr>
                    <td>Status Verikasi</td>
                    <td>@if($data->is_verified == 1) {{ "Terverifikasi" }} @else {{ "Tidak Terverifikasi" }} @endif</td>
                </tr>
              </table>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <a href="{{ route('superuser.edit', ['superuser' => $data->id]) }}" class="btn btn-secondary">Edit</a>
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
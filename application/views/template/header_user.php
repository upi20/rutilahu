
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Pendukung Keputusan Rutilahu Desa Wangunjaya</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/')?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet">

  <link href="<?= base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?= base_url('assets/')?>img" type="image">
	<link rel="icon" href="<?= base_url('assets/img/profile/Garut.png')?>" type="image">

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center bg-gradient-info" href="<?= base_url('Beranda'); ?>">
        <div class="sidebar-brand-icon mt-3">
          <img src="<?= base_url('assets/img/profile/Garut.png')?>" alt="" width="50%" style="margin-bottom: 15px;">
        </div>
        <div class="sidebar-brand-text mr-4">Rutilahu</div>
      </a>


      <!-- Nav Item - Dashboard -->
      <li class="nav-item bg-gray-900  <?php if($page=='Beranda'){echo 'active';}?>">
        <a class="nav-link" href="<?= base_url('Beranda'); ?>">
        <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>
      <hr class="sidebar-divider my-0">
            
      <li class="nav-item bg-gray-900 <?php if($page=='Profile'){echo 'active';}?>">
        <a class="nav-link" href="<?= base_url('Beranda/profile'); ?>">
        <i class="fas fa-fw fa-hotel"></i>
          <span>Profile Desa</span></a>
      </li>
      <li class="nav-item bg-gray-900 <?php if($page=='Informasi'){echo 'active';}?>">
        <a class="nav-link" href="<?= base_url('Informasi'); ?>">
        <i class="fas fa-fw fa-info"></i>
          <span>Informasi</span></a>
      </li>

 <!-- Divider -->
 <hr class="sidebar-divider my-0">
            
 <!-- Nav Item - Login -->
 <li class="nav-item bg-gray-900  ">
                <a class="nav-link" href="<?= base_url('Login') ?>">
                <i class="fas fa-fw fa-sign-in-alt mr-1"></i> 
                    <span>Login</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-info topbar mb-4 static-top shadow">
          
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn text-gray-900 d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          
          <div class="navbar-brand-text mx-3 d-md-none ">
            <h6 class="mt-2 text-white font-weight-bold ">
              SPK RUTILAHU
            </h6>
          </div>




          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Login -->
              <li class="nav-item mx-3  ">
                <a href="<?= base_url('Login') ?>"  class="btn btn-dark btn-sm"><i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 "></i>Login</a>
              </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
		
		<div class="container-fluid">
      
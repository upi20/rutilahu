 <?php
  if ($this->session->status !== ('Logged')) {
    redirect('login');
  }
  ?>

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
   <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="<?= base_url('assets/') ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

   <link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   <link rel="shortcut icon" href="<?= base_url('assets/') ?>img" type="image">
   <link rel="icon" href="<?= base_url('assets/img/profile/Garut.png') ?>" type="image">

 </head>

 <body id="page-top">

   <!-- Page Wrapper -->
   <div id="wrapper">

     <!-- Sidebar -->
     <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center bg-gradient-info" href="<?= base_url('Login/home'); ?>">
         <div class="sidebar-brand-icon mt-3">
           <img src="<?= base_url('assets/img/profile/Garut.png') ?>" alt="" width="50%" style="margin-bottom: 15px;">
         </div>
         <div class="sidebar-brand-text mr-4">Rutilahu</div>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">



       <!-- Nav Item - Dashboard -->
       <li class="nav-item <?php if ($page == 'Dashboard') {
                              echo 'active';
                            } ?>">
         <a class="nav-link" href="<?= base_url('Login/home'); ?>">
           <i class="fas fa-fw fa-tachometer-alt"></i>
           <span>Dashboard</span></a>
       </li>



       <?php if ($this->session->userdata('id_user_level') == '1') : ?>
         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
           MENU
         </div>

         <!-- Sidebar - Data Alternatif & Penilaian-->
         <li class="nav-item 
                <?php if ($page == 'Alternatif') {
                  echo 'active';
                } ?>
                <?php if ($page == 'Penilaian') {
                  echo 'active';
                } ?>">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
             <i class="fas fa-fw fa-users"></i>
             <span>Data Alternatif</span>
           </a>
           <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
               <a class="collapse-item" href="<?= base_url('Alternatif'); ?>">Calon Penerima Bantuan</a>
               <a class="collapse-item" href="<?= base_url('Penilaian'); ?>">Rekap Penilaian</a>
             </div>
           </div>
         </li>

         <li class="nav-item 
          <?php if ($page == 'Kriteria') {
            echo  'active';
          } ?>
          <?php if ($page == 'Sub Kriteria') {
            echo 'active';
          } ?>">
           <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-chart-bar"></i>
             <span>Data Kriteria</span>
           </a>
           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
               <a class="collapse-item" href="<?= base_url('Kriteria'); ?>">Kriteria</a>
               <a class="collapse-item" href="<?= base_url('Subkriteria'); ?>">Subkriteria</a>
             </div>
           </div>
         </li>



         <li class="nav-item <?php if ($page == 'Perhitungan') {
                                echo 'active';
                              } ?>">
           <a class="nav-link" href="<?= base_url('Perhitungan'); ?>">
             <i class="fas fa-fw fa-calculator"></i>
             <span>Perhitungan MAUT</span></a>
         </li>

         <li class="nav-item <?php if ($page == 'Hasil') {
                                echo 'active';
                              } ?>">
           <a class="nav-link" href="<?= base_url('Perhitungan/hasil'); ?>">
             <i class="fas fa-fw fa-file"></i>
             <span>Laporan Hasil Akhir</span></a>
         </li>
         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block mb-2 ">
         <!-- Heading -->


         <li class="nav-item <?php if ($page == 'User') {
                                echo 'active';
                              } ?>">
           <a class="nav-link" href="<?= base_url('User'); ?>">
             <i class="fas fa-fw fa-users-cog"></i>
             <span>Data User</span></a>
         </li>


         <!-- Divider -->
         <hr class="sidebar-divider mt-2 ">



       <?php endif; ?>


       <!-- Kepala Desa -->
       <?php if ($this->session->userdata('id_user_level') == '2') : ?>

         <!-- Divider -->
         <hr class="sidebar-divider mb-2">

         <li class="nav-item mb-2 <?php if ($page == 'Hasil') {
                                    echo 'active';
                                  } ?>">
           <a class="nav-link" href="<?= base_url('Perhitungan/hasil'); ?>">
             <i class="fas fa-fw fa-file"></i>
             <span>Laporan </span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider mb-2">
       <?php endif; ?>


       <!-- Kepala Dusun 1 -->
       <?php if ($this->session->userdata('id_user_level') == '3') : ?>

         <!-- Divider -->
         <hr class="sidebar-divider mb-0">

         <li class="nav-item mb-0 <?php if ($page == 'Alternatif') {
                                    echo 'active';
                                  } ?>">
           <a class="nav-link" href="<?= base_url('Alternatif'); ?>">
             <i class="fas fa-fw fa-users"></i>
             <span>Calon Penerima Bantuan</span></a>
         </li>

         <li class="nav-item  <?php if ($page == 'Penilaian') {
                                echo 'active';
                              } ?>">
           <a class="nav-link" href="<?= base_url('Penilaian'); ?>">
             <i class="fas fa-fw fa-clipboard-list"></i>
             <span>Rekap Penilaian</span></a>
         </li>

         <li class="nav-item <?php if ($page == 'Hasil') {
                                echo 'active';
                              } ?>">
           <a class="nav-link" href="<?= base_url('Perhitungan/hasil'); ?>">
             <i class="fas fa-fw fa-file"></i>
             <span>Laporan </span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider mt-2">


       <?php endif; ?>







       <!-- Sidebar Toggler (Sidebar) -->
       <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
       </div>

     </ul>
     <!-- End of Sidebar -->

     <!-- Content Wrapper -->
     <div id="content-wrapper" class="d-flex flex-column ">

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

             <div class="topbar-divider d-none d-sm-block"></div>


             <!-- Nav Item - User Information -->
             <li class="nav-item dropdown no-arrow">
               <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <span class="text-uppercase mr-2 text-white small">
                   <?= $this->session->username; ?></span>
                 <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/default.jpg'); ?>">
               </a>

               <!-- Dropdown - User Information -->
               <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 <a class="dropdown-item" href="<?= base_url('Profile'); ?>">
                   <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                   Profile
                 </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                   <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                   Keluar
                 </a>
               </div>
             </li>

           </ul>

         </nav>
         <!-- End of Topbar -->

         <div class="container-fluid">

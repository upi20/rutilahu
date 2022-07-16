<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Login | Sistem Pendukung Keputusan Rutilahu Desa Wangunjaya</title>

        <!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        <!-- Custom styles for this template-->
        <link href="<?= base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet" />
		<link rel="shortcut icon" href="<?= base_url('assets/')?>img" type="image">
		<link rel="icon" href="<?= base_url('assets/img/profile/Garut.png')?>" type="image">
    </head>

    <body class="bg-gradient-info">
        <div class="container">
            <!-- Outer Row -->
            <div class="row d-plex justify-content-center mt-0">
                <div class="col-xl-5 col-lg-5 col-md-5 mt-0">
                    <div class=" shadow-lg-white  my-5">
                        <div class="">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                        <img src="<?= base_url('assets/img/profile/Garut.png')?>" alt="" width="30%" style="margin-bottom: 15px;">
                                            
                                            <h5 class="pt-0 mt-1 mb-4 text-white">
                                                Sistem Pendukung Keputusan Penerima Dana Bantuan Rumah Tidak Layak Huni Desa Wangunjaya Kecamatan Pakenjeng
                                            </h5>
                                            
                                        </div>
										<?php $error=$this->session->flashdata('message');
										if($error) {?>
										<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<?php echo $error; ?>                    
										</div>
										<?php }?> 

                                        <form class="user" action="<?php echo site_url('Login/login'); ?>" method="post">
                                            <div class="form-group">
                                                <input required autocomplete="off" type="text" class="form-control form-control-user"  id="exampleInputUser" placeholder="Username" name="username" />
                                            </div>
                                            <div class="form-group">
                                                <input required autocomplete="off" type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" />
                                            </div>
                                            <button name="submit" type="submit" class="btn btn-info btn-user btn-block"><i class="fas fa-fw fa-sign-in-alt mr-1"></i> Masuk</button>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                        <a class="h6 text-white" href="<?= base_url('Beranda') ?>"> Beranda</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/')?>js/sb-admin-2.min.js"></script>
    </body>
</html>



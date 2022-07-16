<?php $this->load->view('layouts/header_admin'); ?>

<?php if ($this->session->userdata('id_user_level') == '1') : ?>
    <div class="mb-0">
        <div class="row">
            <!-- Data Warga  -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?= base_url('Alternatif'); ?>" class="text-info">
                                        Warga Yang Terdaftar</a></div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $total_warga; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data Kriteria  -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?= base_url('Kriteria'); ?>" class="text-info">
                                        Kriteria</a></div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $total_kriteria; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cube fa-2x text-gray-200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data Subkriteria  -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?= base_url('Subkriteria'); ?>" class="text-info">
                                        Subkriteria</a></div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $total_sub_kriteria ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cubes fa-2x text-gray-200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data User  -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?= base_url('User'); ?>" class="text-info">
                                        Pengguna</a></div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $total_user ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users-cog fa-2x text-gray-200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card shadow mb-5">

            <a href="#collapseCardExample" class="d-block card-header py-2" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-info">Hallo,</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <p class="mb-0 text-dark">
                        Selamat Datang <span class="text"><b><?= $this->session->username; ?></b></span>
                        didalam Sistem Pendukung Keputusan Penerima Dana Bantuan Rumah Desa Wangunjaya
                    <p class="text-dark"> Kecamatan Pakenjeng Kabupaten Garut.
                    </p>

                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

<!-- Kepala desa -->
<?php if ($this->session->userdata('id_user_level') == '2') : ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-info">Hallo,</h6>
                <h5 class="card-text"><small class="text-muted text-info"><?php date_default_timezone_set("Asia/Jakarta");
                                                                            echo date("d-M-Y") ?></small></h5>
            </div>
        </div>
        <div class="card-body">
            <p class="mb-0 text-dark">
                Selamat Datang <span class="text"><b><?= $this->session->username; ?></b></span>
                didalam Sistem Pendukung Keputusan Penerima Dana Bantuan Rumah Desa Wangunjaya
            <p class="text-dark"> Kecamatan Pakenjeng Kabupaten Garut.
            </p>


        </div>
    </div>
<?php endif; ?>


<!-- Kepala Dusun -->
<?php if ($this->session->userdata('id_user_level') == '3') : ?>
    <div class="card shadow mb-4">
        <div class="card-header py-2">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-info">Hallo,</h6>
                <h5 class="card-text"><small class="text-muted"><?= date("d-M-Y") ?></small></h5>
            </div>
        </div>
        <div class="card-body text-dark">
            <p class="mb-0 ">
                Selamat Datang <span class="text"><b><?= $this->session->username; ?></b></span>
                didalam Sistem Pendukung Keputusan Penerima Dana Bantuan Rumah Desa Wangunjaya
            <p class="text-dark"> Kecamatan Pakenjeng Kabupaten Garut.
            </p>

        </div>
    </div>

    <div class="card shadow text-dark  mb-5">

        <a href="#collapseCardExample" class="d-block card-header py-2" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-edit"></i> Panduan</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <p class="mb-0 text-dark">
                    Panduan ini merupakah cara penggunaan aplikasi atau suatu tahapan yang harus dilakukan oleh kepala dusun dalam mengolah data
                <p class="mb-0 text-dark"> penerima bantuan, sistem tidak dapat melakukan proses perhitungaan ketika data calon penerima tidak melakukan rekap penilaian.</p>
                </p>
                <p class="mb-1 mx-4 text-dark"> 1. Memasukan data calon penerima bantuan (Warga).
                <p class="mb-2 mx-5 text-dark"> Pada tahapan ini setiap kepala dusun dapat memasukan atau menambah, mengubah dan menghapus data warga calon penerima bantuan
                    dengan memilih menu calon penerima bantuan.
                <p class="mb-1 mx-4 text-dark"> 2. Melakukan rekap penilaian
                <p class="mb-2 mx-5 text-dark"> Setelah memasukan data warga calon penerima bantuan, pada tahapan ini kepala dusun dapat
                    melakukan rekap penilaian setiap calon penerima bantuan (perorang). Yang dimaksud dengan rekap penilaian ini
                    adalah Dengan memilih menu rekap penilaian, pilih data warga (perorang), kemudian masukan penilaian.
                    Penilaian calon penerima bantuan ini berdasarkan fakta dari setiap calon penerima bantuan seperti pekerjaan, pendapatan dan keadaan rumahnya
                    dari segi material dan kondisinya.
                <p class="mb-1 mx-4 text-dark"> 3. Melihat laporan
                <p class="mb-2 mx-5 text-dark"> Pada tahapan ini setiap kepala dusun dapat melihat lapoan data penerima bantuan yang harus didahulukan
                    yang sudah dihitung oleh sistem.
                <p class="mb-1 mx-4 text-dark"> 4. Setiap kepala dusun dapat mencetak atau menyimpan data penerima bantuan.
                <p class="mb-2 mx-5 text-dark">
                </p>

                </p>


                <p>
            </div>
        </div>
    </div>

<?php endif; ?>


<?php $this->load->view('layouts/footer_admin'); ?>

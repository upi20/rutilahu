<?php $this->load->view('template/header_user'); ?>
                    
<div class="card bg-gray-100 mb-4">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img height="220" src="<?= base_url('assets/img/profile/1.jpg'); ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img height="220" src="<?= base_url('assets/img/profile/2.png'); ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img height="220" src="<?= base_url('assets/img/profile/3.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
  <div class="card-body text-dark">
    <h5 class="card-title text-info">Desa Wangunjaya</h5>
    <p class="card-text">
   

    <p class="mb-1">Desa Wangunjaya merupakan salah satu desa yang masuk kedalam Kecamatan Pakenjeng, Kabupaten Garut, Provinsi Jawa Barat. 
        </p>
        <p>Desa Wangunjaya memiliki luas wilayah 964 Ha, secara geografis terletak di 107,66 BB dan -7,439 LS, dengan batas wilayah sebagai berikut:</p>
        <p class="mb-1 mx-3">1. Sebelah utara Desa	: Panyindangan Kecamatan Pakenjeng</p>
        <p class="mb-1 mx-3">2. Sebelah timur		    : Desa Linggarjati Kecamatan Pamulihan</p>
        <p class="mb-1 mx-3">3. Sebelah selatan	    : Desa Jatiwangi Kecamatan Pakenjeng</p>
        <p class=" mx-3">4. Sebelah barat		    : Desa Depok Kecamatan Pakenjeng</p>
                                     
        <p class="mb-1">Orbitasi atau jarak dari pusat pemerintahan, sebagai berikut:</p>
            <p class="mb-1 mx-3">1. Jarak dari Pusat Pemerintahan Kecamatan	: 6 KM</p>
            <p class="mb-1 mx-3">2. Jarak dari Pusat Pemerintahan Kabupaten	: 65 KM</p>
            <p class="mb-1 mx-3">3.	Jarak dari Pusat Pemerintahan Provinsi	: 140 KM.</p>
            <p class="mb-1 mx-3">4. Jarak dari Pusat Pemerintahan Pusat		: 60 KM</p>
            <p></p>
            <p>Tofografi tanah Kecamatan Pakenjeng pada umumnya berombak atau bergelombang, penuh perbukitan dan pegunungan, kemiringan tanah rata-rata 0-45 kesebelah selatan. </p>


    <h5 class="card-text text-dark"><small class="text-muted"><?php date_default_timezone_set("Asia/Jakarta"); echo date("d-M-Y H:i:s")?></small></h5>
  </div>
  </div>
<div class="car-body mb-5">
  <div class="embed-responsive embed-responsive-21by9">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2915559332655!2d107.66402441450505!3d-7.432954575289937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e66215554d76d31%3A0xb50fc5591e068517!2sKANTOR%20DESA%20WANGUNJAYA!5e0!3m2!1sid!2sid!4v1654548040992!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<?php $this->load->view('template/footer_user'); ?>
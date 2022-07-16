<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Rutilahu Desa Wangunjaya</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
    /* table, th, td {
        border: 1px solid black;
    } */
    table1, th1, td1 {
        border: 1px solid black;
    }
	.line-title {
		border: 0;
		border-style: inset;
		border-top: 1px solid #000;
		margin-top: 1px;
	}
	.hr-border {
		border: 0;
		border-radius: 1px;
		border: 1px solid #000;
		margin-top: 1px;
	}
	.line-title1 {
		margin-top: 4px;
		margin-bottom: 4px;
	}
	.border-bottom {
        border-bottom: 1px solid #000;
	}
	.border-b {
        
        margin-top: 30px;
        margin-bottom: 1px;
	}
    .tahun {
        margin-top: 1px;
        margin-bottom: 25px;
    }
    .ttd {
        margin-top: 50px;
        margin-bottom: 1px;
    }
    .ttd1 {
        margin-top: 50px;
    }
    .kades {
        margin-top: 1px;
    }
    .nama-kades {
        margin-top: 20px;
    }

</style>
<body>

	<img src="<?= base_url('assets/img/profile/Garut.png')?>" alt="Logo Rutilahu Desa Wangunjaya" style="position: absolute; width: 65px; height: 75px;">
    <table style="width: 100%;">
	<tr>
		<td align="center">
			<span style="line-height: 1.4; font-weight: bold;">
		PEMERINTAH KABUPATEN GARUT <br>
    </span>
        <b>KECAMATAN PAKENJENG</b>
		<h2 class="line-title1">DESA WANGUNJAYA</h2>
        Jl. Raya Jagapati Kusumah N0. 01 Wangunjaya Pakenjeng-Garut 44164 
     <hr  class="hr-border">
		</td>
	</tr>
</table>

<p class="border-b" align="center">
	<b >LAPORAN DATA PENERIMA BANTUAN RUTILAHU</b><br>
</p>
<p class="tahun" align="center">
TAHUN 2022 / 2023
</p>

<table border="1" width="100%">
	<thead>
		<tr align="center">
			<th>NIK</th>
			<th>Penerima Bantuan</th>
			<th>Alamat</th>
			<th>Nilai</th>
			<th width="15%">Ranking</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no=1;
			foreach ($hasil as $keys): ?>
		<tr>
			<td align="center">
				<?php
				$nik_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
				echo $nik_alternatif['nik'];
				?>

			<td align="left" style="padding-left: 5px;">
				<?php
				$nama_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
				echo $nama_alternatif['nama'];
				?>

		<td style="padding-left: 5px;">
				<?php
				$alamat_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
				echo $alamat_alternatif['alamat'];
				?>
			</td>
			<td style="padding-left: 10px; padding-right: 10px;" align="center"><?= round(($keys->nilai),3) ?></td>
			<td align="center"><?= $no; ?></td>
		</tr>
		<?php
			$no++;
			endforeach ?>
	</tbody>
</table>
<script type="text/javascript">
    window.print();
</script>
</body>

<table class="ttd" style="width: 100%;">
    <thead>
        <tr align="center">
            <td style="width: 60%;">

            </td>
            <td>
              Wangunjaya, <?php date_default_timezone_set("Asia/Jakarta"); echo date("d, M Y")?><br>
                <p class="kades">Kepala Desa Wangunjaya,</p><br><br>
                <b class="nama-kades">Dadang Sutisna
                </br>

          </td>
        </tr>
</table>
</html>
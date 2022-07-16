<?php $this->load->view('template/header_user'); ?>
<div class="card shadow mb-4">
	<div class="card-header py-2">
		<h6 class="m-0 font-weight-bold text-info">
			Informasi</h6>
	</div>

</div>

<div class="card-body mb-5 text-dark">
	<h5 class="card-title text-info">Kepala Desa</h5>
	<p class="card-text">


	<p class="mb-1">Para warga bisa mendapatkan dana bantuan rumah tidak layak huni (<strong>Rutilahu</strong>), Warga Desa Wangunjaya Kecamatan Pakenjeng dapat
		mengajukan permohonan ke masing-masing Kepala Dusun, yang nantinya data calon penerima bantuan akan di inputkan oleh Kepala Dusun.
	</p>
	<h5 class="card-text"><small class="text-muted"><?= date("d-M-Y") ?></small></h5>
</div>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header d-sm-flex align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-info">Daftar Penerima Bantuan</h6>
		<?php if ($level_id == 1) : ?>
			<?php if ($is_publish == 1) : ?>
				<a href="<?= base_url('Perhitungan/unpublish'); ?>" class="btn btn-danger btn-sm"> Unpublish </a>
			<?php else : ?>
				<a href="<?= base_url('Perhitungan/publish'); ?>" class="btn btn-info btn-sm"> Publish </a>
			<?php endif; ?>
		<?php endif; ?>
	</div>

	<div class="card-body">
		<?php if ($is_publish == 1 || $level_id == 1) : ?>
			<div class="table-responsive">
				<table class="table table-bordered text-dark table-sm" width="100%" cellspacing="0">
					<thead>
						<tr align="center">
							<td width="17%">NIK</td>
							<td width="20%">Nama</td>
							<td>Alamat</td>
							<td>Nilai Preferensi</td>
							<td width="15%">Ranking</td>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($hasil as $keys) : ?>
							<tr>
								<td align="center">
									<?php
									$nik_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
									echo $nik_alternatif['nik'];
									?>

								</td>

								<td align="left" style="padding-left: 5px;">

									<?php
									$nama_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
									echo $nama_alternatif['nama'];
									?>

								</td>

								<td style="padding-left: 5px;">

									<?php
									$alamat_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
									echo $alamat_alternatif['alamat'];
									?>

								</td>
								<td align="center"><?= (round(($keys->nilai), 3)) ?></td>
								<td align="center"><?= $no; ?></td>
							</tr>
						<?php
							$no++;
						endforeach ?>
					</tbody>
				</table>
				<div class="d-sm-flex align-items-center justify-content">
					<div class="card-tools">
						<a target="_blank" href="<?= base_url('Perhitungan/print'); ?>" class="btn btn-primary btn-sm mx-2"> <i class="fa fa-print"></i> Cetak </a>
					</div>
				</div>
			</div>
		<?php else : ?>
			<p class="text-center">
				Mohon maaf data belum di publish oleh admin
			</p>
		<?php endif ?>
	</div>
</div>


<?php $this->load->view('template/footer_user'); ?>

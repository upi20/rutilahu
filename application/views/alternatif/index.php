<?php $this->load->view('layouts/header_admin'); ?>

<?= $this->session->flashdata('message'); ?>

<div class="card shadow mb-5">
	<!-- /.card-header -->
	<div class="card-header py-2">
		<div class="d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-info"> Daftar Data Calon Penerima Bantuan</h6>
			<?php if ($level_id == 3) : ?>
				<a href="<?= base_url('Alternatif/create'); ?>" class="btn btn-info btn-sm"> <i class="fa fa-plus"></i> Tambah Data </a>
			<?php endif ?>
		</div>
	</div>

	<div class="card-body">
		<div class="table-responsive text-dark">
			<table class="table table-bordered table-sm text-dark" id="dataTable" width="100%" cellspacing="0">
				<thead class="text-dark">
					<tr align="center">
						<td>No</td>
						<td>NIK</td>
						<?php if ($level_id != 3) : ?>
							<td>Kepala Dusun</td>
						<?php endif ?>
						<td>Nama</td>
						<td>JK</td>
						<td>No_telp</td>
						<td>Alamat</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($list as $data => $value) {
					?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?php echo $value->nik ?></td>
							<?php if ($level_id != 3) : ?>
								<td align="left"><?php echo $value->kepala_dusun ?></td>

							<?php endif ?>
							<td align="left"><?php echo $value->nama ?></td>
							<td align="center"><?php echo $value->jenis_kelamin ?></td>
							<td align="left"><?php echo $value->no_telp ?></td>
							<td align="left"><?php echo $value->alamat ?></td>
							<td>
								<div class="btn">
									<a title="Lihat Data" href="<?= base_url('Alternatif/detail/' . $value->id_alternatif) ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
									<?php if ($level_id == 3) : ?>

										<a title="Edit Data" href="<?= base_url('Alternatif/edit/' . $value->id_alternatif) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
										<a title="Hapus Data" href="<?= base_url('Alternatif/destroy/' . $value->id_alternatif) ?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

									<?php endif ?>
								</div>
							</td>
						</tr>
					<?php
						$no++;
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $this->load->view('layouts/footer_admin'); ?>

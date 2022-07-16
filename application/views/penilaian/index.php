<?php $this->load->view('layouts/header_admin'); ?>


<?= $this->session->flashdata('message'); ?>

<div class="card shadow mb-5">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-info"> Daftar Data Penilaian</h6>
	</div>

	<div class="card-body text-dark">
		<div class="table-responsive">
			<table class="table table-bordered table-sm text-dark" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr align="center">
						<td width="5%">No</td>
						<td width="15%">NIK</td>
						<td width="20%">Nama</td>
						<td>Alamat</td>
						<td width="15%">Aksi</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($alternatif as $keys) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td align="center"><?= $keys->nik ?></td>
							<td align="left"><?= $keys->nama ?></td>
							<td align="left"><?= $keys->alamat ?></td>
							<?php $cek_tombol = $this->Penilaian_model->untuk_tombol($keys->id_alternatif); ?>
							<td>
								<?php if ($level_id == 3) : ?>
									<?php if ($cek_tombol == 0) { ?>
										<a data-toggle="modal" href="#set<?= $keys->id_alternatif ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Input</a>
									<?php } else { ?>
										<a data-toggle="modal" href="#edit<?= $keys->id_alternatif ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
									<?php } ?>
								<?php else : ?>
									<a data-toggle="modal" href="#edit<?= $keys->id_alternatif ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Lihat</a>
								<?php endif ?>
							</td>
						</tr>

						<!-- Modal -->
						<div class="modal fade" id="set<?= $keys->id_alternatif ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Input Penilaian</h5>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<?= form_open('Penilaian/tambah_penilaian') ?>
									<div class="modal-body text-dark">
										<?php foreach ($kriteria as $key) : ?>
											<?php
											$sub_kriteria = $this->Penilaian_model->data_sub_kriteria($key->id_kriteria);
											?>
											<?php if ($sub_kriteria != NULL) : ?>
												<input type="text" name="id_alternatif" value="<?= $keys->id_alternatif ?>" hidden>
												<input type="text" name="id_kriteria[]" value="<?= $key->id_kriteria ?>" hidden>
												<div class="form-group">
													<label class="font-weight" for="<?= $key->id_kriteria ?>"><?= $key->keterangan ?></label>
													<select name="nilai[]" class="form-control" id="<?= $key->id_kriteria ?>" required>
														<option value="">--Pilih--</option>
														<?php foreach ($sub_kriteria as $subs_kriteria) : ?>
															<option value="<?= $subs_kriteria['id_sub_kriteria'] ?>"><?= $subs_kriteria['deskripsi'] ?> </option>
														<?php endforeach ?>
													</select>
												</div>
											<?php endif ?>
										<?php endforeach ?>
									</div>
									<div class="modal-footer">
										<button class="btn btn-secondary btn-icon-split btn-sm" data-dismiss="modal"><span class="icon text-white-50"><i class="fas fa-times"></i></span>
											<span class="text">Batal</span></button>
										<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-save"></i> Simpan</button>
									</div>
									</form>
								</div>
							</div>
						</div>

						<!-- Modal -->
						<div class="modal fade" id="edit<?= $keys->id_alternatif ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="myModalLabel"><i class="fa fa-edit"></i> Edit Penilaian</h5>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<?= form_open('Penilaian/update_penilaian') ?>
									<div class="modal-body">
										<?php foreach ($kriteria as $key) : ?>
											<?php
											$sub_kriteria = $this->Penilaian_model->data_sub_kriteria($key->id_kriteria);
											?>
											<?php if ($sub_kriteria != NULL) : ?>
												<input type="text" name="id_alternatif" value="<?= $keys->id_alternatif ?>" hidden>
												<input type="text" name="id_kriteria[]" value="<?= $key->id_kriteria ?>" hidden>
												<div class="form-group">
													<label class="font-weight" for="<?= $key->id_kriteria ?>"><?= $key->keterangan ?></label>
													<select name="nilai[]" class="form-control" id="<?= $key->id_kriteria ?>" required>
														<option value="">--Pilih--</option>
														<?php foreach ($sub_kriteria as $subs_kriteria) : ?>
															<?php $s_option = $this->Penilaian_model->data_penilaian($keys->id_alternatif, $subs_kriteria['id_kriteria']); ?>
															<option value="<?= $subs_kriteria['id_sub_kriteria'] ?>" <?php if ($subs_kriteria['id_sub_kriteria'] == $s_option['nilai']) {
																															echo "selected";
																														} ?>><?= $subs_kriteria['deskripsi'] ?> </option>
														<?php endforeach ?>
													</select>
												</div>
											<?php endif ?>
										<?php endforeach ?>
									</div>
									<div class="modal-footer">
										<button class="btn btn-secondary btn-icon-split btn-sm" data-dismiss="modal"><span class="icon text-white-50"><i class="fas fa-times"></i></span>
											<span class="text">Batal</span></button>
										<?php if ($level_id == 3) : ?>
											<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-save"></i> Ubah</button>
										<?php endif ?>
									</div>
									</form>
								</div>
							</div>
						</div>
					<?php
						$no++;
					endforeach
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $this->load->view('layouts/footer_admin'); ?>

<?php $this->load->view('layouts/header_admin'); ?>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-2">
		<h7 class="m-0 font-weight-bold text-info">Data Calon Penerima Bantuan</h7>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered text-dark table-sm" width="100%" cellspacing="0">
				<thead>
					<tr align="center">
						<th width="5%">No</th>
						<th width="12%">Nama</th>
						<?php foreach ($kriteria as $key) : ?>
							<th><?php echo $key->keterangan ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($alternatif as $keys) : ?>
						<tr align="center">
							<td><?= $no; ?></td>
							<td align="left"><?= $keys->nama ?></td>
							<?php foreach ($kriteria as $key) : ?>

								<td>
									<?php

									$data_pencocokan = $this->Perhitungan_model->data_nilai($keys->id_alternatif, $key->id_kriteria);
									echo $data_pencocokan['deskripsi'] ?? '';
									?>
								</td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach
					?>
				</tbody>
			</table>
		</div>
		<!--Konversi Data Warga  -->

		<div class="table-responsive">
			<table class="table table-bordered text-dark table-sm" width="100%" cellspacing="0">
				<thead>
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama</th>
						<?php foreach ($kriteria as $key) : ?>
							<th><?= $key->kode_kriteria ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($alternatif as $keys) : ?>
						<tr align="center">
							<td><?= $no; ?></td>
							<td align="left"><?= $keys->nama ?></td>
							<?php foreach ($kriteria as $key) : ?>
								<td>
									<?php
									$data_pencocokan = $this->Perhitungan_model->data_nilai($keys->id_alternatif, $key->id_kriteria);
									echo $data_pencocokan['nilai'] ?? '';
									?>
								</td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach
					?>
					<tr align="center" class="bg-light">
						<td colspan="2">Nilai X-</td>
						<?php foreach ($kriteria as $key) : ?>
							<td>
								<?php
								$min_max = $this->Perhitungan_model->get_max_min($key->id_kriteria);
								echo $min_max['min'] ?? '';
								?>
							</td>
						<?php endforeach ?>
					</tr>
					<tr align="center" class="bg-light">
						<td colspan="2">Nilai X+</td>
						<?php foreach ($kriteria as $key) : ?>
							<td>
								<?php
								$min_max = $this->Perhitungan_model->get_max_min($key->id_kriteria);
								echo $min_max['max'] ?? '';
								?>
							</td>
						<?php endforeach ?>
					</tr>
				</tbody>
			</table>
		</div>

		<!-- Normalisasi Matrik -->
		<!-- <hr> -->
		<!-- Normalisasi Matrik X</br>
						<?php
						$no = 1;
						foreach ($alternatif as $keys) ?>
				
						
						<?php foreach ($kriteria as $key) : ?>
				
						<?php
							$data_pencocokan = $this->Perhitungan_model->data_nilai($keys->id_alternatif, $key->id_kriteria);
							$min_max = $this->Perhitungan_model->get_max_min($key->id_kriteria);
							$hasil = @(round(($data_pencocokan['nilai'] - $min_max['min']) / ($min_max['max'] - $min_max['min']), 3));
							$hasil = 'U(x)<sub>'  . $no . '</sub> = ' . "(" . $data_pencocokan['nilai'] . '-' . $min_max['min'] . ")" . '/' . "(" . $min_max['max'] . '-' . $min_max['min'] . ")" . '=' . $hasil . '</br>';
							echo $hasil;

						?>
						<?php endforeach ?>
					<?php $no++;  ?> -->
		<!-- 		
		<br></br> -->


		<div class="table-responsive">
			<table class="table table-bordered text-dark table-sm" width="100%" cellspacing="4">
				<thead>
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama</th>
						<?php foreach ($kriteria as $key) : ?>
							<th width="10%"><?= $key->kode_kriteria ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($alternatif as $keys) : ?>
						<tr align="center">
							<td><?= $no; ?></td>
							<td align="left"><?= $keys->nama ?></td>
							<?php foreach ($kriteria as $key) : ?>
								<td>
									<?php
									$data_pencocokan = $this->Perhitungan_model->data_nilai($keys->id_alternatif, $key->id_kriteria);
									$min_max = $this->Perhitungan_model->get_max_min($key->id_kriteria);
									$hasil = @(round(($data_pencocokan['nilai'] - $min_max['min']) / ($min_max['max'] - $min_max['min']), 3));
									echo $hasil;
									?>
								</td>
							<?php endforeach ?>
						</tr>

					<?php
						$no++;
					endforeach ?>
				</tbody>
			</table>
		</div>

		<!-- Boobt kriteria -->
		<hr>
		<?= $rumus ?>
		<br>

		<div class="table-responsive">
			<table class="table table-bordered text-dark table-sm" width="100%" cellspacing="0">
				<thead>
					<tr align="center">
						<?php
						$no = 1;
						$kriteria = $this->Perhitungan_model->get_kriteria(); ?>

						<?php foreach ($kriteria as $key) : ?>
							<th><?= $key->kode_kriteria ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<tr align="center">
						<?php
						$hbobot = 0;
						$tb = $this->Kriteria_model->get_jumlah_bobot()->row();
						$bot = $this->Kriteria_model->tampil();

						foreach ($bot as $key) :

							$hbobot = @(round(($key->bobot / $tb->total), 4));

						?>
							<td>
								<?= $hbobot ?>
							</td>
						<?php $no++;
						endforeach ?>
					</tr>
				</tbody>
			</table>
		</div>
		</hr>

		<!-- Perkalian Matrik Normalisasi Dengan Bobot Kriteria
				<div class="table-responsive">
			<table class="table table-bordered text-dark table-sm" width="100%" cellspacing="0">
				<thead>
					<tr align="center">
						<th width="5%">No</th>
						<th width="18%">Nama</th>
						<th>Perhitungan</th>
						<th width="17%">Total Nilai Preferensi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$kriteria = $this->Perhitungan_model->get_kriteria();
					$alternatif = $this->Perhitungan_model->get_alternatif();
					$this->Perhitungan_model->hapus_hasil();
					$no = 1;
					foreach ($alternatif as $keys) : ?>
					<tr align="center">
						<td><?= $no; ?></td>
						<td align="left"><?= $keys->nama ?></td>
						<td>V<sub>(x)</sub> =
						<?php
						$nilai_total = 0;
						foreach ($kriteria as $key) :
							$data_pencocokan = $this->Perhitungan_model->data_nilai($keys->id_alternatif, $key->id_kriteria);
							$min_max = $this->Perhitungan_model->get_max_min($key->id_kriteria);
							$hasil_normalisasi = @(round(($data_pencocokan['nilai'] - $min_max['min']) / ($min_max['max'] - $min_max['min']), 9));

							$tb = $this->Kriteria_model->get_jumlah_bobot()->row();
							$hbobot = @(round(($key->bobot / $tb->total), 9));
							$nilai_total += $hbobot * $hasil_normalisasi;
							$nilai_total1 = $hbobot * $hasil_normalisasi;

							$hasil = "(" . $hbobot . '*' . $hasil_normalisasi . ")";
							$hasil = 'U(x)<sub>'  . $no . '</sub>= ' . "(" . $hbobot . ' * ' . $hasil_normalisasi . ")" . ' = ' . $nilai_total1 . '</br>';


							echo  $hasil;
						endforeach;
						$hasil_akhir = [
							'id_alternatif' => $keys->id_alternatif,
							'nilai' => $nilai_total
						];
						$result = $this->Perhitungan_model->insert_nilai_hasil($hasil_akhir);
						?>
						</td>
						<td>
							<?= $nilai_total; ?>
						</td>
					</tr>
					
					<?php
						$no++;
					endforeach ?>
				</tbody>
			</table>
		</div> -->

	</div>
</div>



<div class="card shadow mb-4">

	<div class="card-header py-2">
		<h6 class="m-0 font-weight-bold text-info"> Perkalian Matrik Normalisasi Dengan Bobot Kriteria</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered text-dark table-sm" width="100%" cellspacing="0">
				<thead>
					<tr align="center">
						<th width="5%">No</th>
						<th width="18%">Nama</th>
						<th>Perhitungan</th>
						<th width="17%">Total Nilai Preferensi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$kriteria = $this->Perhitungan_model->get_kriteria();
					$alternatif = $this->Perhitungan_model->get_alternatif();
					$this->Perhitungan_model->hapus_hasil();
					$no = 1;
					foreach ($alternatif as $keys) : ?>
						<tr align="center">
							<td><?= $no; ?></td>
							<td align="left"><?= $keys->nama ?></td>
							<td>SUM
								<?php
								$nilai_total = 0;
								foreach ($kriteria as $key) :
									$data_pencocokan = $this->Perhitungan_model->data_nilai($keys->id_alternatif, $key->id_kriteria);
									$min_max = $this->Perhitungan_model->get_max_min($key->id_kriteria);
									$hasil_normalisasi = (round((($data_pencocokan['nilai'] ?? 0) - $min_max['min']) / ($min_max['max'] - $min_max['min']), 3));

									$tb = $this->Kriteria_model->get_jumlah_bobot()->row();
									$hbobot = (round(($key->bobot / $tb->total), 4));
									$nilai_total += $hbobot * $hasil_normalisasi;

									echo "(" . $hbobot . "x" . $hasil_normalisasi . ") ";
								endforeach;
								$hasil_akhir = [
									'id_alternatif' => $keys->id_alternatif,
									'nilai' => $nilai_total
								];
								$result = $this->Perhitungan_model->insert_nilai_hasil($hasil_akhir);
								?>
							</td>
							<td>
								<?= (round(($nilai_total), 3)); ?>
							</td>
						</tr>

					<?php
						$no++;
					endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>



<?php
$this->load->view('layouts/footer_admin');
?>

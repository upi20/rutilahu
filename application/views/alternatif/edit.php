<?php $this->load->view('layouts/header_admin'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"> Edit Data Calon Penerima Bantuan</h6>
    </div>
	
	<div class="row">
		<div class="col-lg-8"></div>
	</div>
	<?php echo form_open('Alternatif/update/'.$alternatif->id_alternatif); ?>


		<div class="card-body text-dark">
			<div class="col">
				<?php echo form_hidden('id_alternatif', $alternatif->id_alternatif) ?>
				
				<div class="form-group row">
					<label class="col-sm-2">NIK</label>
					<div class="col-md-4">
						<input autocomplete="off" type="number" name="nik" value="<?php echo $alternatif->nik ?>" required class="form-control" readonly/>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Nama Lengkap</label>
					<div class="col-sm-4">
						<input autocomplete="off" type="text" name="nama" value="<?php echo $alternatif->nama ?>" required class="form-control"/>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Jenis Kelamin</label>
					<div class="col-md-4">
						<select name="jenis_kelamin" class="form-control" required>
							<option value="">--Pilih Jenis Kelamin--</option>
							<option value="Laki-laki" <?php if($alternatif->jenis_kelamin == "Laki-laki"){ echo 'selected'; } ?>>Laki-laki</option>
							<option value="Perempuan" <?php if($alternatif->jenis_kelamin == "Perempuan"){ echo 'selected'; } ?>>Perempuan</option>						
						</select>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">No_Telp</label>
					<div class="col-md-4">
						<input autocomplete="off" type="number" name="no_telp" required value="<?php echo $alternatif->no_telp ?>" class="form-control"/>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Alamat Lengkap</label>
					<div class="col-md-4">
						<textarea autocomplete="off" type="text" name="alamat" required class="form-control"><?php echo $alternatif->alamat ?></textarea>
					</div>
				</div>
		</div>
		</div>
	<div class="card-footer">
		<div class="text-center col-sm-7">
			<a href="<?= base_url('Alternatif'); ?>" class="btn btn-secondary btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
			<span class="text">Kembali</span>
			</a>
			<button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Reset</button>
			<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-save"></i> Simpan</button>
		</div>
	</div>
</div>

<?php $this->load->view('layouts/footer_admin'); ?>
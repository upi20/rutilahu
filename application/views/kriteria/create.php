<?php $this->load->view('layouts/header_admin'); ?>

<?= $this->session->flashdata('message'); ?> 

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"><i class="fas fa-fw fa-plus"></i> Tambah Data Kriteria</h6>
    </div>
	
	<?php echo form_open('Kriteria/store'); ?>
		<div class="card-body text-dark">
			<div class="col">
				<div class="form-group row">
					<label class="col-sm-2">Kode Kriteria</label>
					<div class="col-md-4">
						<select name="kode_kriteria" class="form-control" required>
							<option value="">--Pilih--</option>
							<option value="K1">K1</option>
							<option value="K2">K2</option>
							<option value="K3">K3</option>
							<option value="K4">K4</option>
							<option value="K5">K5</option>
							<option value="K6">K6</option>
							<option value="K7">K7</option>
							<option value="K8">K8</option>
							<option value="K9">K9</option>
							<option value="K10">K10</option>	
						</select>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Nama Kriteria</label>
					<div class="col-md-4">
						<input autocomplete="off" type="text" name="keterangan" required class="form-control"/>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Bobot Kriteria</label>
					<div class="col-md-4">
						<input autocomplete="off" type="number" name="bobot" step="0.0001" required class="form-control"/>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
		<div class="text-center col-sm-7">
			<a href="<?= base_url('Kriteria'); ?>" class="btn btn-secondary btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
				<span class="text">Kembali</span>
			</a>
			<button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Reset</button>
			<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-save"></i> Simpan</button>
		</div>
        </div>
	<?php echo form_close() ?>
</div>

<?php $this->load->view('layouts/footer_admin'); ?>
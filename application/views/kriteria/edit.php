<?php $this->load->view('layouts/header_admin'); ?>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"><i class="fas fa-fw fa-edit"></i> Edit Data Kriteria</h6>
    </div>
	
	<?php echo form_open('Kriteria/update/'.$kriteria->id_kriteria); ?>
		<div class="card-body text-dark">
			<div class="col">
				<?php echo form_hidden('id_kriteria', $kriteria->id_kriteria) ?>
				<div class="form-group row">
					<label class="col-sm-2">Kode Kriteria</label>
					<div class="col-md-4">
						<input autocomplete="off" type="text" name="kode_kriteria" value="<?php echo $kriteria->kode_kriteria ?>" required class="form-control"/>
					</div>
				
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Nama Kriteria</label>
					<div class="col-md-4">
						<input autocomplete="off" type="text" name="keterangan" value="<?php echo $kriteria->keterangan ?>" required class="form-control"/>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Bobot Kriteria</label>
					<div class="col-md-4">
						<input autocomplete="off" type="number" name="bobot" step="1" value="<?php echo $kriteria->bobot ?>" required class="form-control"/>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
		<div class="text-center col-sm-7">
            <a href="<?= base_url('Kriteria'); ?>" class="btn btn-secondary btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		    <span class="text">Kembali</span></a>
			
			<button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Reset</button>
				<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-save"></i> Simpan</button>
			
          </div>
        </div>
	<?php echo form_close() ?>
</div>

<?php $this->load->view('layouts/footer_admin'); ?>
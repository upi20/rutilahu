<?php $this->load->view('layouts/header_admin'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"> Data Calon Penerima Bantuan</h6>
    </div>
	
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-sm">
				<tr>
					<td width="200" class="text-dark">NIK</td>
					<td class="text-dark"> : <?php echo $alternatif->nik ?></td>
				</tr>

				
				<tr>
					<td class="text-dark">Nama Lengkap</td>
					<td class="text-dark">: <?php echo $alternatif->nama ?></td>
				</tr>
				
				<tr>
					<td class="text-dark">Jenis Kelamin</td>
					<td class="text-dark">: <?php echo $alternatif->jenis_kelamin ?></td>
				</tr>
				
				<tr>
					<td class="text-dark">Telepon</td>
					<td class="text-dark">: <?php echo $alternatif->no_telp ?></td>
				</tr>
				
				<tr>
					<td class="text-dark">Alamat</td>
					<td class="text-dark">: <?php echo $alternatif->alamat ?></td>
				</tr>
				<tr>
					<td ></td>
					<td></td>
				</tr>
			</table>
		</div>
	</div>
	
    <div class="card-footer">
		<a href="<?= base_url('Alternatif'); ?>" class="btn btn-secondary btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		<span class="text">Kembali</span>
		</a>
	</div>
</div>

<?php $this->load->view('layouts/footer_admin'); ?>
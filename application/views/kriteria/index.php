<?php $this->load->view('layouts/header_admin'); ?>


<?= $this->session->flashdata('message'); ?>
<div class="row">
    
<div class="col-lg-9">
<div class="card shadow mb-5">
    <!-- /.card-header -->
    <div class="card-header py-2">
		<div class="d-sm-flex align-items-center justify-content-between">
        	<h6 class="m-0 font-weight-bold text-info"> Daftar Data Kriteria</h6>
    		<div class="card-tools">
				<a href="<?= base_url('Kriteria/create'); ?>" class="btn btn-info btn-sm"> <i class="fa fa-plus"></i> Tambah Data </a>
			</div>
		</div>
	</div>

    <div class="card-body text-dark">
		<div class="table-responsive">
			<table class="table table-bordered text-dark table-sm" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr align="center">
						<td width="5%">No</td>
						<td width="20%">Kode Kriteria</td>
						<td>Nama Kriteria</td>
						<td>Bobot</td>
						<td width="18%">Aksi</td>
					</tr>
				</thead>
				<tbody>
					<?php
						$no=1;
						foreach ($list as $data => $value) {
					?>
					<tr align="center">
						<td><?=$no ?></td>
						<td><?php echo $value->kode_kriteria ?></td>
						<td><?php echo $value->keterangan ?></td>
						<td><?php echo $value->bobot ?></td>
						<td>
							<div class="btn">
								<a data-toggle="tooltip" data-placement="bottom" title="Edit Data" href="<?=base_url('Kriteria/edit/'.$value->id_kriteria)?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
								<a data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="<?=base_url('Kriteria/destroy/'.$value->id_kriteria)?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
</div>

	<div class="col-lg-3">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">
                    
                    <span>Perhatian</span></h6>
            </div>
            <div class="card-body text-dark">
           Bobot digunakan untuk mengukur  kepentingan dari tiap-tiap kriteria.
		   <p class="mt-2" >Tingkat kepentingan bobot:</p>
		   <p  class="mx-3">1 = Tidak penting</p> 
		   <p  class="mx-3">2 = Kurang penting</p> 
		   <p  class="mx-3">3 = Cukup penting</p> 
		   <p  class="mx-3">4 = Penting</p> 
		   <p  class="mx-3">5 = Sangat penting</p> 
            
            </div>
        </div>
    </div>
</div>



<?php $this->load->view('layouts/footer_admin'); ?>
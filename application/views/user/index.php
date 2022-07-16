<?php $this->load->view('layouts/header_admin'); ?>

<?= $this->session->flashdata('message'); ?>

<div class="card shadow mb-4 ">
    <!-- /.card-header -->
    <div class="card-header py-2">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-info"> Daftar Data User</h6>
            <div class="card-tools">
			<a href="<?= base_url('User/create'); ?>" class="btn btn-info btn-sm"> <i class="fa fa-plus"></i> Tambah Data </a>
			</div>
		</div>
    </div>

    <div class="card-body text-dark">
		<div class="table-responsive table-sm text-dark ">
			<table class="table table-bordered  table-sm text-dark " id="dataTable" width="100%" cellspacing="0">
				<thead class="">
					<tr align="center">
						<td width="5%">No</th>
						<td>Nama</td>
						<td>Username</td>
						<td>E-mail</td>
						<td>Level</td>
						<td width="16%">Aksi</td>
					</tr>
				</thead>
				<tbody class="">
					<?php
						$no=1;
						foreach ($list as $data => $value) { ?>
					<tr align="center">
						<td><?=$no ?></td>
						<td><?php echo $value->nama ?></td>
						<td><?php echo $value->username ?></td>
						<td><?php echo $value->email ?></td>
						<td>
						<?php
						foreach ($user_level as $k) {
							if($k->id_user_level == $value->id_user_level){
								echo $k->user_level;
							}
						}
						?>
						</td>
						<td>
							<div class="btn">
								<a title="Lihat Data" href="<?=base_url('User/show/'.$value->id_user)?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
								<a title="Edit Data" href="<?=base_url('User/edit/'.$value->id_user)?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
								<a  title="Hapus Data" href="<?=base_url('User/destroy/'.$value->id_user)?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
<?php $this->load->view('layouts/header_admin'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"> Detail Data User</h6>
    </div>
	
	<div class="card-body text-dark">
		<div class="table-responsive table-sm">
			<table class="table text-dark" width="100%" cellspacing="0">
				<tr>
					<td width="200">Nama Lengkap</td>
					<td>: <?php echo $data->nama?></td>
				</tr>
				<tr>
					<td width="200">Username</td>
					<td>: <?php echo $data->username?></td>
				</tr>
				<tr>
					<td width="200">E-Mail</td>
					<td>: <?php echo $data->email?></td>
				</tr>
				<tr>
					<td width="200">Password</td>
					<td>: <?php echo $data->password?></td>
				</tr>
				<tr>
					<td width="200">Level</td>
					<td>:
					<?php
					foreach ($user_level as $k){
						if($k->id_user_level == $data->id_user_level){
							echo $k->user_level;
						}
					}
					?>
					</td>
				</tr>
				<tr><td><td></td></td></tr>
			</table>
		</div>
	</div>
	<div class="card-footer py-2">
		<a href="<?= base_url('User'); ?>" class="btn btn-secondary btn-sm btn-icon-split">
			<span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
			<span class="text">Kembali</span>
		</a>
	</div>
</div>


<?php $this->load->view('layouts/footer_admin'); ?>
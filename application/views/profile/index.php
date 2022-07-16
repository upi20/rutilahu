<?php $this->load->view('layouts/header_admin'); ?>

<?= $this->session->flashdata('message'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Detail Data Profile</h6>
    </div>
	
	<?php echo form_open('Profile/update/'.$profile->id_user); ?>
		<div class="card-body">
			<div class="col">
				<?php echo form_hidden('id_user', $profile->id_user) ?>
                <div class="form-group row">
                    <label class="col-sm-2">Nama Lengkap</label>
					<div class="col-md-4">
						<input autocomplete="off" type="text" name="nama" value="<?php echo $profile->nama ?>" required class="form-control"/>
					</div>
                </div>
				<div class="form-group row">
					<label class="col-sm-2">E-Mail</label>
					<div class="col-md-4">
						<input autocomplete="off" type="email" name="email" value="<?php echo $profile->email ?>" required class="form-control"/>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Username</label>
					<div class="col-md-4">
						<input autocomplete="off" type="text" name="username" value="<?php echo $profile->username ?>" required class="form-control"/>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Password</label>
					<div class="col-md-4">
						<input autocomplete="off" type="password" name="password" required class="form-control"/>
					</div>
				</div>
				
			</div>
		</div>
		<div class="card-footer">
			<div class="text-center col-sm-6">
            <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Reset</button>
            <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-save"></i> Update</button>
			</div>
        </div>
	<?php echo form_close() ?>
</div>

<?php $this->load->view('layouts/footer_admin'); ?>
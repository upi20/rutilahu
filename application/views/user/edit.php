<?php $this->load->view('layouts/header_admin'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"> Edit Data User</h6>
    </div>
	
	<?php echo form_open('User/update/'.$User->id_user); ?>
	<div class="card-body text-dark">
		<div class="col">
			<?php echo form_hidden('id_user', $User->id_user) ?>
				<div class="form-group row">
					<label class="col-sm-2">Nama Lengkap</label>
					<div class="col-md-4">
						<input autocomplete="off" type="text" name="nama" value="<?php echo $User->nama ?>" required class="form-control"/>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2">Username</label>
					<div class="col-md-4">
						<input autocomplete="off" type="text" name="username" value="<?php echo $User->username ?>" required class="form-control"/>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Password</label>
					<div class="col-md-4">
						<input autocomplete="off" type="password" name="password" required class="form-control"/>
					</div>
				</div>

				<div class="form-group row">
				<label class="col-sm-2">E-Mail</label>
				<div class="col-md-4">
					<input autocomplete="off" type="email" name="email" value="<?php echo $User->email ?>" required class="form-control"/>
				</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2">Level</label>
					<div class="col-md-4">
						<select class="form-control" name ="privilege" required> 
					</div>
					<?php
						foreach($user_level as $k) {
							$s='';
							if($k->id_user_level == $User->id_user_level){
								$s='selected';
							}
					?>
						<option value="<?php echo $k->id_user_level ?>" <?php echo $s ?>>
							<?php echo $k->user_level ?>
						</option>
					<?php } ?>
					</select>
				</div>
			</div>
		</div>
		</div>
		
		<div class="card-footer">
        	<div class="text-center col-sm-7">
				<a href="<?= base_url('User'); ?>" class="btn btn-secondary btn-sm btn-icon-split "><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
				<span class="text">Kembali</span></a>
				<button type="reset" class="btn btn-warning btn-sm text-right"><i class="fa fa-sync-alt"></i> Reset</button>
				<button type="submit" class="btn btn-info btn-sm" class="text-right"><i class="fa fa-save"></i> Update</button>
        	</div>
		</div>
		<?php echo form_close() ?>
    </div>


<?php $this->load->view('layouts/footer_admin'); ?>
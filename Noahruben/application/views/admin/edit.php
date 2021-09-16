<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Admin Edit</h3>
            </div>
			<?php echo form_open('admin/edit/'.$admin['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $admin['username']); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $admin['password']); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-3">
				<label class="control-label"><span class="text-danger">*</span>Role</label>
				<div class="form-group">
					<select class="form-control" name="role">
						<option value="<?=ROLE_ADMIN?>" <?php if($admin['role']== ROLE_ADMIN){ echo 'selected';} ?>>Admin</option>
						<option value="<?=ROLE_USER?>" <?php if($admin['role']== ROLE_USER){ echo 'selected';} ?>>Customer</option>
					</select>
					<span class="text-danger"><?php echo form_error('role');?></span>
				</div>
			</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $admin['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
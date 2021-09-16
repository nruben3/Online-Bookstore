

<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Purchase Edit</h3>
			</div>
			<?php echo form_open('purchase/edit/'.$customers['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
					
					
						</div>
					</div>
					<div class="col-md-6">
						<label for="purchase_price" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="customer_name" id="qty" value="<?php echo ($this->input->post('customer_name') ? $this->input->post('customer_name') : $customers['customer_name']); ?>" class="form-control" id="customer_name" required />
							<span class="text-danger"><?php echo form_error('customer_name');?></span>
						</div>
					</div>
					<div class="col-md-3">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Contact</label>
						<div class="form-group">
							<input type="text" name="phone" id="phone" value="<?php echo ($this->input->post('phone') ? $this->input->post('phone') : $customers['phone']); ?>" class="form-control" id="phone" />
							<span class="text-danger"><?php echo form_error('phone');?></span>
						</div>
					</div>
						<div class="col-md-3">
						<label for="qty" class="control-label"><span class="text-danger">*</span>City</label>
						<div class="form-group">
							<input type="text" name="city" id="qty" value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $customers['city']); ?>" class="form-control" id="city" />
							<span class="text-danger"><?php echo form_error('city');?></span>
						</div>
					</div>

						<div class="col-md-3">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Address</label>
						<div class="form-group">
							<input type="text" name="address" id="address" value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $customers['address']); ?>" class="form-control" class="form-control" id="address" />
							<span class="text-danger"><?php echo form_error('address');?></span>
						</div>
					</div>
						<div class="col-md-3">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="delivery" id="delivery" value="<?php echo ($this->input->post('delivery') ? $this->input->post('delivery') : $customers['delivery']); ?>" class="form-control" id="delivery" />
							<span class="text-danger"><?php echo form_error('delivery');?></span>
						</div>
					</div>
						
					
					<div class="col-md-6">
                        <label for="date_created" class="control-label"><span class="text-danger"></span>Date(<?php echo ($this->input->post('date_created') ? $this->input->post('date_created') : $customers['date_created']); ?>)</label>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' name="date_created" class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
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
<script>
	$(function() {
		$('#datetimepicker1').datetimepicker({
			viewMode: 'years',
			format: 'YYYY/MM/DD'
		});
	});
</script>
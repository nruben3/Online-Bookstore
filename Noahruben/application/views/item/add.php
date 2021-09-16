<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Product Add</h3>
            </div>
            <?php echo form_open('item/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-4">
						<label for="cat_id" class="control-label"><span class="text-danger">*</span>Category</label>
						<div class="form-group">
							<select name="cat_id" class="form-control">
								<option value="" color="black">Select Category</option>
								<?php 
								foreach($all_itemcat as $itemcat)
								{
									$selected = ($itemcat['id'] == $this->input->post('cat_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$itemcat['id'].'" '.$selected.'>'.$itemcat['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('cat_id');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" placeholder="Enter Name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="saleprice" class="control-label"><span class="text-danger">*</span>Sale Price</label>
						<div class="form-group">
							<input type="text" name="saleprice" placeholder="Enter Price" value="<?php echo $this->input->post('saleprice'); ?>" class="form-control" id="saleprice" />
							<span class="text-danger"><?php echo form_error('saleprice');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="description" class="control-label"><span class="text-danger"></span>Description</label>
						<div class="form-group">
							<textarea name="description" rows="5" class="form-control" placeholder="Description here...." style="resize: none;"></textarea>
							<span class="text-danger"><?php echo form_error('description');?></span>
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
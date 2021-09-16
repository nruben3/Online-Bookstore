<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Books Add</h3>
            </div>
            <?php echo form_open('itemused/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
			
				
					<div id="price" style="display:none;">
						<input type="text" name="price" class="form-control">
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="name" placeholder="Enter Name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Price</label>
						<div class="form-group">
							<input type="text" name="price" placeholder="Enter Name" value="<?php echo $this->input->post('price'); ?>" class="form-control" id="price" />
							<span class="text-danger"><?php echo form_error('price');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Author</label>
						<div class="form-group">
							<input type="text" name="author" placeholder="Enter Author Name" value="<?php echo $this->input->post('author'); ?>" class="form-control" id="author" />
							<span class="text-danger"><?php echo form_error('author');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Average Rating
</label>
						<div class="form-group">
							<input type="text" name="avg_rat" placeholder="Average Rating" value="<?php echo $this->input->post('avg_rat'); ?>" class="form-control" id="avg_rat" />
							<span class="text-danger"><?php echo form_error('avg_rat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>ISBN
</label>
						<div class="form-group">
							<input type="text" name="isbn" placeholder="ISBN" value="<?php echo $this->input->post('isbn'); ?>" class="form-control" id="isbn" />
							<span class="text-danger"><?php echo form_error('isbn');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>ISBN13
</label>
						<div class="form-group">
							<input type="text" name="isbn13" placeholder="ISBN13" value="<?php echo $this->input->post('isbn13'); ?>" class="form-control" id="isbn13" />
							<span class="text-danger"><?php echo form_error('isbn13');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Language
</label>
						<div class="form-group">
							<input type="text" name="language" placeholder="ISBN13" value="<?php echo $this->input->post('language'); ?>" class="form-control" id="language" />
							<span class="text-danger"><?php echo form_error('language');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>No. of Pages
</label>
						<div class="form-group">
							<input type="text" name="num_pages"  value="<?php echo $this->input->post('num_pages'); ?>" class="form-control" id="num_pages" />
							<span class="text-danger"><?php echo form_error('num_pages');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Rating Count
</label>
						<div class="form-group">
							<input type="text" name="ratings_count"  value="<?php echo $this->input->post('ratings_count'); ?>" class="form-control" id="ratings_count" />
							<span class="text-danger"><?php echo form_error('ratings_count');?></span>
						</div>
					</div>
					

					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Reviews Count
</label>
						<div class="form-group">
							<input type="text" name="text_reviews_count"  value="<?php echo $this->input->post('text_reviews_count'); ?>" class="form-control" id="text_reviews_count" />
							<span class="text-danger"><?php echo form_error('text_reviews_count');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Publication Date
</label>
						<div class="form-group">
							<input type="date" name="publication_date"  value="<?php echo $this->input->post('publication_date'); ?>" class="form-control" id="publication_date" />
							<span class="text-danger"><?php echo form_error('publication_date');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Publisher
</label>
						<div class="form-group">
							<input type="text" name="publisher"  value="<?php echo $this->input->post('publisher'); ?>" class="form-control" id="publisher" />
							<span class="text-danger"><?php echo form_error('publisher');?></span>
						</div>
					</div>
				
				<!-- 


                 
					<div class="col-md-12">
						<label for="description" class="control-label"><span class="text-danger"></span>Description</label>
						<div class="form-group">
							<textarea name="description" rows="5" class="form-control" placeholder="Description here...." style="resize: none;"></textarea>
							<span class="text-danger"><?php echo form_error('description');?></span>
						</div>
					</div> -->
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
	//Datepicker
    $(function () {
        $('#datetimepicker10').datetimepicker({
            viewMode: 'years',
            format: 'DD/MM/YYYY'
        });
    });

	function get_regions(){
		$.ajax({
			url:"<?=base_url('itemused/get_regions_by_employee/')?>"+$('#emp').val(),
			success:function(data) {
				console.log(data);
				$('#streets').html("");
				$('#streets').html(data);
			}
		});
	}

	function get_product_price(){
		$.ajax({
			url:"<?=base_url('itemused/get_price_by_product/')?>"+$('#product').val(),
			success:function(data) {
				console.log(data);
				$('#price').html("");
				$('#price').html(data);
			}
		});
	}
</script>
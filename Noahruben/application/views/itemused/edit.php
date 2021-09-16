<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Product Add</h3>
            </div>
            <?php echo form_open('itemused/edit/'.$itemused['id']); ?>
          	<div class="box-body">
          		<div class="row clearfix">
			
				
					<div id="price" style="display:none;">
						<input type="text" name="price" class="form-control">
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="name" placeholder="Enter Name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $itemused['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Price</label>
						<div class="form-group">
							<input type="text" name="price" placeholder="Enter Name" value="<?php echo ($this->input->post('price') ? $this->input->post('price') : $itemused['price']); ?>" class="form-control" id="price" />
							<span class="text-danger"><?php echo form_error('price');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Author</label>
						<div class="form-group">
							<input type="text" name="author" placeholder="Enter Author Name" value="<?php echo ($this->input->post('author') ? $this->input->post('author') : $itemused['author']); ?>" class="form-control" id="author" />
							<span class="text-danger"><?php echo form_error('author');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Average Rating
</label>
						<div class="form-group">
							<input type="text" name="avg_rat" placeholder="Average Rating" value="<?php echo ($this->input->post('avg_rat') ? $this->input->post('avg_rat') : $itemused['avg_rat']); ?>" class="form-control" id="avg_rat" />
							<span class="text-danger"><?php echo form_error('avg_rat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>ISBN
</label>
						<div class="form-group">
							<input type="text" name="isbn" placeholder="ISBN" value="<?php echo ($this->input->post('isbn') ? $this->input->post('isbn') : $itemused['isbn']); ?>" class="form-control" id="isbn" />
							<span class="text-danger"><?php echo form_error('isbn');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>ISBN13
</label>
						<div class="form-group">
							<input type="text" name="isbn13" placeholder="ISBN13" value="<?php echo ($this->input->post('isbn13') ? $this->input->post('isbn13') : $itemused['isbn13']); ?>" class="form-control" id="isbn13" />
							<span class="text-danger"><?php echo form_error('isbn13');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Language
</label>
						<div class="form-group">
							<input type="text" name="language" placeholder="Language" value="<?php echo ($this->input->post('language') ? $this->input->post('language') : $itemused['language']); ?>" class="form-control" id="language" />
							<span class="text-danger"><?php echo form_error('language');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>No. of Pages
</label>
						<div class="form-group">
							<input type="text" name="num_pages"  value="<?php echo ($this->input->post('num_pages') ? $this->input->post('num_pages') : $itemused['num_pages']); ?>" class="form-control" id="num_pages" />
							<span class="text-danger"><?php echo form_error('num_pages');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Rating Count
</label>
						<div class="form-group">
							<input type="text" name="ratings_count"  value="<?php echo ($this->input->post('ratings_count') ? $this->input->post('ratings_count') : $itemused['ratings_count']); ?>" class="form-control" id="ratings_count" />
							<span class="text-danger"><?php echo form_error('ratings_count');?></span>
						</div>
					</div>
					

					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Reviews Count
</label>
						<div class="form-group">
							<input type="text" name="text_reviews_count"  value="<?php echo ($this->input->post('text_reviews_count') ? $this->input->post('text_reviews_count') : $itemused['text_reviews_count']); ?>" class="form-control" id="text_reviews_count" />
							<span class="text-danger"><?php echo form_error('text_reviews_count');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Publication Date
</label>
						<div class="form-group">
							<input type="date" name="publication_date"  value="<?php echo ($this->input->post('publication_date') ? $this->input->post('publication_date') : $itemused['publication_date']); ?>" class="form-control" id="publication_date" />
							<span class="text-danger"><?php echo form_error('publication_date');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Publisher
</label>
						<div class="form-group">
							<input type="text" name="publisher"  value="<?php echo ($this->input->post('publisher') ? $this->input->post('publisher') : $itemused['publisher']); ?>" class="form-control" id="publisher" />
							<span class="text-danger"><?php echo form_error('publisher');?></span>
						</div>
					</div>
					<div class="col-md-6">
					<label for="qty" class="control-label"><span class="text-danger">*</span>Stock
</label>
						<div class="form-group">
							<input type="text" name="stock"  value="<?php echo ($this->input->post('stock') ? $this->input->post('stock') : $itemused['stock']); ?>" class="form-control" id="stock" />
							<span class="text-danger"><?php echo form_error('stock');?></span>
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




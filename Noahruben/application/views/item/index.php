<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Product Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('item/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<!--th>Sr.NO</th-->
						<th>Category</th>
						<th>Name</th>
						<th>Price</th>
                        <th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php $cont=0; foreach($items as $i){ $cont++; ?>
                    <tr>
						<!--<td><?php echo $cont; ?></td>-->
						<td><?php echo $i['cat_name']; ?></td>
						<td><?php echo $i['name']; ?></td>
						<td><?php echo $i['saleprice']; ?></td>
                        <td><?php echo $i['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('item/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('item/remove/'.$i['id']); ?>" onclick="return confirm('Are you sure you want to Delete?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>

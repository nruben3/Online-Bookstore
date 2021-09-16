<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Product Used Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('itemused/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<!--th>Sr.NO</th-->
                        <th>ISBN</th>
                        <th>Book Title</th>
						<th>Price</th>
                        
						          <?php if($this->session->userdata('role') == ROLE_ADMIN)
                        {?>
						<th style="width: 12%">Actions</th>
                    <?php }?>
                    </tr>
                    <?php $cont=0; foreach($itemused as $i){ $cont++; ?>
                    <tr>
						<!--<td><?php echo $cont; ?></td>-->
                        <td><?php echo $i['isbn']; ?></td>
                        <td><?php echo $i['name']; ?></td>
						<td><?php echo $i['price']; ?></td>
						<?php if($this->session->userdata('role') == ROLE_ADMIN)
                        {?>
						<td>
                            <a href="<?php echo site_url('itemused/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('itemused/remove/'.$i['id']); ?>" onclick="return confirm('Are you sure you want to Delete?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    <?php }?>
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

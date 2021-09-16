<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Orders Products Listing</h3>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<!--th>Sr.NO</th-->
                        <th>Order ID</th>
						<th>Product Name</th>
                            <th>Quantity</th>
                                <th>Sub Total</th>
                        
						          <?php if($this->session->userdata('role') == ROLE_ADMIN)
                        {?>
						<th>Actions</th>
                    <?php }?>
                    </tr>
                    <?php $cont=0; foreach($orders_items as $i){ $cont++; ?>
                    <tr>
						<!--<td><?php echo $cont; ?></td>-->
                        <td><?php echo $i['order_id']; ?></td>
						<td><?php echo $i['name']; ?></td>
                        <td><?php echo $i['quantity']; ?></td>
                        <td><?php echo $i['sub_total']; ?></td>
						<?php if($this->session->userdata('role') == ROLE_ADMIN)
                        {?>
					<!-- 	<td>
                           
                            <a href="<?php echo site_url('order_items/remove/'.$i['id']); ?>" onclick="return confirm('Are you sure you want to Delete?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td> -->
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

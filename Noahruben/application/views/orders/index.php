<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Orders Listing</h3>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Customer Name</th>
                        <th>Order ID</th>
						<th>Total Price</th>
                        <th>Date</th>
						          <?php if($this->session->userdata('role') == ROLE_ADMIN)
                        {?>
						<th>Actions</th>
                    <?php }?>
                    </tr>
                    <?php $cont=0; foreach($orders as $i){ $cont++; ?>
                    <tr>
						<!--<td><?php echo $cont; ?></td>-->

                        <td><?php echo $i['customer_name']; ?></td>
                        <td><?php echo $i['id']; ?></td>

						<td><?php echo $i['grand_total']; ?></td>
                        <td><?php echo $i['created']; ?></td>
						<?php if($this->session->userdata('role') == ROLE_ADMIN)
                        {?>
						<td>
                          <!--   <a href="<?php echo site_url('orders/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>  -->
                            <a href="<?php echo site_url('orders/remove/'.$i['id']); ?>" onclick="return confirm('Are you sure you want to Delete?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

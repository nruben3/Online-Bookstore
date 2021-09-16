<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Stock Listing</h3>

            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <!--th>Sr.NO</th-->
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                    </tr>
                    <?php $count=0; foreach($stock as $p){ $count++;
                            foreach($usedproducts as $up){ 
                                if ($p['item_name']==$up['item_name']) {
                        ?>
                        <tr>
                            <td><?=$count; ?></td>
                            <td><?=$p['item_name']; ?></td>
                            <td><?=$p['quntity']-$up['rec_qty'];?></td>
                            <td><?=$p['total']-$up['rec_total']; ?></td>
                        </tr>
                    <?php }}}?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

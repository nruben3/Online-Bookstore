<h2>Order Preview</h2>
<div class="row checkout">
    <!-- Order items -->
    <table class="table">
    <thead>
        <tr>
            
            <th width="34%">Product</th>
            <th width="18%">Price</th>
            <th width="13%">Quantity</th>
            <th width="22%">Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
        <tr>
          
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr>
            <td colspan="5"><p>No items in your cart...</p></td>
        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4"></td>
            <?php if($this->cart->total_items() > 0){ ?>
            <td class="text-center">
                <strong>Total <?php echo '$'.$this->cart->total().' USD'; ?></strong>
            </td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    
    <!-- Shipping address -->
    <form class="form-horizontal" method="post">
    <div class="ship-info">
        <h4>Shipping Info</h4>
        <div class="form-group">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="customer_name" value="<?php echo !empty($custData['customer_name'])?$custData['customer_name']:''; ?>" placeholder="Enter name">
                <?php echo form_error('name','<p class="help-block error">','</p>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Contact:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" value="<?php echo !empty($custData['phone'])?$custData['phone']:''; ?>" placeholder="Enter Phone Number">
                <?php echo form_error('phone','<p class="help-block error">','</p>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Contact:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="delivery" value="<?php echo !empty($custData['delivery'])?$custData['delivery']:''; ?>" placeholder="Enter Email">
                <?php echo form_error('phone','<p class="help-block error">','</p>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">City:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="city" value="<?php echo !empty($custData['city'])?$custData['city']:''; ?>" placeholder="Enter City">
                <?php echo form_error('city','<p class="help-block error">','</p>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Address:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="address" value="<?php echo !empty($custData['address'])?$custData['address']:''; ?>" placeholder="Enter Address">
                <?php echo form_error('address','<p class="help-block error">','</p>'); ?>
            </div>
        </div>


          
    <div class="footBtn">
        <a href="<?php echo base_url('cart/'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Back to Cart</a>
        <button type="submit" name="placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></button>
    </div>
    </form>
</div>
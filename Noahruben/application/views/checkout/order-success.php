<h2>Order Status</h2>
<p class="ord-succ">Your order has been placed successfully.</p>

<!-- Order status & shipping info -->
<div class="row col-lg-12 ord-addr-info">
    <div class="col-sm-6 adr">
        <div class="hdr">Shipping Address</div>
        <p><?php echo $order['customer_name']; ?></p>
        <p><?php echo $order['phone']; ?></p>
        <p><?php echo $order['city']; ?></p>
        <p><?php echo $order['address']; ?></p>
        <p><?php echo $order['delivery']; ?></p>
        <p><?php echo $order['tracking_code']; ?></p>
    </div>
    <div class="col-sm-6 info">
        <div class="hdr">Order Info</div>
        <p><b>Reference ID</b> #<?php echo $order['id']; ?></p>
        <p><b>Total</b> <?php echo '$'.$order['grand_total'].' USD'; ?></p>
    </div>
</div>

<!-- Order items -->
<div class="row ord-items">
    <?php if(!empty($order['items'])){ foreach($order['items'] as $item){ ?>
    <div class="col-lg-12 item">
        <div class="col-sm-2">
          
        </div>
        <div class="col-sm-4">
            <p><b><?php echo $item["name"]; ?></b></p>
            <p><?php echo '$'.$item["price"].' USD'; ?></p>
            <p>QTY: <?php echo $item["quantity"]; ?></p>
        </div>
        <div class="col-sm-2">
            <p><b><?php echo '$'.$item["sub_total"].' USD'; ?></b></p>
        </div>
    </div>
    <?php } } ?>
</div>
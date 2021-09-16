<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
    /*Search box*/
    form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<h2>Products</h2>
	
<!-- Cart info -->
<a href="<?php echo base_url('cart'); ?>" class="cart-link" title="View Cart">
    <i class="glyphicon glyphicon-shopping-cart"></i>
    <span>(<?php echo $this->cart->total_items(); ?>)</span>
</a>
<div class="row">
 <form class="example" action="<?=base_url('')?>" style="margin:auto;max-width:500px">
                        <input type="text" placeholder="Search.." name="search2" id="myInput" >
                        <button type="submit"><i class="fa fa-search"></i></button>
                </form>
</div>
<br>
<!-- List all products -->
<div class="row">
    <div class="col-lg-12">
    <?php if(!empty($products)){ foreach($products as $row){ ?>
        <div class="col-sm-4 col-lg-4 col-md-4" id="myList" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 14;-webkit-box-orient:vertical;">
            <div class="thumbnail" style="height: 400px">
                
                <div class="caption">
                    <strong>Price: </strong><h4>$<?php echo $row['price'] ; ?> USD</h4><br>
                    <strong>Title: </strong><h4><?php echo $row['name']; ?></h4><br>
                    <strong>ISBN: </strong><p><?php echo $row['isbn']; ?></p>
                    <strong>Author: </strong><p style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;-webkit-box-orient:vertical;"><?php echo $row['author']; ?></p>

                    <a href="<?php echo site_url('products/products_single/'.$row['id']); ?>" class="btn-icon"><h3>Read More</h3></a>
                </div>
                <div class="atc" style="width: 100%">
                    <a href="<?php echo base_url('products/addToCart/'.$row['id']); ?>" class="btn btn-success" style="width: 100%; margin-top: auto;">
                        Add to Cart
                    </a>
                </div>
            </div>
        </div>
    <?php } }else{ ?>
        <p>Product(s) not found...</p>
    <?php } ?>
    </div>
</div>


 <script>


    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList ").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
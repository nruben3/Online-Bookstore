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
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Customers Listing</h3>
                <form class="example" action="<?=base_url('')?>" style="margin:auto;max-width:500px">
                        <input type="text" placeholder="Search.." name="search2" id="myInput" >
                        <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            	<div class="box-tools">
                    
                    <a href="<?php echo site_url('purchase/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>

                        <th>Name</th>
						<th>Phone Number</th>
						<th>City</th>
						<th>Address</th>
                        <th>Email</th>
                       
                    </tr>
                    <?php $count=0; foreach($cartItems as $q){ $count++; ?>
                    <?php $count=0; foreach($customers as $p){ $count++; ?>
                          
                    <tr id="myList">
                        <!--<td><?php echo $count; ?></td>-->
						
				
						<td><?php echo $p['customer_name'];?></td>
						<td><?php echo $p['phone']; ?></td>
						<td><?php echo $p['city']; ?></td>


                        <td><?php echo $p['address']; ?></td>
                        <td><?php echo $p['delivery']; ?></td>
                      
                        <?php if($this->session->userdata('role') == ROLE_ADMIN)
                        {?>
                            <td>

                <?php echo form_close(); ?>
                            <a href="<?php echo site_url('purchase/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('purchase/remove/'.$p['id']); ?>" onclick="return confirm('Are you sure you want to Delete?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    <?php }?>
                    </tr>
                    <?php } ?>
                       <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>


<script>
    function update_status(id){

        if($("#status"+id).prop("checked") == true){
            console.log('ON');
            var status = <?=ACTIVE?>;
            $.ajax({
                url: "<?=base_url('purchase/update_status/')?>"+id,
                type: "POST",
                data: {status: status},

            

                success: function (data) {
                    toastr.success("Update Status successfully");
                }
            });
        }else{
            console.log('OFF');
            var status = <?=INACTIVE?>
            $.ajax({
                url: "<?=base_url('purchase/update_status/')?>"+id,
                type: "POST",
                data: {status: status},
                success: function (data) {
                    toastr.success("Update Status successfully");
                }
            });
        }
    }
    </script>
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Noah's Books</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
      
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Animation -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/animate.css');?>">
        <!-- Theme style -->
        <link href="<?=base_url('resources/css/jquery.searchableSelect.css')?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">

        <!--Sweet JQuery Alerts        -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
        <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">Noah's Books</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Noah's Books</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?=$this->session->userdata("username")?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?=$this->session->userdata("username")?>
                                        <small><?=$this->session->userdata("email")?></small>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?=base_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?=$this->session->userdata("username")?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <?php if($this->session->userdata('role') == ROLE_ADMIN)
                        {?>
						<li class="<?php if($this->uri->segment(1) == 'admin') {echo 'active open'; } ?>">
                            <a href="">
                                <i class="fa fa-user-circle"></i> <span>Admin</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="<?php if($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'add') {echo 'active'; } ?>">
                                    <a href="<?php echo site_url('admin/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li class="<?php if($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'index') {echo 'active'; } ?>">
                                    <a href="<?php echo site_url('admin/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
                   
                    
				<!-- 		<li class="<?php if($this->uri->segment(1) == 'customer') {echo 'active open'; } ?>">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Customer</span>
                            </a>
                            <ul class="treeview-menu">
								<li  class="<?php if($this->uri->segment(1) == 'customer' && $this->uri->segment(2) == 'add') {echo 'active'; } ?>">
                                    <a href="<?php echo site_url('customer/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li class="<?php if($this->uri->segment(1) == 'customer' && $this->uri->segment(2) == 'index') {echo 'active'; } ?>">
                                    <a href="<?php echo site_url('customer/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                                <li class="<?php if($this->uri->segment(1) == 'feemanag') {echo 'active'; } ?>">
                                    <a href="<?php echo site_url('feemanag/index');?>"><i class="fa fa-shopping-cart"></i> Recovery</a>
                                </li>
							</ul>
                        </li> -->
				 <?php if($this->session->userdata('role') == ROLE_MANAGER)
                        {?>
				<li class="<?php if($this->uri->segment(1) == 'itemused') {echo 'active open'; } ?>">

                            <a href="<?php echo site_url('itemused/index');?>">
                                <i class="fa fa-pie-chart"></i> <span>Products</span>
                            </a>
                        </li>
                    <?php } ?>
						<li class="<?php if($this->uri->segment(1) == 'purchase') {echo 'active open'; } ?>">
                            <a href="<?php echo site_url('purchase/index');?>">
                                <i class="fa fa-pie-chart"></i> <span>Customers</span>
                            </a>
                        </li>
                         <?php } ?>
                        <?php if($this->session->userdata('role') == ROLE_USER OR $this->session->userdata('role') == ROLE_ADMIN OR $this->session->userdata('role') == ROLE_MANAGER)
                        {?>
                        <li class="<?php if($this->uri->segment(1) == 'purchase') {echo 'active open'; } ?>">
                            <a href="<?php echo site_url('Products/index');?>">
                                <i class="fa fa-cart-plus"></i> <span>Shop Now</span>
                            </a>
                        </li>
                    <?php }?>
  <?php if($this->session->userdata('role') == ROLE_ADMIN)
                        {?>
                          <li class="<?php if($this->uri->segment(1) == 'purchase') {echo 'active open'; } ?>">
                            <a href="<?php echo site_url('orders/index');?>">
                                <i class="fa fa-money"></i> <span>Orders</span>
                            </a>
                        </li>

                           <li class="<?php if($this->uri->segment(1) == 'Orders_items') {echo 'active open'; } ?>">
                            <a href="<?php echo site_url('order_items/index');?>">
                                <i class="fa fa-cart-plus"></i> <span>Products Ordered</span>
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Generated By <a href="http://www.crudigniter.com/">CRUDigniter</a> 3.2</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- <script src="<?php echo site_url('resources/js/demo.js');?>"></script> -->
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>


    </body>
</html>

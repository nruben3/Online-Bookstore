<style type="text/css">
	
/*****************globals*************/
body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Details</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  </head>

  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
				
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $products['name'] ; ?></h3>
						<div class="rating">
							<!-- <div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div> -->
							<!-- <span class="review-no">41 reviews</span> -->
						</div>
						
						<h4 class="price">Price: <span>$<?php echo $products['price'] ; ?> USD</span></h4>
						<h5 class="price">ISBN: <span><?php echo $products['isbn'] ; ?> </span></h5>
						<p>Author: <span><?php echo $products['author'] ; ?> </span></p>
						
					
						<div class="action">
							<a href="<?php echo base_url('products/addToCart/'.$products['id']); ?>" class="btn btn-success" style="width: 100%; margin-top: auto;">Add to cart</button></a>
							<!-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		  <div class="blog-item">
                                <div class="section-heading">
                                    <h4 class="head-after">Comments</h4>
                                </div>
                                <ul class="blog-comments-list">
                                    <li>
                                        <?php foreach ($comments as $row) {?>
                                       <div class="blog-comments-flex" style="min-height: 130px">
                                            <div class="blog-comments-content">
                                                <h5 class="blog-comments-head"><?php echo $row['name'];?> Commented On <span><?php echo $row['date_created'];?></span></h5>
                                                <?php if($this->session->userdata('role')==ROLE_ADMIN){?>
                                                  <a href="<?php echo site_url('Blogs/remove2/'.$row['id']); ?>" class="btn btn-danger btn-xs" style=" margin-left: 100%">Delete</a>
                                              <?php }?>
                                              <!--   <a href="#" class="blog-comments-reply badge theme-badge-default">Reply</a> -->
                                              <h4>Rating: <?php echo $row['rating'];?>/10</h4>
                                                <p><?php echo $row['comment_text'];?></p>
                                                <p>#Not Useful: <?php echo $row['num_not'];?> #Useful: <?php echo $row['num_useful'];?> #Very Useful: <?php echo $row['num_very'];?></p>
                                            </div>
                                            <?php $id= $products['id'];?>
                                            <form action="<?php echo base_url('products/declare_usefulness/'.$row['id'].'/'.$id)?>" method="post" id="useful_form">
                                              <SELECT id="usefulness" name="usefulness" value = "<?php $this->input->post('usefulness')?>">

                                              <OPTION Value='0'>Not Useful</OPTION>
                                              <OPTION Value='1'>Useful</OPTION>
                                              <OPTION Value='2'>Very Useful</OPTION>

                                            </SELECT>
                                            <button type="submit" class="btn theme-btn-default btn-icon">
                                                      <span>Submit Rating</span>
                                                  </button>
                                            </form>
                                        </div>

                                    <?php }?>
                                    </li>
                                
                                </ul>
                            </div>

                            <?php 
                            $id= $products['id'];?>
                            <div class="blog-item">
                                <div class="blog-comment-form">
                                    <div class="blog-comment-form-head">
                                        <div class="section-heading">
                                            <h4 class="head-after">Post Comment & Rating</h4>
                                        </div>
                                        <div class="section-heading">
                                            <h5 class="head-after">Rate 1-10:</h5>
                                        </div>
                                    </div>
                                    <form action="<?php echo base_url('products/products_single_comment_add/'.$id)?>" method="post" id="comment_form">
                                        <div class="row">
                                            <div class="col-lg-12">
                                              <SELECT id="rating" name="rating" value = "<?php $this->input->post('rating')?>">
                                                <OPTION Value="0" >0</OPTION>
                                                <OPTION Value="1" >1</OPTION>
                                                <OPTION Value="2" >2</OPTION>
                                                <OPTION Value="3" >3</OPTION>
                                                <OPTION Value="4" >4</OPTION>
                                                <OPTION Value="5" >5</OPTION>
                                                <OPTION Value="6" >6</OPTION>
                                                <OPTION Value="7" >7</OPTION>
                                                <OPTION Value="8" >8</OPTION>
                                                <OPTION Value="9" >9</OPTION>
                                                <OPTION Value="10" >10</OPTION>
                                              </SELECT>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea name="comment_text" value="<?php $this->input->post('comment_text')?>" class="form-control" rows="5" placeholder="Enter your comment..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" value="<?php $this->input->post('name')?>" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                    <?php if($this->session->flashdata('error') || form_error('password') || form_error('username') || $this->session->flashdata('flashError')) {?>
                            <div class="alert alert-danger alert-dismissible">
                                <?php echo form_error('password'); ?>
                                <?php echo form_error('email'); ?>
                                <?php echo $this->session->flashdata('error'); ?>
                                <?php echo $this->session->flashdata('flashError'); ?>
                            </div>
                        <?php } ?>
                                                <button type="submit" class="btn theme-btn-default btn-icon">
                                                    <span>Submit</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
	</div>
  </body>
</html>

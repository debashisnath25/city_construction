<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Ratings & Reviews | Wanted 7
    </title>
   <?php
		include("common/metalinks.php");
	?>
    <!-- PAGE LEVEL STYLES-->
    <style>
      .data-widget-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 40px;
        color: #6a89d7;
      }
     .btn-default {
	 	background-color: #edeef6;
		color:#000;
	 }
	.faq-tabs .nav-link {
      text-align: center;
      padding: 1.8rem 1rem;
      background-color: #fff;
      border: 1px solid #ccc;
      }
      .faq-tabs .nav-link:hover {
      }
      .faq-tabs .nav-link.active {
        color: #fe4d2e;
        border-color: #fe4d2e;
        background-color: #fff;
      }
      .faq-tabs .nav-link.active i {
        color: #fe4d2e !important;
      }
      .faq-list>li {
        padding: .75rem 0;
      }
      .faq-list>li>a {
        display: block;
        position: relative;
        color: inherit;
        font-weight: 500;
        font-size: 16px;
      }
      .faq-list>li>a:after {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        font-family: 'themify';
        content: "\e61a";
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
      }
      .faq-list>li>a[aria-expanded=true] {
        color: #2949ef;
      }
      .faq-list>li>a[aria-expanded=true]:after {
        content: "\e622";
      }
      .faq-answer {
        padding: 1rem 0;
        margin-top: 1rem;
        color: #6c757d;
      }
      .faq-tabs .nav-link.active {
        color:black;
        border-color: #7c1ab5;
        background-color: #fff;
      }
      .faq-tabs .nav-link.active i {
        color: #fff !important;
      }
	  .card-header {
		min-height: 5.2rem !important;
	  }
	  .demo-btn-list *:not(.btn-group):not(.btn-group-justified):not(.btn-group-vertical)>.btn, .demo-btn-list > .btn {
		margin-bottom: 15px;
		margin-right: 5px;
		}
		.dropdown-demo .dropdown {
		display: inline-block
		}
		.btn-fix {
		min-width: 120px;
		text-align: center;
		}
		.card-dark{
			border: 1px solid #7c1ab5;
		}
		
    </style>
  </head>
  <body>
    <div class="page-wrapper">
      <div class="content-wrapper">
        <!-- BEGIN: Sidebar-->
		<?php
			include("common/sidebar.php");
		?>
        <!-- END: Sidebar-->
        <!-- BEGIN: Content-->
        <div class="content-area">
          <!-- BEGIN: Header-->
		 <?php
			include("common/header.php");
		  ?>
          <!-- END: Header-->
          <div class="page-content fade-in-up">
            <!-- BEGIN: Page heading-->
            <div class="page-heading" style="padding-left:17px;">
              <div class="page-breadcrumb">
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> Review
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="col-lg-12 col-md-12 col-xs-12" >
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card" style="border:1px solid #7c1ab5">
					  <!-- card body -->
					  <div class="card-body">
						  <div class="row">
							<div class="col-md-6" style="height: 85px;">
							  <h5 class="font-20" style="font-weight:bold;">4.5</h5>
							  <div class="h3" style="border:1px rounded #fadf53;">
								<i class="fa fa-star" style="color:#fadf53;font-size:20px;"></i>
								<i class="fa fa-star" style="color:#fadf53;font-size:20px;"></i>
								<i class="fa fa-star" style="color:#fadf53;font-size:20px;"></i>
								<i class="fa fa-star" style="color:#fadf53;font-size:20px;"></i>
								<i class="fa fa-star-half" style="color:#fadf53;font-size:20px;"></i>
							  </div>
							  <p>
								 20,504 Ratings
							  </p>
							</div>
							<div class="col-md-6" style="text-align:right">
								<h5 class="font-20" style="font-weight:bold;">Total User</h5>
								<p class="font-18">
								 15,000
							    </p>
							</div>
						  </div>
                      </div>
					  <!-- card body ends-->
                    </div>
                  </div>
				  <div class="col-lg-6">
                    <div class="card" style="border:1px solid #7c1ab5">
					  <!-- card body -->
					  <div class="card-body">
						  <div class="row">
							<div class="col-md-6" style="height: 85px;">
							  <h5 class="font-20" style="font-weight:bold;">Total Reviews</h5>
							  <div class="h3">
								20,000
							  </div>
							  <p>
								 15,540 Products
							  </p>
							</div>
							<div class="col-md-6" style="text-align:right">
								<h5 class="font-20" style="font-weight:bold;">Total User</h5>
								<p class="font-18">
								 15,000
							    </p>
							</div>
						  </div>
                      </div>
					  <!-- card body ends-->
                    </div>
                  </div>
				  <div class="col-md-12">
				  		<div class="card"  style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Advanced Filter
								</h5>
								<div class="row pull-right">
									<div class="col-md-12">
										<button class="btn btn-default" style="" type="reset">Reset</button>
									</div>
								</div>
							</div>
								<div class="card-body">
										<div class="col-md-3 " style="padding:3px !important;float:left;margin-top:-20px;">
											<label for="validationCustom04">&nbsp;</label>
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Store Category</option>
												<option>Wanted7</option>
												<option>New Arrivals </option>
												<option>Sale Items</option>
												<option>Main/All </option>
											</select>
										</div>
										
										<div class="col-md-3 " style="padding:3px !important;float:left;margin-top:-20px;">
											<label for="validationCustom04">&nbsp;</label>
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Store Subcategory</option>
												<option>T-Shirts</option>
												<option>Laptop</option>
												<option>Jewellery</option>
												<option>Toys</option>
												
											</select>
										</div>
										<div class="col-md-3 " style="padding:3px !important;float:left;margin-top:-20px;">
											<label for="validationCustom04">&nbsp;</label>
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Stars</option>
												<option>1 Star and Above </option>
												<option>2 Star and Above</option>
												<option>3 Star and Above</option>
												<option>4 Star and Above </option>
												<option>5 Star Only </option>
												
											</select>
										</div>
										<div class="col-md-3 " style="padding:3px !important;float:left;margin-top:-20px;">
											<label for="validationCustom04">&nbsp;</label>
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Sort</option>
												<optgroup label="By Time">
													<option>Earliest First</option>
													<option>Latest First</option>
												</optgroup>
												<optgroup label="By Ratings/Reviews">
													<option>Highest First</option>
													<option>Lowest First</option>
												</optgroup>
											</select>
										</div>
										<div class="col-md-3" style="padding:3px !important;float:left;margin-top:-10px;">
											<div class=" check-list mt-2"><label class="checkbox checkbox-grey checkbox-primary"><input type="checkbox" ><span>Show Ratings Only</span></label></div>
										</div>

										<div class="col-md-3 oke_dekhao" style="padding:3px !important;float:left;margin-top:-10px;">
											<div class=" check-list mt-2"><label class="checkbox checkbox-grey checkbox-primary"><input type="checkbox" checked id="review_check"><span>Show Reviews Only</span></label></div>
										</div>
										
										<div class="col-md-3 amay_dekho" style="padding:3px !important;float:left;margin-top:-10px;">
											<select class="selectpicker form-control" data-style="btn-light btn-light-solid">
												<option selected disabled>Reviews Filter</option>
												<option>Reviews Replied by vendor</option>
												<option>Reviews Not replied by vendor</option>
											</select>
										</div>
										<div class="col-md-3 " style="padding:3px !important;float:left;margin-top:-10px;">
											<div class=" check-list mt-2"><label class="checkbox checkbox-grey checkbox-primary"><input type="checkbox" ><span>Show Both Ratings & Reviews</span></label></div>
										</div>
										
								</div>
							</div>
						</div>
						<?php
							for($i=0;$i<=8;$i++)
							{
						?>
					   <div class="col-lg-4">
						<div class="card card-fullheight">
						  <div class="card-header cardhdd">
							<h5 class="box-title" style="color:#fff;">Dheeraj Sood
							</h5>
							<div class="row pull-right">
								<div class="col-md-12">
									<a class="btn btn-default" href="order_details.php">#ORDER122</a>
								</div>
							</div>
						  </div>
						  <div class="card-body">
							<div class="row">
								<div class="media " style="padding:0px !important;float:left;">
									<span class="position-relative d-inline-block mr-4">
									  <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100" data-toggle="modal" data-target="#product_preview_modal">
									</span>
									<div class="media-body">
									  <div class="h4 font-14"><a href="javascript:void(0);" data-toggle="modal" data-target="#product_preview_modal">Nike Black Running Sports Shoe</a>
									  </div>
									  <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
										<span>dheerajxxx@xxxx.com
										</span>
									  </div>
									   <div class="flexbox">
										  <div class="text-success pull-left" >
												<i class="fa fa-star" style="color:#fadf53;font-size:15px;">
												</i>
												<i class="fa fa-star" style="color:#fadf53;font-size:15px;">
												</i>
												<i class="fa fa-star" style="color:#fadf53;font-size:15px;">
												</i>
												<i class="fa fa-star" style="color:#fadf53;font-size:15px;">
												</i>
												<i class="fa fa-star" style="color:#fadf53;font-size:15px;">
												</i>
											  </div>
											<div>
											<span class="text-muted mb-2" style="color: #878787;font-size: 12px;">
											  4 days ago
											</span>
										  </div>
										</div>
									</div>
								  </div>
								   <p class="mt-3" style="text-align:center;font-size:13px;">
										<q><i>Very comfortable shoe. colorful and stylish. great show off with a matching polo tees and your favorite denim. Thanks Wanted7 You guys are always rocks to fulfill my dreams.</i></q>
									</p>
								</div>
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-md-9" style="padding:3px !important;">
										<input type="text" class="form-control" name="feedback">
									</div>
									<div class="col-md-3" style="padding:3px !important;">
										<button class="btn btn-primary clr"  type="submit"><span class="btn-icon">Reply</span></button>
									</div>
								</div>
							</div>
						</div>
					  </div>
					  <?php
							}
						?>
                </div>
				<div class="mt-5 row">
					<div class="col-md-6 col-sm-12">
						<button class="btn btn-primary btn-fix clr" type="button">Download As Csv Data File</button>&nbsp;<button class="btn btn-primary active btn-fix" type="button">Download As Pdf File</button>
					</div>
					<div class="col-md-6 col-sm-12">
						<nav aria-label="..." class="col-sm-12">
							<ul class="pagination justify-content-end">
								<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item "><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
					</div>
				</div>
				 
              </div>
			
            </div>
			
            <!-- END: Page content-->
			 <?php
				include("product_preview_modal.php");
			?>
          </div>
          <!-- BEGIN: Footer-->
            <?php
			include("common/footer.php");
		  ?>
          <!-- END: Footer-->
        </div>
        <!-- END: Content-->
      </div>
    </div>
    <!-- BEGIN: Search form-->
    <?php
		include("common/footer.php");
	?>
    <!-- END: Page backdrops-->
    <!-- CORE PLUGINS-->
	<?php
		include("common/scripts.php");
	?>
    <script src="js/vendor-js/datatables.min.js"></script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/vendor-js/jquery.validate.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
	
	<script>
    $(function()
    {
      $('#review_check').change(function()
      {
        if ($(this).is(':checked')) {
		   /*$('#review_filter').show();
		   $('#right_part').addClass('wdth');*/
		   $('.amay_dekho').show();
        }else{
		   /*$('#review_filter').hide();
		   $('#right_part').removeClass('wdth');*/
		   $('.amay_dekho').hide();
        }
      });
    });
  </script>
  </body>
</html>

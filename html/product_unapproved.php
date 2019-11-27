<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Products Unapproved | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
    <style>
	  .dt-buttons {
	  	padding-bottom:15px;
		margin-bottom:-50px;
	  }
	  .faq-tabs .nav-link {
      min-width: 100px;
      padding: 1rem;
      border: 1px dashed;
      margin-bottom: 1rem;
      background-color: #fff;
      box-shadow: 0 1px 1px 1px rgba(62,57,107,.07);
      }
      .faq-tabs .nav-link.active {
        color: #fff;
        border-color: #7c1ab5;
        background-color: #7c1ab5;
      }
      .faq-tabs .nav-link.active .faq-item-text {
        color: rgba(255,255,255,.5)!important;
      }
      .faq-tabs .nav-link.active i {
        color: #fff !important;
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
	 .dt-buttons {
		padding-bottom: 15px;
		margin-bottom: -50px;
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
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> Products
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
			<div>
              <div class="col-lg-12">
			  	<!-- top section -->
				<div class="row">
					<div class="col-3">
						<div class="card">
							<div class="card-body text-white" style="background-image: linear-gradient(#f39c12,#e91e63);border-radius: .6rem !important;">
								<div class="d-flex justify-content-between mb-5">
									<div>
										<h5 class="box-title mb-2">New Orders</h5>
										<div class="text-light font-13">From 14.12 - 21.12</div>
									</div><i class="ti-shopping-cart text-white-50 font-40"></i>
								</div>
								<div class="flexbox mb-2">
									<div class="h4 mb-0">+620</div><span class="text-white font-18"><i class="ti-arrow-top-right mr-2"></i>24.05%</span>
								</div>
								<div class="text-light">AVG. order value - <span style="font-family:arial;">&#x20b9;</span> 54</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between mb-5">
									<div>
										<h5 class="box-title mb-2">Earnings</h5>
										<div class="text-muted font-13">From 14.12 - 21.12</div>
									</div><a class="text-muted" href="#">&nbsp;</a>
								</div>
								<div class="flexbox mb-4 pb-2">
									<div class="h4 mb-0"><span style="font-family:arial;">&#x20b9;</span> 7450.40</div><span class="text-success font-18"><i class="ti-arrow-top-right mr-2"></i>24.05%</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-3">
						<div class="card">
							<div class="card-body text-white bg-purple-300" style="border-radius: .6rem !important;">
								<div class="d-flex justify-content-between mb-5">
									<div>
										<h5 class="box-title mb-2">Orders Decline</h5>
										<div class="text-light font-13">From 14.12 - 21.12</div>
									</div><i class="ti-shopping-cart text-white-50 font-40"></i>
								</div>
								<div class="flexbox mb-2">
									<div class="h4 mb-0">+620</div><span class="text-white font-18"><i class="ti-arrow-top-right mr-2"></i>24.05%</span>
								</div>
								<div class="text-light">AVG. order value - <span style="font-family:arial;">&#x20b9;</span> 54</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<a href="product_add.php" class="btn btn-primary btn-block"><span class="btn-icon"><i class="ft-plus"></i>Add Product</span></a>
						<a href="add_category.php" class="btn btn-outline-primary border-2x btn-block" style="margin-top: 20px;"><span class="btn-icon"><i class="ft-search"></i>Manage Categories</span></a>
					</div>
				</div>
				<!-- top section ends -->

				 <div class="row">
					 <?php
						include("common/product_catelog_sidebar.php");
					?>
					<div class="col-lg-9">
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Unapproved/Rejected Products Lists</h5>
								<div class="card-actions"><a class="card-collapse"><i class="ti-angle-down"></i></a></div>
							</div>

                            <div class="card-body">
								<div class="col-md-12">
									<div class="row" style="border-bottom:1px solid #CCC;margin-bottom:30px;padding-bottom:15px;">
										<div class="col-md-3 " style="padding:3px !important;">
											<label for="validationCustom04" class="active">Product Name</label>
											<input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter product name" required="">
										</div>
								
										<div class="col-md-2 " style="padding:3px !important;">
											<label class="active">From</label>
											<input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Select Date">
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<label for="validationCustom04" class="active">To</label>
											<input class="form-control form-control-solid" id="datetimepicker_2" type="text" placeholder="Select Date">
										</div>
										<div class="col-md-3 " style="padding:3px !important;">
											<label for="validationCustom04"> &nbsp;</label>
											<div class="dropdown bootstrap-select form-control mb-3">
												<select class="selectpicker form-control mb-3" data-style="btn-light btn-light-solid" tabindex="-98">
													<option selected="" disabled="">Filters</option>
													<option>Any</option>
													<option>Out of Stock</option>
													<option>In Stock</option>
												</select>
											</div>
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<button class="btn btn-primary btn-block clr" style="margin-top: 27px;" type="submit"><span class="btn-icon"><i class="ft-search"></i>Search</span></button>
										</div>
									</div> <!-- row ends-->
								</div><!-- col-md-12 ends -->


                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped w-100" id="dt-buttons">
                                        <thead class="">
                                            <tr>
                                                <th>Item ID</th>
                                                <th>Product Details</th>
                                                <th>Price</th>
                                                <th>Stock&nbsp;Status</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
												for($i=1;$i<=12;$i++){
											?>
                                            <tr>
                                                <td><a class="btn btn-outline-primary" href="javascript:void(0);" data-toggle="modal" data-target="#product_preview_modal">Item ID<br/>108737NT</a></td>
                                                <td>
													<div class="media col-md-12 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
														<span class="position-relative d-inline-block mr-4">
														  <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
														</span>
														<div class="media-body mt-2">
														  <div class="h4 font-14">Nike Black Running Shoe..
														  </div>
														  <div class="text-muted mb-1 font-12" style="color: #878787;">
															<span>Coupon : BEAUTY10XX
															</span>
															<br />
															<span>Color : Black
															</span>
															<br />
															<span>Size : UK 8
															</span>
														  </div>
														</div>
													</div>
												</td>
                                                <td><div class="media-body mt-2">
													  <div class="h4 font-14">
														<span style="font-family:arial;">₹</span>&nbsp;599.00
													  </div>
													</div>
												</td>
                                                <td><b>20</b> in Stock</td>
												
												<td style="min-width:80px;">
													<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-pen" style="font-size:11px;"></i></button>
													<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-trash" style="font-size:11px;"></i></button>
													<button class="btn btn-primary btn-sm mt-2" type="button">Sent For Approval</button>
												</td>
                                            </tr>
											<?php
												}
											?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
					
				    </div>

			</div>
            </div>
            <!-- END: Page content-->
          </div>
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
    <?php
		include("common/extra.php");
    ?>
	<?php
		include("product_preview_modal.php");
	?>
    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <?php
		include("common/scripts.php");
	?>
    <script src="js/vendor-js/datatables.min.js"></script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
    <script>
      $(function() {
		$('#dt-buttons').DataTable({
		  "searching": true,
		  "pageLength":5,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'copy', 'excel', 'pdf', 'csv', 'print'
		  ]
		});

		$(".dt-buttons").removeClass("btn-group");


		$("#datetimepicker_1, #datetimepicker_2").datetimepicker({
			todayHighlight: !0,
			autoclose: !0,
			format: "yyyy.mm.dd hh:ii",
		});
	  });
    </script>
  </body>
</html>

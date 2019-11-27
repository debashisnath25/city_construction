<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Products Inventory | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<style>
	  .dt-buttons {
	  	padding-bottom:15px;
	  }
	 .dz-error-message {
	 	display:none !important;
	 }
	 .dz-image {
	 	margin-top: -31px;
		margin-left: -28px;
	 }
	 .dz-message {
	 	margin-top: -2px !important;
	 }
     .form-control-lg {
	     border-radius: 4px !important;
	 }
	 .input-group-text {
	 	font-size: 20px !important;
		color: #000000 !important;
	 }

	 .faq-tabs .nav-link {
      height: 70px;
	  width: 101px;
      border: 1px dashed;
      margin-bottom: 1rem;
      background-color: #fff;
      box-shadow: 0 1px 15px 1px rgba(62,57,107,.07);
	  margin-right:15px;
	  text-align: center;
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
	  .nav-pills {
	    padding-left: 16px;
		padding-top: 15px;
	  }
	  .child_div, .tbl {
	  	display:none;
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
		  <div class="page-heading" >
              <div class="page-breadcrumb">
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> <a href="products.php">Products </a>> Products Inventory
                </h1>
              </div>
            </div>
            <div>
				<?php
					include("common/product_header.php");
				?>
				<div class="row">
					<div class="col-lg-9">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-body">
								<div class="col-md-12" >
									<div class="row ">
										<h4>Inventory</h4>
									</div>
									<div class=" row col-md-12">
										<div class="col-md-1 mt-1" style="padding:2px !important;">
											<p style=""><label class="checkbox checkbox-primary checkbox-square mt-3"><input type="checkbox" id="inventory"><span></span></label></p>
										</div>
										<div class="col-md-11 mt-3" style="padding:2px !important;" >
											<div>
												<div class="h5 font-16 mt-2">I want to track inventory</div>
											</div>	
										</div>
									</div>
								</div>
								<hr class="my-4 child_div">
								<div class="col-md-12 child_div" >
									<div class="row pb-2 " >
										<h4>Stock Limit</h4>
									</div>
									<div class=" row col-md-12">
										<div class="col-md-1 mt-3" style="padding:2px !important;">
											<p style=""><label class="radio radio-purple" style="margin-top:10px;"><input type="radio" name="r2" value="type_1"><span>&nbsp;</span></label></p>
										</div>
										<div class="col-md-5 mt-3" style="padding:2px !important;" >
											<div>
												<input class="form-control form-control-solid items col-5" style="" id="validationCustom03" type="number" placeholder="Total Items" required="">
											</div>	
										</div>
										<div class="col-md-1 mt-3" style="padding:2px !important;">
											<p style=""><label class="radio radio-purple" style="margin-top:10px;"><input type="radio" value="type_2" name="r2"><span>&nbsp;</span></label></p>
										</div>
										<div class="col-md-5 mt-3" style="padding:2px !important;" >
											<div>
												<div class="h5 font-16" style="margin-top:10px;">Unlimited</div>
											</div>	
										</div>
									</div>
									<div class=" row col-md-12">
										<div class="col-md-1 mt-1" style="padding:2px !important;">
											<p style=""><label class="checkbox checkbox-primary checkbox-square mt-3"><input type="checkbox" ><span></span></label></p>
										</div>
										<div class="col-md-11 mt-3" style="padding:2px !important;" >
											<div>
												<div class="h5 font-16 mt-2">Inventory Allow Out of Stock</div>
											</div>	
										</div>
									</div>
									<div class=" row col-md-12">
										<div class="col-md-1 mt-1" style="padding:2px !important;">
											<p style=""><label class="checkbox checkbox-primary checkbox-square mt-3"><input type="checkbox" ><span></span></label></p>
										</div>
										<div class="col-md-4 mt-3" style="padding:2px !important;" >
											<div>
												<div class="h5 font-16 mt-2">Allow Out of Stock Notice</div>
											</div>	
										</div>
									</div>
									<div class=" row col-md-12">
										<div class="col-md-1 mt-1" style="padding:2px !important;">
											<p style=""><label class="checkbox checkbox-primary checkbox-square mt-3"><input type="checkbox" id="notice"><span></span></label></p>
										</div>
										<div class="col-md-5 mt-3" style="padding:2px !important;" >
											<div>
												<div class="h5 font-16 mt-2">Inventory Low Stock Quantity notice</div>
											</div>	
										</div>
										<div class="col-md-5 mt-3 notice_value" style="padding:2px !important;display:none;" >
											<div>
												<input class="form-control form-control-solid items col-5" style="" id="validationCustom03" type="number" placeholder="Total Items" required="">
											</div>	
										</div>
									</div>
								</div>
								<hr class="my-4 child_div">
								<div class="col-md-12 child_div" >
									<div class="row ">
										<h4>Variation based inventory</h4>
									</div>
									<div class=" row col-md-12">
										<div class="col-md-1 mt-1" style="padding:2px !important;">
											<p style=""><label class="checkbox checkbox-primary checkbox-square mt-3"><input type="checkbox" id="variation"><span></span></label></p>
										</div>
										<div class="col-md-6 mt-3" style="padding:2px !important;" >
											<div>
												<div class="h5 font-16 mt-2">Track variation based inventory</div>
											</div>	
										</div>
										<div class="col-md-5 mt-3" style="padding:2px !important;" >
											<div>
												<a href="product_options.php" class="btn btn-primary clr">Add new variation</a>
											</div>	
										</div>
										<div class="col-md-1 mt-1 tbl" style="padding:2px !important;">
											&nbsp;
										</div>
										<div class="col-md-11 mt-4 tbl" style="padding:2px !important;" >
											<div class="table-responsive">
												<table class="table table-bordered table-striped w-100" id="dt-base2">
													<thead class="">
														<tr>
															<th>Image</th>
															<th>Variation</th>
															<th>SKU</th>
															<th>UPC</th>
															<th>Price</th>
															<th>Items</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100"></td>
															<td>
																<p>Size : UK 8<p>
																<p>Color : White<p>
															</td>
															<td>
																 0001.456778
															</td>
															<td>
																 CD7287-001
															</td>
															<td>
																 <span style="font-family:arial;">₹</span>&nbsp;3500
															</td>
															<td>
																<input class="form-control form-control-solid " id="validationCustom03" type="number" placeholder="Total Items" required="">
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

			  <?php
				include("common/product_sidebar.php");
			  ?>
				</div>	  
			  
            </div>
            <!-- END: Page content-->
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
	<script>
	 $(document).ready(function() {
		$('#dt-base2').DataTable();

		$('#inventory').change(function(){
			if ($(this).is(':checked')) {
				$(".child_div").show();
			}
			else{
				$(".child_div").hide();
			}
		});
		$('#variation').change(function(){
			if ($(this).is(':checked')) {
				$(".tbl").show();
			}
			else{
				$(".tbl").hide();
			}
		});
		$('#notice').change(function(){
			if ($(this).is(':checked')) {
				$(".notice_value").show();
			}
			else{
				$(".notice_value").hide();
			}
		});

		
	 });
    </script>
  </body>
</html>
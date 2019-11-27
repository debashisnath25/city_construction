<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Products Shipping | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/dropzone.min.css" rel="stylesheet" />
	<link href="css/vendor-css/summernote-bs4.css" rel="stylesheet" />
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
      padding: 10px;
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
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> <a href="products.php">Products </a>> Tax & Shipping
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
						<div class="card delivery_elements" style="border:1px solid #7c1ab5">
							<form>
								<div class="card-body">
									<div class="row pb-2">
								<!-- original form -->
										<div class="row col-md-12 ">
											<div class="col-md-8" >
											<div class="row pb-2">
												<h4>Tax Rate</h4>
											</div>
											<div class="pb-2">
												<div class="form-group mb-4 row">
													<dt class="col-sm-4" style="padding-top:10px;">Choose tax</dt>
													<div class="col-sm-8">
														<select class="selectpicker form-control  " data-style="btn-light btn-light-solid">
															<option selected disabled>Tax Variations
															</option>
															<option>5%
															</option>
															<option>12%
															</option>
															<option>18%
															</option>
															<option>28%
															</option>
														 </select>
													</div>
												</div>
												<div class="form-group mb-4 row">
													<dt class="col-sm-4" style="padding-top:10px;">Packaging Cost</dt>
													<div class="col-sm-8">
														<input class="form-control form-control-solid" id="validationCustom03" type="number" placeholder="Enter Packaging Cost" required="">
													</div>
												</div>
												<div class="form-group mb-4 row">
													<dt class="col-sm-4" style="padding-top:10px;">Packaging Tax</dt>
													<div class="col-sm-8">
														<select class="selectpicker form-control  " data-style="btn-light btn-light-solid">
															<option selected disabled>Tax Variations
															</option>
															<option>5%
															</option>
															<option>12%
															</option>
															<option>18%
															</option>
															<option>28%
															</option>
														 </select>
													</div>
												</div>
												</div>
												<hr>
												<div style="margin-top:30px !important;">
													<div class="row pb-2 " >
														<h4>Shipping Rates</h4>
													</div>
													<div class=" row col-md-12">
														<div class="col-md-1 mt-3" style="padding:2px !important;">
																<p style=""><label class="radio radio-purple"><input type="radio" name="r2"><span>&nbsp;</span></label></p>
															</div>
														<div class="col-md-11 mt-3" style="padding:2px !important;" >
															<div>
																<div class="h5 font-16">Free Shipping For Customer</div>
																<span class="font-12">You Will Be Charged The Shipping Cost Of Your Items As Per Actual Weight And Dimentions Of Your Product And Charges Of Delivery To Your Coustomer Location On Actual Basics By Our Shipping Depertment.</span>
															</div>	
														</div>
														
													</div>
													<div class="col-md-12 mt-2 pb-2 mb-2" id="free_shipping" style="border:1px solid #cccccc;padding-top:20px;padding-bottom:20px;border-radius: .25rem;">
														<div class="form-group mb-4 row">
															<dt class="col-sm-4" style="padding-top:10px;">Shipping Api</dt>
															<div class="col-sm-8">
																<div class="mt-2">
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>Option 1</span></label>
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>Option 2</span></label>
																</div>
															</div>
														</div>
														<div class="form-group mb-4 row">
															<dt class="col-sm-4" style="padding-top:10px;">Cash On Delivery</dt>
															<div class="col-sm-8">
																<div class="mt-2">
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>Yes</span></label>
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>No</span></label>
																</div>
															</div>
														</div>
													</div>
													<div class=" row col-md-12">
														<div class="col-md-1 mt-3" style="padding:2px !important;">
																<p style=""><label class="radio radio-purple"><input type="radio" name="r2"><span>&nbsp;</span></label></p>
															</div>
														<div class="col-md-11 mt-3" style="padding:2px !important;" >
															<div>
																<div class="h5 font-16">Flat Rate Shipping</div>
																<span class="font-12">You Will Choose A Fixed Shipping Cost Of The Item Which Your Coustomer Will Pay. However The Actual Shipping Cost Of The Item is > Than The Fixed Shipping Charged By You. You Will Have To Pay The Difference.</span>
															</div>	
														</div>
													</div>
														<div class="col-md-12 mt-2 pb-2 mb-2" id="flat_shipping" style="border:1px solid #cccccc;padding-top:20px;padding-bottom:20px;border-radius: .25rem;">
														<div class="form-group mb-4 row">
															<dt class="col-sm-4" style="padding-top:10px;">Shipping Cost</dt>
															<div class="col-sm-8">
																<input class="form-control form-control-solid" id="validationCustom03" type="number" placeholder="Enter Flat Shipping Cost" required="">
															</div>
														</div>

														<div class="form-group mb-4 row">
															<dt class="col-sm-4" style="padding-top:10px;">Shipping Api</dt>
															<div class="col-sm-8">
																<div class="mt-2">
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>Option 1</span></label>
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>Option 2</span></label>
																</div>
															</div>
														</div>
														<div class="form-group mb-4 row">
															<dt class="col-sm-4" style="padding-top:10px;">Cash On Delivery</dt>
															<div class="col-sm-8">
																<div class="mt-2">
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>Yes</span></label>
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>No</span></label>
																</div>
															</div>
														</div>
													</div>
													<div class=" row col-md-12">
														<div class="col-md-1 mt-3" style="padding:2px !important;">
																<p style=""><label class="radio radio-purple"><input type="radio" name="r2"><span>&nbsp;</span></label></p>
															</div>
														<div class="col-md-11 mt-3" style="padding:2px !important;" >
															<div>
																<div class="h5 font-16">Vendor Will Not Bear Any Shipping Charge</div>
																<span class="font-12">You Customer Will Shown The Price Of Shipping The Product From Your Store To The Customers Address Depending Upon The Shipment Weight And Dimentions Input by You.</span>
															</div>	
														</div>
													</div>
														<div class="col-md-12 mt-2 pb-2 mb-2" id="bear_shipping" style="border:1px solid #cccccc;padding-top:20px;padding-bottom:20px;border-radius: .25rem;">
														<div class="form-group mb-4 row">
															<dt class="col-sm-4" style="padding-top:10px;">Shipping Api</dt>
															<div class="col-sm-8">
																<div class="mt-2">
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>Shipping Api 1</span></label>
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>Shipping Api 2</span></label>
																</div>
															</div>
														</div>
														<div class="form-group mb-4 row">
															<dt class="col-sm-4" style="padding-top:10px;">Cash On Delivery</dt>
															<div class="col-sm-8">
																<div class="mt-2">
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>Yes</span></label>
																	<label class="checkbox checkbox-inline checkbox-primary mb-1"><input type="checkbox"><span>No</span></label>
																</div>
															</div>
														</div>
													</div>

												
												</div>
											</div>
											
											<div class="col-md-4 " style="" >
												<div class="card " style="border:1px solid #6C757D;">
												  <div class="card-body ">
													<div class="h5 mb-3" style="color:#2949ef !important;"><b>Mens Tshirt Casual</b></div>
													<div class="row mb-2">
														<div class="col-8" style="">Product Price :</div>
														<div class="col-4" style="text-align:left;"><b><span style="font-family:arial;">&#8377;</span>840</b></div>
													</div>
													<div class="row mb-2">
														<div class="col-8">Tax (18%) :</div>
														<div class="col-4" style="text-align:left;"><b><span style="font-family:arial;">&#8377;</span>152</b></div>
													</div>
													<div class="row mb-2">
														<div class="col-8">Packaging Cost:</div>
														<div class="col-4" style="text-align:left;"><b><span style="font-family:arial;">&#8377;</span>100</b></div>
													</div>
													<div class="row mb-2">
														<div class="col-8">Tax (18%):</div>
														<div class="col-4" style="text-align:left;"><b><span style="font-family:arial;">&#8377;</span>18</b></div>
													</div>
													 <div class="row font-weight-strong font-16 align-items-center text-primary ">
														<div class="col-8">Sub Total:</div>
														<div class="col-4">
															<div class="h3 mt-2 font-16"><span style="font-family:arial;">&#8377;</span>1,110</div>
														</div>
													</div>
													<div class="row font-weight-strong font-16 align-items-center text-primary ">
														<div class="col-8">Shipping:</div>
														<div class="col-4">
															<div class="h3 mt-2 font-16"><span style="font-family:arial;">&#8377;</span>100‬</div>
														</div>
													</div>
													<div class="row font-weight-strong font-16 align-items-center text-primary ">
														<div class="col-8">Total:</div>
														<div class="col-4">
															<div class="h3 mt-2 font-16"><span style="font-family:arial;">&#8377;</span>1,210</div>
														</div>
													</div>
												  </div>
												</div>

											</div>
										</div>
										<!-- original form ends -->
								</div>
							</div>
						</form>
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
    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <?php
		include("common/scripts.php");
	?>
	<script src="js/vendor-js/summernote-bs4.min.js"></script>
	<script>
	 $(document).ready(function() {
	  var t = $('#summernote').summernote({
		  height: 150,
		  focus: true
	  });
	  $("#btn").click(function(){
		  $('div.note-editable').height(150);
	  });

	  function hide_details(){
		alert('asdasd');
		$('.delivery_elements').toggle();
	  }
	});

	function stock_levelz(){
		$('#stockzz').hide();
		$('#stockzz_qty').show();
	}
    </script>
  </body>
</html>

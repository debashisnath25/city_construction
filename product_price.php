<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Products Price | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
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
	  .bulk{
	  	display: none;;
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
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group mb-4 row">
											<dt class="col-sm-4" style="padding-top:10px;">Enter Product Price</dt>
											<div class="col-sm-4">
												<input class="form-control form-control-solid" id="p_price" type="number" onkeyup="get_price(this.value);" placeholder="Enter Product Price" required="">
											</div>
										</div>
										<div class="form-group mb-4 row table_div" style="display:none;">
											<div class="col-sm-8">
												<table class="table table-bordered table-striped">
													<thead>
														<tr>
															<th scope="col">Attributes</th>
															<th scope="col">Rate</th>
															<th scope="col">GST Rate</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">Product Price</th>
															<td><span style="font-family:arial;display:none;" id="product_p">&#8377;</span>&nbsp;<span id="main_product"></span></td>
															<td><span style="font-family:arial;display:none;" id="gst_price">&#8377;</span>&nbsp;<span id="gst"></span></td>
														</tr>
														<tr>
															<th scope="row" >Package Charge</th>
															<td><span style="font-family:arial;">&#8377;</span>&nbsp;10<input type="hidden" id="pkg" value="10"</td>
															<td><span style="font-family:arial;">&#8377;</span>&nbsp;1.80<input type="hidden" id="pkg_gst" value="1.80"></td>
														</tr>
														<tr>
															<th scope="row" >Shipping Charges</th>
															<td><span style="font-family:arial;">&#8377;</span>&nbsp;50<input type="hidden" id="shipping" value="50"></td>
															<td><span style="font-family:arial;">&#8377;</span>&nbsp;9<input type="hidden" id="shipping_gst" value="9"></td>
														</tr>
														<tr>
															<th scope="row" >Wanted7 Charges</th>
															<td><span style="font-family:arial;display:none;" id="w7_price">&#8377;</span>&nbsp;<span id="w7"></span></td>
															<td><span style="font-family:arial;display:none;" id="w7_gst_symbol">&#8377;</span>&nbsp;<span style="font-family:arial;" id="w7_gst">&#8377;</span>&nbsp;</td>
														</tr>
														<tr>
															<th scope="row" >Sub Total</th>
															<td><span style="font-family:arial;display:none;" id="ttl_price">&#8377;</span>&nbsp;<span id="charge"></span></td>
															<td><span style="font-family:arial;display:none;" id="ttl_charge">&#8377;</span>&nbsp;<span id="charge_gst"></span></td>
														</tr>
													</tbody>
												</table>
												<table class="table table-bordered table-striped">
													<tbody>
														<tr>
															<th scope="row" style="font-size:18px;">Total Amount</th>
															<td style="font-size:18px;font-weight:bold;color: #37ba32;"><span style="font-family:arial;display:none;" id="ttl_amt">&#8377;</span>&nbsp;<span id="amount"></span></td>
														</tr>
													</tbody>
												</table>
											</div>
											
											
											
										</div>
										
										<div class="form-group mb-4 check-list row">
											<div class="col-sm-12" style="padding-top:10px;">
												<label class="checkbox checkbox-primary"><input type="checkbox" id="bulk"><span style="font-weight:600;">I want to give discount on Bulk Purchase</span></label>
											</div>
											<div class="col-sm-12 bulk" style="padding-top:10px;">
												<button class="btn btn-primary btn-sm clr mt-2 mb-2" style="color: #fff;" onclick="add_new_value();">
													<span class="btn-icon">
														<i class="fas fa-plus"></i>Add New Value
													</span>
												</button>
												<table class="table table-bordered mb-3">
													<thead class="thead-light">
														<tr>
															<th scope="col">Quantity</th>
															<th scope="col">Price</th>
															<th scope="col">Action</th>
														</tr>
													</thead>
													<tbody id="tbody_value">
														<tr>
															<td>
																<div class="row">
																	<div class="col-md-6">
																		<input class="form-control form-control-solid " id="validationCustom03" type="number" placeholder="Min Qty" required="">
																	</div>
																	<div class="col-md-6">
																		<input class="form-control form-control-solid " id="validationCustom03" type="number" placeholder="Max Qty" required="">
																	</div>
																</div>
															</td>
															<td>
																<input class="form-control form-control-solid" id="validationCustom03" type="number" placeholder="Price" required="">
															</td>
															<td>
																<span style="margin-left: 14px;"><i class="ft-trash-2 remove" style="font-size:20px;"></i></span>
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
	<script>
	function add_new_value()
	{
		
		var htmlz = '<tr><td><div class="row"><div class="col-md-6"><input class="form-control form-control-solid " id="validationCustom03" type="number" placeholder="Min Qty" required=""></div><div class="col-md-6"><input class="form-control form-control-solid " id="validationCustom03" type="number" placeholder="Max Qty" required=""></div></div></td><td><input class="form-control form-control-solid" id="validationCustom03" type="number" placeholder="Price" required=""></td><td><span style="margin-left: 14px;"><i class="ft-trash-2 remove" style="font-size:20px;"></i></span></td></tr>';

		$("#tbody_value").append(htmlz);
		$('.selectpicker').selectpicker('refresh');

		$("body").on("click",".remove",function(){ 
			  $(this).parents("tr").remove();
		});
	}
	$(function()
    {
      $('#bulk').change(function()
      {
        if ($(this).is(':checked')) {
           $(".bulk").show();
        }else{
		   $(".bulk").hide();
        }
      });
    });
	
	function get_price(p_price){
		$('.table_div').show();
		$("#product_p").show();
		$("#main_product").html(p_price);

		var tax_cost = ( p_price * 18 / 100 ).toFixed(2); 
		$("#gst_price").show();
		$("#gst").html(tax_cost);

		var w7_tax = ( p_price * 10 / 100 ).toFixed(2); 
		$("#w7_price").show();
		$("#w7").html(w7_tax);
		var w7_gst = ( w7_tax * 18 / 100 ).toFixed(2); 
		$("#w7_gst_symbol").show();
		$("#w7_gst").html(w7_gst);

		var pkg_cost = $("#pkg").val();
		var pkg_gst = $("#pkg_gst").val();

		var ship_cost = $("#shipping").val();
		var shipping_gst = $("#shipping_gst").val();
		
		var total_price = parseFloat(p_price) + parseFloat(pkg_cost) + parseFloat(ship_cost) + parseFloat(w7_tax);
		$("#ttl_price").show();
		$("#charge").html(total_price.toFixed(2));

		var total_charge = parseFloat(tax_cost) + parseFloat(pkg_gst) + parseFloat(shipping_gst) + parseFloat(w7_gst);
		$("#ttl_charge").show();
		$("#charge_gst").html(total_charge.toFixed(2));

		var total_cost = parseFloat(total_price) + parseFloat(total_charge);
		$("#ttl_amt").show();
		$("#amount").html(total_cost.toFixed(2));
	}
    </script>
  </body>
</html>

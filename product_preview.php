<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Product Preview | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<style>
	.mt-10{
		margin-top:20px;
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
            <div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Product Preview</h5>
							</div>
							<form>
								<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
							  <div class="card card-default">
								<div class="card-body text-center">
									<img src="images/vendor-images/nike.png" class="img-responsive" style="max-height:200px;">
								  </div>
								  <div class="card-footer text-center">
									<h5>Nike Black Running Shoe</h5>
									<div class="form-group">
										<h6 class="pull-left">Size</h6>
										<div class="input-group">
											<div class="input-group-prepend" style="height:38px;"><span class="input-group-text" id="inputGroupPrepend" style="font-size:16px !important">Rs.</span></div>
											<select class="selectpicker form-control mb-3" aria-describedby="inputGroupPrepend" id="size_changezzz" onChange="change_sizezz('size',this.value);">
												<option value="" selected disabled>Choose Size</option>
												<option value="-10.00">Small (-10.00)</option>
												<option value="+75.00">Medium (+75.00)</option>
												<option value="+100.00">Large (+100.00)</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<h6 class="pull-left">Color</h6>
										<div class="input-group">
											<div class="input-group-prepend" style="height:38px;"><span class="input-group-text" id="inputGroupPrepend_color" style="font-size:16px !important">Rs.</span></div>
											<select class="selectpicker form-control mb-3" aria-describedby="inputGroupPrepend_color" id="color_changezzz" onChange="change_sizezz('color',this.value);">
												<option value="" selected disabled>Choose Color</option>
												<option value="+50.00">Black (+50.00)</option>
												<option value="-40.00">Red (-40.00)</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-primary">Rs. 500 | Buy Now</button>
									</div>
								  </div>
							  </div>
							</div>
							<div class="col-lg-6">
								<h3><span class="semi-bold">"BUY NOW"</span> button</h3>

								<div class="d-flex justify-content-end mt-6">
                                    <div class="mr-3" style="width:400px;">
										<div class="row mb-3">
                                            <div class="col-9">Product Price :</div>
                                            <div class="col-3" style="font-family:arial;color:green;font-size:16px;"><b><span>&#8377;</span><span id="prod_pricezz">500</span></b></div>
                                        </div>

										<div class="row mb-3 size_divzz" style="display:none;">
                                            <div class="col-9">Size Price :</div>
                                            <div class="col-3" style="font-family:arial;color:green;font-size:16px;"><b><span>&#8377;</span><span id="size_price">0</span></b></div>
                                        </div>
										<div class="row mb-3 color_divzz" style="display:none;">
                                            <div class="col-9">Color Price :</div>
                                            <div class="col-3" style="font-family:arial;color:green;font-size:16px;"><b><span>&#8377;</span><span id="color_price">0</span></b></div>
                                        </div>
										
										<div class="row mb-3 total_pricezz" style="display:none;">
                                            <div class="col-9">Total Price :</div>
                                            <div class="col-3" style="font-family:arial;color:green;font-size:16px;"><b><span>&#8377;</span><span id="total_prod_price">500</span></b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">GST (%):</div>
                                            <div class="col-3" style="font-family:arial;color:red;font-size:16px;"><b><span>&#8377;</span><span id="gst_price">18</span></b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">Total Amount with Taxes:</div>
                                            <div class="col-3" style="font-family:arial;color:green;font-size:16px;"><b><span>&#8377;</span><span id="tax_amount_price">547</span></b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">Wanted7 Fee:</div>
                                            <div class="col-3" style="font-family:arial;color:red;font-size:16px;"><b><span>&#8377;</span><span id="wanted_fee_price">50</span></b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">Packing Charges :</div>
                                            <div class="col-3" style="font-family:arial;color:green;font-size:16px;"><b><span>&#8377;</span><span id="packing_charge_price">100</span></b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">GST on Packing Charges (%):</div>
                                            <div class="col-3" style="font-family:arial;color:red;font-size:16px;"><b><span>&#8377;</span><span id="gst_packing_price">18</span></b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">Shipping Charges :</div>
                                            <div class="col-3" style="font-family:arial;color:green;font-size:16px;"><b><span>&#8377;</span><span id="shipping_charge_price">100</span></b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">GST on Shipping Charges (%):</div>
                                            <div class="col-3" style="font-family:arial;color:red;font-size:16px;"><b><span>&#8377;</span><span id="gst_shipping_price">18</span></b></div>
                                        </div>
                                        
                                        <div class="row font-weight-strong font-20 align-items-center text-primary mb-4">
                                            <div class="col-9">Total Price:</div>
                                            <div class="col-3" style="font-family:arial;"><div class="h3 "><span>&#8377;</span><span id="total_price">833‬</span></div></div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
							</form>
						</div>
					  </div>
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
	<script>
		function change_sizezz(size_color,e){
			var size_price = $( "#size_changezzz option:selected" ).val();
			var color_price = $( "#color_changezzz option:selected" ).val();
			var prod_price = document.getElementById("prod_pricezz");
			var gst_price = document.getElementById("gst_price");
			var wanted_fee_price = document.getElementById("wanted_fee_price");
			var gst_packing_price = document.getElementById("gst_packing_price");
			var gst_shipping_price = document.getElementById("gst_shipping_price");

			/* FOR SIZE STARTS */
			if(size_color == 'size'){
				var size_pricezz = e;
				$('.size_divzz').show();
				$('#size_price').text(size_pricezz);

				if (color_price == '') {
					var color_pricezz = 0;
					$('.color_divzz').hide();
				}else{
					var color_pricezz = parseInt(color_price);
					$('.color_divzz').show();
				}
			}
			/* FOR SIZE ENDS */
			/* FOR COLOR STARTS */
			if(size_color == 'color'){				
				var color_pricezz = e;
				$('.color_divzz').show();
				$('#color_price').text(color_pricezz);

				if(size_price == '') {
					var size_pricezz = 0;
					$('.size_divzz').hide();
				}else{
					var size_pricezz = parseInt(size_price);
					$('.size_divzz').show();
				}
			}
			/* FOR COLOR ENDS */
			var total_price = parseInt(prod_price.innerHTML) + parseInt(size_pricezz) + parseInt(color_pricezz);
			
			$('.total_pricezz').show();
			$('#total_prod_price').text(total_price);
		}
	</script>
  </body>
</html>

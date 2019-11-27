<style>
	#myCarousel .list-inline {
		white-space:nowrap;
	}

	#myCarousel .carousel-indicators {
		position: static;
		left: initial;
		width: initial;
		margin-left: initial;
	}
	#myCarousel .carousel-indicators > li {
		width: initial;
		height: initial;
		text-indent: initial;
	}
	#myCarousel .carousel-indicators > li.active img {
		opacity: 0.7;
	}
	.img-fluid-slide{
		height:300px;
	}
	.img-fluid{
		height:75px;
	}
</style>
	<!-- Product Preview Starts -->
    <div class="modal fade" id="product_preview_modal" tabindex="-1" role="dialog" aria-labelledby="product_preview_modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header cardhdd" >
					<h5 style="color:#fff;">Product Preview</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color:#fff;"><i class="ft-x"></i></button>
				</div>
				<div class="modal-body">
					<form>
					<div class="card-body">

						<div class="row">
							<div class="col-md-6">

								<div id="myCarousel" class="carousel slide">
									<!-- main slider carousel items -->
									<div class="carousel-inner" style="border:1px solid #dee2e6!important">
										<div class="active carousel-item" data-slide-number="0">
											<img src="images/vendor-images/0NBID7_769_Z4P9LP.jpg" class="img-fluid-slide">
										</div>
										<div class="carousel-item" data-slide-number="1">
											<img src="images/vendor-images/nike.png" class="img-fluid-slide">
										</div>
										<div class="carousel-item" data-slide-number="2">
											<img src="images/vendor-images/61vRHRTxepL._UY500_.jpg" class="img-fluid-slide">
										</div>
										<div class="carousel-item" data-slide-number="3">
											<img src="images/vendor-images/3612357_03c59218-0ad1-4afa-b8f3-49dc04b996d0_1000_1000.png" class="img-fluid-slide">
										</div>
										<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
									<!-- main slider carousel nav controls -->

									<ul class="carousel-indicators list-inline mx-auto border px-2">
										<li class="list-inline-item active">
											<a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
												<img src="images/vendor-images/0NBID7_769_Z4P9LP.jpg" class="img-fluid">
											</a>
										</li>
										<li class="list-inline-item">
											<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
												<img src="images/vendor-images/nike.png" class="img-fluid">
											</a>
										</li>
										<li class="list-inline-item">
											<a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
												<img src="images/vendor-images/61vRHRTxepL._UY500_.jpg" class="img-fluid">
											</a>
										</li>
										<li class="list-inline-item">
											<a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
												<img src="images/vendor-images/3612357_03c59218-0ad1-4afa-b8f3-49dc04b996d0_1000_1000.png" class="img-fluid">
											</a>
										</li>
									</ul>
								</div>
								
							</div>
							<div class="col-md-6">
								<h4>Nike Black Running Shoe</h4>
								<!-- BEGIN: Page heading-->
								  <div class="page-breadcrumb">
									<span class="page-title">Product / portme</span>
								  </div>
								<!-- BEGIN: Page content-->
								<div class="mt-4">
									<h4 style="font-family:arial;"><b>₹ <span id="prod_pricezz">524.50</span></b></h4> 
									<span id="fix_prod_price" style="display:none;">524.50</span>
									<span class="text-muted" style="font-family:arial;">Price Incl. GST (₹ 144.00)</span>
									<h6 class=" mt-2" style="font-size:12px;">Bulk pricing available for quantities of 5 units or more.</h6>
									<div class="form-group mt-4">
										<h6 style="border-bottom:1px solid #ccc;">Size (UK/India)</h6>
										<div class="row" style="padding:0px;margin:0px;">
											<label class="col-md-6 radio radio-primary mt-3">
												<input type="radio" checked name="size" onclick="sizezz_colorzz('size',this.value);" value="-20.00">
												<span style="font-family:arial;">6 (- ₹ 20.00)</span>
											</label>
											<label class="col-md-6 radio radio-primary mt-3">
												<input type="radio" name="size" onclick="sizezz_colorzz('size',this.value);" value="+40.00">
												<span style="font-family:arial;">7 (+ ₹ 40.00)
												</span>
											</label>
											<label class="col-md-6 radio radio-primary mt-3">
												<input type="radio" name="size" onclick="sizezz_colorzz('size',this.value);" value="+60.00">
												<span style="font-family:arial;">9 (+ ₹ 60.00)</span>
											</label>
											<label class="col-md-6 radio radio-primary mt-3">
												<input type="radio" name="size" onclick="sizezz_colorzz('size',this.value);" value="+30.00">
												<span style="font-family:arial;">10 (+ ₹ 30.00)</span>
											</label>
											<label class="col-md-6 radio radio-primary mt-3">
												<input type="radio" name="size" onclick="sizezz_colorzz('size',this.value);" value="+80.00">
												<span style="font-family:arial;">11 (+ ₹ 80.00)</span>
											</label>
										</div>
									</div>
									<div class="form-group mt-4">
										<h6 style="border-bottom:1px solid #ccc;">Color</h6>
										<label class="radio radio-primary mt-3">
											<input type="radio" checked name="color" onclick="sizezz_colorzz('color',this.value);" value="+40.00">
											<span style="font-family:arial;">Red (+ ₹ 40.00)</span>
										</label>
										<label class="radio radio-primary mt-3">
											<input type="radio" name="color" onclick="sizezz_colorzz('color',this.value);" value="-10.00">
											<span style="font-family:arial;">Black (- ₹ 10.00)</span>
										</label>
									</div>
									<div class="form-group mt-4">
										<h6>In Stock: <b>15 available</b></h6>
									</div>
									<div class="form-group mt-4">
										<button class="btn btn-primary btn-block clr"><i class="fas fa-shopping-bag"></i> Add to Bag</button>
									</div>
									 <div class="page-breadcrumb mb-2">
										<span class="page-title" style="font-size:18px;">Buy More,Save More</span>
									 </div>
									 <div class="table-responsive">
                                        <table class="table invoice-table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Quantity</th>
													<th>Price Per Item</th>
													<th>Discount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-none d-sm-block">5 Items</div>
                                                    </td>
													<td>
                                                        <div class="d-none d-sm-block"><span style="font-family:arial;">&#8377;</span>826</div>
                                                    </td>
                                                    <td>13% Off</td>
                                                   
                                                </tr>
											
												
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="3"></th>
                                                </tr>
                                            </tfoot>
                                        </table>
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
    <!-- Product Preview Ends -->

<script>
	function sizezz_colorzz(size_color,e){
		var prod_price = document.getElementById("fix_prod_price").innerHTML;
		var size_val = $("input[name='size']:checked").val();
		var color_val = $("input[name='color']:checked").val();
		/* FOR SIZE STARTS */
			if(size_color == 'size'){
				var size_price = e;

				if (color_val == '') {
					var color_price = 0;
				}else{
					var color_price = parseFloat(color_val);
				}
			}
		/* FOR SIZE ENDS */
		/* FOR COLOR STARTS */
			if(size_color == 'color'){				
				var color_price = e;

				if(size_val == '') {
					var size_price = 0;
				}else{
					var size_price = parseFloat(size_val);
				}
			}
		/* FOR COLOR ENDS */
		
		var total_price = parseFloat(prod_price) + parseFloat(size_price) + parseFloat(color_price);
		$('#prod_pricezz').text(total_price);
	}
</script>
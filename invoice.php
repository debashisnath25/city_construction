<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Settings | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<style>
	#dt-buttons_filter {
		display:none;
	  }
	  .dt-buttons {
	  	padding-bottom:15px;
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
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a> &gt; Invoice
				</h1>
			  </div>
			</div>
			<!-- BEGIN: Page content-->
            <div>
				<div class="card">
                            <div class="card-body invoice px-sm-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- <h1 class="text-muted font-40 mb-5">INVOICE</h1> -->
										<img src="images/rec_logo.png" style="width:250px;">
                                    </div>
                                    <div class="col-md-8 text-left text-sm-right mt-2">
                                        <h5 class=" mb-3">Tax Invoice / Bill Of Supply / Cash Memo</h5>
                                        <div class="font-15 ">
                                           <div>Original For Recipient</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-5">
                                <div class="row mb-2">
                                    <div class="col-md-6 mb-4">
                                        <h5 class=" mb-3">Sold By :</h5>
                                        <div class="font-15 ">
                                            <div>Color Papers</div>
                                            <div>SS 11/620, Sector D-1, Kanpur Road L D A</div>
                                            <div>Lucknow, Uttar Pradesh, 226012</div>
                                            <div>IN</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 text-left text-sm-right">
                                        <h5 class="mb-3">Billing Address:</h5>
										  <div class="font-15 ">
												<div>Customer Name</div>
												<div>Customer Address Line1</div>
												<div>NEW DELHI, DELHI, 110007</div>
												<div>IN</div>
											</div>
											<div class="font-15 ">
												<div><span class="font-weight-strong">State/Ut Code&nbsp;:</span> &nbsp;<span class="text-muted">07</span></div>
											</div>
                                    </div>
                                </div>
								 <div class="row mb-2">
                                    <div class="col-md-6 mb-4">
                                        <div class="font-15 ">
                                           <div class="mb-2"><span class="font-weight-strong">PAN No&nbsp;:</span> &nbsp;<span class="text-muted">BWWPS3198E</span></div>
										   <div class="mb-2"><span class="font-weight-strong">GST Registration No&nbsp;:</span> &nbsp;<span class="text-muted">09BWWPS3198E1ZM</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 text-left text-sm-right">
                                        <h5 class="mb-3">Shipping Address:</h5>
										  <div class="font-15 ">
												<div>Customer Name</div>
												<div>SA Associates LLP</div>
												<div>Customer Gst No. If Updated,Customer Address Line</div>
												<div>NEW DELHI, DELHI, 110007</div>
												<div>IN</div>
											</div>
											<div class="font-15 ">
												<div><span class="font-weight-strong">State/Ut Code&nbsp;:</span> &nbsp;<span class="text-muted">07</span></div>
											</div>
                                    </div>
                                </div>
								 <div class="row mb-2">
                                    <div class="col-md-6 mb-4">
                                        <div class="font-15 ">
                                           <div class="mb-2"><span class="font-weight-strong">ORDER NUMBER&nbsp;:</span> &nbsp;<span class="text-muted">171-2633161-8282731</span></div>
										   <div class="mb-2"><span class="font-weight-strong">ORDER DATE&nbsp;:</span> &nbsp;<span class="text-muted">13.10.2019</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 text-left text-sm-right">
										<div class="font-15 ">
											<div class="mb-2"><span class="font-weight-strong">Place Of Supply&nbsp;:</span> &nbsp;<span class="text-muted">DELHI</span></div>
											<div class="mb-2"><span class="font-weight-strong">Place Of Delivery&nbsp;:</span> &nbsp;<span class="text-muted">DELHI</span></div>
											<div class="mb-2"><span class="font-weight-strong">Invoice Number&nbsp;:</span> &nbsp;<span class="text-muted">ZNJM-3591</span></div>
											<div class="mb-2"><span class="font-weight-strong">Invoice Details&nbsp;:</span> &nbsp;<span class="text-muted">UP-ZNJM-153413631-1920</span></div>
											<div class="mb-2"><span class="font-weight-strong">Invoice Date&nbsp;:</span> &nbsp;<span class="text-muted">14.10.2019</span></div>
										</div>
                                    </div>
                                </div>
                                <div class="card-fullwidth-block mx-sm-0">
                                    <div class="table-responsive">
                                        <table class="table invoice-table">
                                            <thead class="thead-light">
                                                <tr>
													<th>Sl no</th>
                                                    <th>Product Details</th>
													<th>Unit Price</th>
                                                    <th>QTY</th>
													 <th>Net Amount</th>
													 <th>Tax Rate</th>
													 <th>Tax Type</th>
													 <th>Tax Amount</th>
													 <th>Shipping Amt</th>
													 <th>Shipping Tax</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
													<td>1</td>
                                                    <td>
                                                        <div class="row">
														  <div class="col-3">
															<span class="position-relative d-inline-block mr-4" style="width:100%;">
															  <a href="#"><img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" ></a>
															</span>
														  </div>
														  <div class="col-9">
															  <div class="h4 font-14"><a href="#">Nike Black Running Shoe..</a></div>
															  <div class="text-muted mb-1 font-12" style="color: #878787;">
																<span>Color : Black
																</span>
																<br>
																<span>Size : UK 8
																</span>
																
															  </div>
														  </div>
													  </div>
                                                    </td>
													<td><span style="font-family:arial;">&#8377;</span>187</td>
                                                    <td>1</td>
                                                    <td><span style="font-family:arial;">&#8377;</span>187</td>
													<td>18%</td>
													<td>IGST</td>
													<td><span style="font-family:arial;">&#8377;</span>33.66</td>
													<td><span style="font-family:arial;">&#8377;</span>50</td>
													<td><span style="font-family:arial;">&#8377;</span>9</td>
                                                    <td class="text-right"><span style="font-family:arial;">&#8377;</span>221</td>
                                                </tr>
												<tr>
													<td>2</td>
                                                    <td>
                                                        <div class="row">
														  <div class="col-3">
															<span class="position-relative d-inline-block mr-4" style="width:100%;">
															  <a href="#"><img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" ></a>
															</span>
														  </div>
														  <div class="col-9">
															  <div class="h4 font-14"><a href="#">Nike Black Running Shoe..</a></div>
															  <div class="text-muted mb-1 font-12" style="color: #878787;">
																<span>Color : Black
																</span>
																<br>
																<span>Size : UK 8
																</span>
																
															  </div>
														  </div>
													  </div>
                                                    </td>
													<td><span style="font-family:arial;">&#8377;</span>187</td>
                                                    <td>1</td>
                                                    <td><span style="font-family:arial;">&#8377;</span>187</td>
													<td>18%</td>
													<td>IGST</td>
													<td><span style="font-family:arial;">&#8377;</span>33.66</td>
													<td><span style="font-family:arial;">&#8377;</span>50</td>
													<td><span style="font-family:arial;">&#8377;</span>9</td>
                                                    <td class="text-right"><span style="font-family:arial;">&#8377;</span>221</td>
                                                </tr>
												<tr>
													<td>3</td>
                                                    <td>
                                                       <div class="row">
														  <div class="col-3">
															<span class="position-relative d-inline-block mr-4" style="width:100%;">
															  <a href="#"><img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" ></a>
															</span>
														  </div>
														  <div class="col-9">
															  <div class="h4 font-14"><a href="#">Nike Black Running Shoe..</a></div>
															  <div class="text-muted mb-1 font-12" style="color: #878787;">
																<span>Color : Black
																</span>
																<br>
																<span>Size : UK 8
																</span>
																
															  </div>
														  </div>
													  </div>
                                                    </td>
													<td><span style="font-family:arial;">&#8377;</span>187</td>
                                                    <td>1</td>
                                                    <td><span style="font-family:arial;">&#8377;</span>187</td>
													<td>18%</td>
													<td>IGST</td>
													<td><span style="font-family:arial;">&#8377;</span>33.66</td>
													<td><span style="font-family:arial;">&#8377;</span>50</td>
													<td><span style="font-family:arial;">&#8377;</span>9</td>
                                                    <td class="text-right"><span style="font-family:arial;">&#8377;</span>221</td>
                                                </tr>
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="11"></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="text-right mr-3" style="width:400px;">
										<div class="row mb-3">
                                            <div class="col-9">Taxes (GST):</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>101</b></div>
                                        </div>
										
										<div class="row mb-3">
                                            <div class="col-9">Packing Charges :</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>100</b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">GST on Packing Charges:</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>18</b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">Shipping Charges :</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>150</b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">GST on Shipping Charges:</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>27</b></div>
                                        </div>
										 <div class="row font-weight-strong font-20 align-items-center text-primary mb-2">
                                            <div class="col-9" style="color:#211f20;">Total Charges & Tax:</div>
                                            <div class="col-3">
                                                <div class="h3 " style="color: #37ba32;"><span style="font-family:arial;">&#8377;</span>396</div>
                                            </div>
                                        </div>
										 <div class="row font-weight-strong font-20 align-items-center text-primary mb-2">
                                            <div class="col-9" style="color:#211f20;">Sub Total:</div>
                                            <div class="col-3">
                                                <div class="h3 " style="color: #37ba32;"><span style="font-family:arial;">&#8377;</span>561</div>
                                            </div>
                                        </div>
                                        
                                        <div class="row font-weight-strong font-20 align-items-center text-primary mb-4">
                                            <div class="col-9" style="color:#211f20;">Total Price:</div>
                                            <div class="col-3">
                                                <div class="h3 " style="color: #37ba32;"><span style="font-family:arial;">&#8377;</span>957</div>
                                            </div>
                                        </div>
                                    </div>
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
  </body>
</html>

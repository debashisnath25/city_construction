<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Payments | Wanted 7
    </title>
    <?php
		include("common/metalinks.php");
	?>
    <!-- PAGE LEVEL VENDORS-->
  
    <link href="css/datatables.min.css" rel="stylesheet" />
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->


    <!-- PAGE LEVEL STYLES-->
    <style>.faq-tabs .nav-link {
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
	   .cardhdd{
		background: rgb(2,0,36);
		background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(34,1,50,1) 35%, rgba(124,26,181,1) 100%);
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
            <div class="page-heading">
              <div class="page-breadcrumb">
                <h1 class="page-title"><a href="dashboard.php">Dashboard</a> &gt; <a href="order_details.php">Order #order123</a> &gt; Transaction
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="row">
				<div class="col-lg-12">
					<div class="tab-content">
						<div class="tab-pane fade active show" id="faq-group-1">
							<div class="card" style="border:1px solid #7c1ab5">
								<div class="card-header cardhdd">
									<h5 class="box-title" style="color:#fff;">Transaction History Of Order No #order123</h5>
									<div class="card-actions"><a class="card-collapse"><i class="ti-angle-down"></i></a></div>
								</div>
								<div class="card-body">
									<!-- adv filters -->
									<!--<div class="row">
										<div class="col-md-2 col-lg-2">
											<label for="validationCustom04">Receipt Id</label>
											<input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter Receipt Id" required="">
										</div>
										<div class="col-md-2 col-lg-2">
											<label for="validationCustom04">Ledger Type</label>
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Any</option>
												<option selected disabled>Credit</option>
												<option selected disabled>Debit</option>
											</select>
										</div>
										<div class="col-md-2 col-lg-2">
											<label >From</label>
											<input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Select Date">
										</div>
										<div class="col-md-2 col-lg-2">
											<label for="validationCustom04">To</label>
											<input class="form-control form-control-solid"  id="datetimepicker_2" type="text" placeholder="Select Date">
										</div>
										<div class="col-md-2 col-lg-2">
											<label for="validationCustom04">Sort</label>
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Filters</option>
												<option>Highest First</option>
												<option>Lowest First</option>
												<option>Latest First</option>
												<option>Earliest First</option>
											</select>
										</div>
										<div class="col-md-2 col-lg-2">
											<button class="btn btn-primary btn-block clr" style="margin-top: 27px;" type="submit"><span class="btn-icon"><i class="ft-search"></i>Search</span></button>
										</div>
									</div>-->
									<!-- adv filters -->

									<div class="table-responsive">
										<table class="table table-bordered table-striped w-100" id="dt-buttons">
											<thead class="">
												<tr>
													<th>Receipt Id</th>
													<th style="max-width:80px;">Date</th>
													<th style="max-width:400px;">Transaction</th>
													
													<th>Credit</th>
													<th>Debit</th>
													<th>Balance</th>
												</tr>
											</thead>
											<tbody>
												
												<tr>
													<td>#108737NT00</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>Received Payment For Order No. <b style="font-family:Arial;color:#7c1ab5;">#Order123</b> from Customer #customer123</td>
													
													<td><span style="color:#0f881f;"><span style="font-family:arial;">+ &#8377;</span>4,000</span></td>
													<td>&nbsp;</td>
													<td></td>
												</tr>
												
												<?php
													for($i=0; $i<=2; $i++)
													{
												?>
												<tr>
													<td>#108737NT00</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>Price For Product no. <b style="font-family:Arial;color:#7c1ab5;">#product123</b> </td>
													<td><span style="color:#0f881f;"><span style="font-family:arial;">+ &#8377;</span> 700</span></td>
													<td>&nbsp;</td>
													<td></td>
												</tr>
												<tr>
													<td>#108737NT00</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>GST 18% Tax Added for Product no. <b style="font-family:Arial;color:#7c1ab5;">#product123</b> </td>
													
													
													<td><span style="color:#0f881f;"><span style="font-family:arial;">+ &#8377;</span> 120</span></td>
													<td>&nbsp;</td>
													<td></td>
												</tr>
												<tr>
													<td>#108737NT00</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>Packaging Charges Product no. <b style="font-family:Arial;color:#7c1ab5;">#product123</b> </td>
													
													
													<td><span style="color:#0f881f;"><span style="font-family:arial;">+ &#8377;</span> 12</span></td>
													<td>&nbsp;</td>
													<td></td>
												</tr>
												<tr>
													<td>#108737NT00</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>GST 18% Tax For Packaging in Product no. <b style="font-family:Arial;color:#7c1ab5;">#product123</b> </td>
													
													
													<td><span style="color:#0f881f;"><span style="font-family:arial;">+ &#8377;</span> 2.60</span></td>
													<td>&nbsp;</td>
													<td></td>
												</tr>
												<tr>
													<td>#108737NT00</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>Shipping charges from SHIPPING API01 Product no. <b style="font-family:Arial;color:#7c1ab5;">#product123</b></td>
													
													<td>&nbsp;</td>
													<td><span style="color:#d05329;"><span style="font-family:arial;"> - &#8377;</span> 135</span></td>
													<td></td>
												</tr>
												<tr>
													<td>#108737NT00</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>Shipping charges GST 18% Tax from SHIPPING API01 deducted for Product no. <b style="font-family:Arial;color:#7c1ab5;">#product123</b></td>
													
													<td>&nbsp;</td>
													<td><span style="color:#d05329;"><span style="font-family:arial;"> - &#8377;</span> 37</span></td>
													<td></td>
												</tr>
												<tr>
													<td>#108737NT00</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>Wanted7 fees + Tax for Product no. <b style="font-family:Arial;color:#7c1ab5;">#product123</b></td>
													
													<td>&nbsp;</td>
													<td><span style="color:#d05329;"><span style="font-family:arial;"> - &#8377;</span> 343</span></td>
													<td></td>
												</tr>
												<tr>
													<td>#108737NT00</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>Amount <b style="font-family:Arial;color:#7c1ab5;">&#8377; 1,333</b> transferred to bank account  For Order Id #order123</td>
													
													<td>&nbsp;</td>
													<td><span style="color:#d05329;">&nbsp;</span></td>
													<td><span style="color:#0f881f;"><span style="font-family:arial;"> &#8377;</span>1,333</span></td>
												</tr>
												<tr >
													<td colspan="6" style="min-height:50px; !important"></td>
													
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
    <!-- BEGIN: Search form-->
	 <?php
		include("common/extra.php");
    ?>
    
	 <?php
		include("common/scripts.php");
	?>
	<script src="js/datatables.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
	<script>
      $(function() {
		$('#dt-buttons').DataTable({
		  "searching": true,
		  "pageLength":10,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'excel', 'pdf', 'csv'
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

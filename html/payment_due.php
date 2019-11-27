<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Payments Due To Vendor | Wanted 7
    </title>
    <?php
		include("common/metalinks.php");
	?>
    <!-- PAGE LEVEL VENDORS-->
  
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
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
                <h1 class="page-title"><a href="dashboard.php">Dashboard</a> &gt; Payments
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="row">
			  	<div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                          <div class="d-flex col-md-12 col-xs-12 col-lg-12" style="padding:0 !important; margin:0 !important;">
                            <div style="width:100%;">
							  <div class="row">
								<div class="col-md-6 col-lg-6 col-xs-6">
								  <h5 class="font-18 mb-3 font-weight-normal" style="font-size:15px !important;text-transform:uppercase;">
									<b>Last Payment Settled</b>
								  </h5>
								 </div>
								 <div class="col-md-6 col-lg-6 col-xs-6 " >
									<div class="h6 mb-2 pull-right" style="color:#00bcd4;"><?php echo date('D, M j, Y');?></div>
								</div>
							  </div>

                              <div class="col-md-4 col-xs-6 col-lg-4" style="float:left;padding:0 !important; margin:0 !important;">
                                <div class="h3 mb-2" style="border:1px rounded #fadf53;"><i class="fas fa-rupee-sign"></i> 35,000.61
                                </div>
                                <div class="text-muted pb-1">
                                  <i class="">
                                  </i>Product Sales
                                </div>
                              </div>
                              <div class="col-md-4 col-xs-6 col-lg-4" style="float:left;padding:0 !important; margin:0 !important;">
                                <div class="h3 mb-2" style="border:1px rounded #fadf53;"><i class="fas fa-rupee-sign"></i> 7,052.00
                                </div>
                                <div class="text-muted pb-1">
                                  <i class="">
                                  </i>Shipping Covered
                                </div>
                              </div>
							  <div class="col-md-4 col-xs-6 col-lg-4" style="float:left;padding:0 !important; margin:0 !important;">
                                <div class="h3 mb-2" style="border:1px rounded #fadf53;"><i class="fas fa-rupee-sign"></i> 42,052.61
                                </div>
                                <div class="text-muted pb-1">
                                  <i class="">
                                  </i>Total Amount Paid
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-fullwidth-block" style="margin-bottom: -1.8rem">
                        </div>
                      </div>
                    </div>
                  </div>
				  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                          <div class="d-flex col-md-12 col-xs-12 col-lg-12" style="padding:0 !important; margin:0 !important;">
                            <div style="width:100%;">
							  <div class="row">
								<div class="col-md-6 col-lg-6 col-xs-12">
								  <h5 class="font-18 mb-3 font-weight-normal" style="font-size:15px !important;text-transform:uppercase;">
									<b>Next Payment Due</b>
								  </h5>
								 </div>
								 <div class="col-md-6 col-lg-6 col-xs-12">
									<div class="h6 mb-2 pull-right" style="color:#00bcd4;"><?php echo date('D, M j, Y');?></div>
								</div>
							  </div>

                              <div class="col-md-4 col-xs-6 col-lg-4" style="float:left;padding:0 !important; margin:0 !important;">
                                <div class="h3 mb-2" style="border:1px rounded #fadf53;"><i class="fas fa-rupee-sign"></i> 47,000.23
                                </div>
                                <div class="text-muted pb-1">
                                  <i class="">
                                  </i>Product Sales
                                </div>
                              </div>
                              <div class="col-md-4 col-xs-6 col-lg-4" style="float:left;padding:0 !important; margin:0 !important;">
                                <div class="h3 mb-2" style="border:1px rounded #fadf53;"><i class="fas fa-rupee-sign"></i> 9,031.00
                                </div>
                                <div class="text-muted pb-1">
                                  <i class="">
                                  </i>Shipping Covered
                                </div>
                              </div>
							  <div class="col-md-4 col-xs-6 col-lg-4" style="float:left;padding:0 !important; margin:0 !important;">
                                <div class="h3 mb-2" style="border:1px rounded #fadf53;"><i class="fas fa-rupee-sign"></i> 58,032.21
                                </div>
                                <div class="text-muted pb-1">
                                  <i class="">
                                  </i>Total Amount to be Paid
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-fullwidth-block" style="margin-bottom: -1.8rem">
                        </div>
                      </div>
                    </div>
                </div>
				<?php include ('common/payment_sidebar.php');?>
				<div class="col-lg-9">
					<div class="tab-content">
						<div class="tab-pane fade active show" id="faq-group-1">
							<div class="card" style="border:1px solid #7c1ab5">
								<div class="card-header cardhdd">
									<h5 class="box-title" style="color:#fff;">Payment Due</h5>
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
													<th style="max-width:120px;">Due In</th>
													<th>Order Status</th>
													<th>Action</th>
												
													
												</tr>
											</thead>
											<tbody>
												<?php
													for($i=0; $i<12; $i++){
												?>
												
												<tr>
													<td>#108737<?php echo $i;?></td>
													<td> 01/02/2019 : 7:00 PM </td>
													<td> Amount <b style="font-family:Arial;color:#7c1ab5;">&#8377; 2,477.6</b> Due For Order Id <a href="order_details.php">#order123</a></td>
													<td><span class="font-12" style="color:#ff0505;">12 Days Left</span></td>
													<td>Order Delivered</td>
													<td><a href="due_payment_trans.php" class="btn btn-outline-warning"> View Order</a></td>
													
												</tr>

												<tr>
													<td>#108737<?php echo $i;?></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>Amount <b style="font-family:Arial;color:#7c1ab5;">&#8377; 2,077.6</b> Due For Order Id <a href="order_details.php">#order123</a> </td>
													<td><span class="font-12" style="color:#ff0505;">5 Days Left</span></td>
													<td>Order Delivered</td>
													<td><a href="due_payment_trans.php" class="btn btn-outline-warning"> View Order</a></td>
													
												</tr>
												<tr>
													<td>#108737<?php echo $i;?></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>Amount <b style="font-family:Arial;color:#7c1ab5;">&#8377; 3,197.6</b> Due For Order Id <a href="order_details.php">#order123</a></td>
													<td><span class="font-12" style="color:#ff0505;">10 Days Left</span></td>
													<td>Order Delivered</td>
													<td><a href="due_payment_trans.php" class="btn btn-outline-warning"> View Order</a></td>
													
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
	<script src="js/vendor-js/datatables.min.js"></script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/vendor-js/jquery.validate.min.js"></script>
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

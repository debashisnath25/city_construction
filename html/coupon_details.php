<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Coupon Analytics| Wanted 7
    </title>
    <?php
		include("common/metalinks.php");
	?>
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <style>
      .dt-buttons {
        padding-bottom:15px;
		margin-bottom:-50px;
      }
      .bootstrap-select {
        float:right !important;
      }
	  .order_div{
        background: #F2F3FA;
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
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> <a href="discount_coupon.php">Discounts & Coupon </a>> Coupon Details
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
			  
            <div class="row" style="margin:0px;padding:0px;">
			   <div class="col-lg-12">
			  	<div class="alert alert-success alert-bordered has-icon" role="alert">Report for Coupon Code : <b>BEAUTY10XX</b> | COUPON CODE Scheme Name : <b>Christmas Specials</b> </div>
			  </div>
              <div class="col-lg-6">
                <div class="card" style="border:1px solid #7c1ab5">
                  <div class="card-header cardhdd">
                    <h5 class="box-title" style="color:#fff;">Coupon Analytics
                    </h5>
                    <div class="card-actions">
                      <a class="card-collapse" style="color:#fff;">
                        <i class="ti-angle-down">
                        </i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div>
                      <ul class="nav line-tabs">
						<li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tab1-1">Monthly
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tab1-2">Weekly
                          </a>
                        </li>
						<li class="nav-item">
                          <a class="nav-link " data-toggle="tab" href="#tab1-3">Daily
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content mt-4">
                        
						<div class="tab-pane fade show active" id="tab1-1">
                          <div id="column_gradient">
                          </div>
                        </div>
                        <div class="tab-pane fade" id="tab1-2">
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
                          </p>
                        </div>
						<div class="tab-pane fade" id="tab1-3">
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card" style="border:1px solid #7c1ab5">
                  <div class="card-header cardhdd">
                    <h5 class="box-title" style="color:#fff;">Coupon Information
                    </h5>
                    <div class="card-actions">
                      <a class="card-collapse" style="color:#fff;">
                        <i class="ti-angle-down">
                        </i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th>Scheme Name
                          </th>
                          <td scope="row"><span class="badge badge-warning" style="color: #fff;font-size: 15px;">Christmas Specials</span>
                          </td>
                        </tr>
                        <tr>
                          <th>Coupon Code
                          </th>
                          <td scope="row"><span class="badge badge-success" style="color: #fff;font-size: 15px;">BEAUTY10XX</span>
                          </td>
                        </tr>
                        <tr>
                          <th>Category
                          </th>
                          <td scope="row">New Arrivals
                          </td>
                        </tr>
                        <tr>
                          <th>Sub-Category
                          </th>
                          <td scope="row">Shirts
                          </td>
                        </tr>
                        <tr>
                          <th>Discount
                          </th>
                          <td scope="row">99
                          </td>
                        </tr>
                        <tr>
                          <th>Applicable For
                          </th>
                          <td scope="row">Everyone
                          </td>
                        </tr>
                        <tr>
                          <th>Start Time&nbsp;&nbsp;
                            <a href="#" data-toggle="tooltip" title="Start Date & Time">
                              <i style="font-size:12px;" class="fa fa-info-circle">
                              </i>
                            </a>
                          </th>
                          <td scope="row">27/09/2019 : 4:15 PM
                          </td>
                        </tr>
                        <tr>
                          <th>End Time&nbsp;&nbsp;
                            <a href="#" data-toggle="tooltip" title="Start Date & Time">
                              <i style="font-size:12px;" class="fa fa-info-circle">
                              </i>
                            </a>
                          </th>
                          <td scope="row">01/02/2019 : 7:00 PM
                          </td>
                        </tr>
                        <tr>
                          <th>Total Sales&nbsp;&nbsp;
                            <a href="#" data-toggle="tooltip" title="Total Sales After Launch in Rs.">
                              <i style="font-size:12px;" class="fa fa-info-circle">
                              </i>
                            </a>
                          </th>
                          <td scope="row">Rs. 15,00,000.00
                          </td>
                        </tr>
                        <tr>
                          <th>Coupon Used&nbsp;&nbsp;
                            <a href="#" data-toggle="tooltip" title="No. of Times Coupon has been successfully used">
                              <i style="font-size:12px;" class="fa fa-info-circle">
                              </i>
                            </a>
                          </th>
                          <td scope="row">43
                          </td>
                        </tr>
                        <tr>
                          <th>Item Sold&nbsp;&nbsp;
                            <a href="#" data-toggle="tooltip" title="No. of Items Sold Using Coupon">
                              <i style="font-size:12px;" class="fa fa-info-circle">
                              </i>
                            </a>
                          </th>
                          <td scope="row">437
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding-bottom:12px;">
                <div class="row">
				<div class="col-md-3">
				 	 <div class="card" style="border:1px solid #7c1ab5">
						<div class="card-header cardhdd">
							<h5 class="box-title" style="color:#fff;">Search
							</h5>
							
						  </div>
						<div class="card-body">
							<div class="row mb-2"  >
							  <div class="col-md-12 col-sm-12 col-xs-12" >
								<input class="form-control form-control-solid mb-3" id="datetimepicker_1" type="text" placeholder="Start Date">
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12">
								<input class="form-control form-control-solid mb-3" id="datetimepicker_2" type="text" placeholder="End Date">
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12" >
								<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
								  <option selected disabled>Status
								  </option>
								  <option>Pending
									</option>
									<option>Confirmed
									</option>
									<option>Completed
									</option>
									<option>Shipped
								 </option>
								</select>
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12" >
								<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
								  <option selected disabled>Sort
								  </option>
								  <option>Order Amount
								  </option>
								  <option>Date
								  </option>
								</select>
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12" >
								<button class="btn btn-primary btn-block clr"  type="submit">
								  <span class="btn-icon">
									<i class="ft-search">
									</i>Search
								  </span>
								</button>
							  </div>
							</div>
						</div>
                  </div>
				 </div>
                  <div class="col-md-9">
                    <div class="card" style="border:1px solid #7c1ab5">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Total Orders Using This Coupon
                        </h5>
                        <div class="card-actions">
                          <a class="card-collapse" style="color:#fff;">
                            <i class="ti-angle-down">
                            </i>
                          </a>
                        </div>
                      </div>
                      <div class="card-body">
                       <div class="table-responsive">
                          <table class="table table-bordered w-100" id="dt-buttons">
						  	<thead>
								<tr>
									<th>Order ID</th>
									<th>Product Details</th>
									<th>Price</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
                            <tbody>
							<?php
							for($i=0;$i<=3;$i++){
							?>
                              <tr>
								  <td>
									  <a class="btn btn-outline-primary" href="order_details.php">ORDER ID<br/>#ORDER122</a>
								  </td>
								  <td style="min-width: 300px;">
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
								   <td>
								  	<div class="media-body mt-2">
									  <div class="h4 font-14">
										<span style="font-family:arial;">₹</span>&nbsp;3000
									  </div>
									</div>
								  </td>
								  <td>
								  	<div class="media-body mt-2">
									  <div class="h4 font-14">2 days Ago
									  </div>
									</div>
								  </td>
								  <td>
									  <div class="input-group-append"><button class="btn btn-light dropdown-toggle" style="border-color : #7c1ab5 !important;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="order_details.php">View Order Details</a>
											<a class="dropdown-item" href="#">Archive</a>
										</div>
									  </div>
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
include("common/scripts.php");
?>
<!-- PAGE LEVEL PLUGINS-->
<script src="js/vendor-js/datatables.min.js">
</script>
<script src="js/vendor-js/apexcharts.min.js">
</script>
<script src="js/vendor-js/apexcharts-demo.js">
</script>
<script src="js/vendor-js/Chart.min.js">
</script>
<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
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

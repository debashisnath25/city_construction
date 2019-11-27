<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Pending Indent | Wanted 7
    </title>
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
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> Pending Indent
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
			  <div class="col-lg-12">
				<div class="card discount" style="border:1px solid #7c1ab5;">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Add Indent Listing Here </h5>
						<div class="card-actions"><a class="card-collapse"><i class="ti-angle-down"></i></a></div>
					</div>
					<div class="card-body">
						<form class="needs-validation" novalidate="">
							<!-- original form -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group mb-4 row">
										<dt class="col-sm-3" style="padding-top:10px;">Project Name</dt>
										<div class="col-sm-9">
											<select class="selectpicker form-control mb-3 form-control-solid" data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Project</option>
												<option>North Grande</option>
												<option>Siddha Galaxia</option>
												<option>Kalim Ark Residency</option>
											</select>
										</div>
									</div>
									
									<div class="form-group mb-4 row">
										<dt class="col-sm-3" style="padding-top:10px;">Date</dt>
										<div class="col-sm-9">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Date" required="">
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-3" style="padding-top:10px;">Raise By</dt>
										<div class="col-sm-9">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Name" required="">
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-3" style="padding-top:10px;">Supplier Name</dt>
										<div class="col-sm-9">
											<select class="selectpicker form-control mb-3 form-control-solid" data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Supplier Name</option>
												<option>Taj brickworks</option>
												<option>Rony cement</option>
												<option>Sumit hardwares</option>
											</select>
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-3" style="padding-top:10px;">Material Code</dt>
										<div class="col-sm-9">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Material Code" required="">
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-3" style="padding-top:10px;">Material Name</dt>
										<div class="col-sm-9">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Material Name" required="">
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-3" style="padding-top:10px;">Unit</dt>
										<div class="col-sm-9">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Unit" required="">
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-3" style="padding-top:10px;">Quantity</dt>
										<div class="col-sm-9">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Quantity" required="">
										</div>
									</div>
									
								</div>
								
							</div>
							<!-- original form ends -->
						
					</div>

					
					</form>
				</div>
			  </div>
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Indent Listing</h5>
								<!-- <div class="card-actions">
									<button class="btn btn-default del">
										<span class="btn-icon"><i class="fas fa-plus"></i> Add Indent</span>
									</button>
								</div> -->
							</div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped w-100" id="dt-buttons_1">
                                        <thead class="">
                                            <tr>
                                                <th>Project Name</th>
												<th>Date<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="End Date & Time"><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
                                                <th>Raise By</th>
												<th>Supplier Name</th>
												<th>Material Code</th>
												<th>Material Name</th>
												<th>Unit</th>
												<th>Quantity</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											for($i=0;$i<=10;$i++){
										?>
                                            <tr>
                                                <td>Siddha Galaxia</td>
												<td>01/02/2019</td>
												<td>Tarok Nath Das</td>
												<td>Taj brickworks</td>
												<td>BR6002</td>
												<td>Bricks</td>
                                                <td>100 PC</td>
												<td>1000 pc</td>
												<td><a href="#" class="btn btn-ok btn-sm" type="button">Pending</a></td>
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
		  "pageLength":10,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'copy', 'excel', 'pdf', 'csv', 'print'
		  ]
		});
		 
		 $('#dt-buttons_1').DataTable({
		  "searching": true,
		  "pageLength":10,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'copy', 'excel', 'pdf', 'csv', 'print'
		  ]
		});
		  

		$(".dt-buttons").removeClass("btn-group");


		
	  });
    </script>
  </body>
</html>

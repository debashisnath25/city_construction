<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title> Tax Settings | Wanted 7</title>
	<?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
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
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a> &gt; Tax Settings
				</h1>
			  </div>
			</div>
			<!-- BEGIN: Page content-->
            <div>
			<div class="row">
				<!-- settings sidebar start-->
				<?php include ('common/settings_sidebar.php');?>
				<!-- settings sidebar Ends-->
				<div class="col-lg-9">
				<div class="card " style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Taxpayer Identification Number</h5>
					</div>
					<form>
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">GST Number</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Enter The GST Number" >
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<ul class="timeline timeline-default">
									<li class="timeline-item">Enter GST Number</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="form-group">
							<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Update </button>
							<button class="btn btn-default" type="reset"> Clear </button>
                        </div>
					</div>
					</form>
				</div>
				<div class="card " style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Add New Tax</h5>
					</div>
					<form>
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Tax Name</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Enter Your Tax Name" >
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Tax Applies To</dt>
									<div class="col-sm-8">
										<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
											<option selected >Choose Tax Applies</option>
											<option>Subtotal</option>
											<option>Subtotal + Shipping</option>
											<option>Subtotal + Shipping + Packaging</option>
											<option>Subtotal + Shipping + Packaging + Returns</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Tax Rate(%)</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Enter Tax Rate" >
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<ul class="timeline timeline-default">
									<li class="timeline-item">Enter Tax Name</span></li>
									<li class="timeline-item">Choose the Tax Applied to and Enter Tax Rate in percentage</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="form-group">
							<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Add </button>
							<button class="btn btn-default" type="reset"> Clear </button>
                        </div>
					</div>
					</form>
				</div>
										<div class="card" style="border:1px solid #7c1ab5">
								<div class="card-header cardhdd">
									<h5 class="box-title" style="color:#fff;">All Taxes</h5>
									<div class="card-actions"><a class="card-collapse"><i class="ti-angle-down"></i></a></div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped w-100" id="dt-buttons">
											<thead class="">
												<tr>
													<th>Tax Name</th>
													<th>Applies</th>
													<th>Tax Rate&nbsp;(%)</th>
													<th>Created On</th>
													<th>Action</th>
													<th></th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>New Tax</td>
													<td>Subtotal</td>
													<td>10%</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														<div class="form-group"><label class="ui-switch switch-solid">Disable<input type="checkbox" checked=""><span></span>Enable</label></div>
													</td>
													<td>
														<div class="dropdown"><button class="btn btn-ok btn-sm" type="button" data-toggle="dropdown" aria-expanded="false">Actions</button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">Delete Tax</a>
																
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>New Tax</td>
													<td>Subtotal,Shipping</td>
													<td>20%</td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														<div class="form-group"><label class="ui-switch switch-solid">Disable<input type="checkbox" checked=""><span></span>Enable</label></div>
													</td>
													<td>
														<div class="dropdown"><button class="btn btn-ok btn-sm" type="button" data-toggle="dropdown" aria-expanded="false">Actions</button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">Delete Tax</a>
																
															</div>
														</div>
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
            <!-- END: Page content-->
         
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
	<script src="js/vendor-js/datatables.min.js"></script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/vendor-js/jquery.validate.min.js"></script>
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

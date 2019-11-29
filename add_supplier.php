<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Add Suppliers | City Construction
    </title>
    <?php
		include("common/metalinks.php");
	?>
    <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
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
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a>  &gt; <a href="suppliers.php">Supplier</a> &gt; Add Supplier
				</h1>
			  </div>
			</div>
			<!-- BEGIN: Page content-->
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="card " style="border:1px solid #7c1ab5">
                  <div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Add Supplier</h5>
						<div class="row pull-right">
							<div class="col-md-12">
								<a class="btn btn-light" href="project_supplier.php">Back</a>
							</div>
						</div>
					</div>
				  <div class="card-body">
						<div class="form-group mb-4 row">
							<dt class="col-sm-4" style="padding-top:10px;">Supplier Name</dt>
							<div class="col-sm-6">
								<input class="form-control form-control-solid" type="text" placeholder="Supplier Name">
							</div>
						</div>

						<div class="form-group mb-4 row">
							<dt class="col-sm-4" style="padding-top:10px;">Supplier Code</dt>
							<div class="col-sm-6">
								<input class="form-control form-control-solid" type="text" placeholder="Supplier Code">
							</div>
						</div>
						
						<div class="form-group mb-4 row">
							<dt class="col-sm-4" style="padding-top:10px;">Address</dt>
							<div class="col-sm-6">
								<input class="form-control form-control-solid" type="text" placeholder="Address">
							</div>
						</div>
						
						<div class="form-group mb-4 row">
							<dt class="col-sm-4" style="padding-top:10px;">GSTIN</dt>
							<div class="col-sm-6">
								<input class="form-control form-control-solid" type="text" placeholder="GSTIN">
							</div>
						</div>

						<div class="form-group mb-4 row">
							<dt class="col-sm-4" style="padding-top:10px;">Contact Person</dt>
							<div class="col-sm-6">
								<input class="form-control form-control-solid" type="text" placeholder="Contact Person">
							</div>
						</div>
						
						<div class="form-group mb-4 row">
							<dt class="col-sm-4" style="padding-top:10px;">Phone Number</dt>
							<div class="col-sm-6">
								<input class="form-control form-control-solid" type="text" placeholder="Phone Number">
							</div>
						</div>
				  </div>
				  <div class="card-footer text-right">
					<div class="col-sm-10">
						<button class="btn btn-primary" type="submit">Add</button>
						<button class="btn btn-light" type="reset">Clear</button>
					</div>
				  </div>
                </div>
                <div class="card card-default hd_card">
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
    <script src="js/vendor-js/jquery.validate.min.js">
    </script>
    <script src="js/vendor-js/jquery.steps.min.js">
    </script>
  </body>
</html>

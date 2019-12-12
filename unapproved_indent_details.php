<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/6.png' type='image/x-icon'/ >
    <title>Approved Indent | City Construction
    </title>
    <?php
		include("common/metalinks.php");
	?>
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<style>
	.faq-tabs .nav-link {
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
      
	 .dt-buttons {
		padding-bottom: 15px;
		margin-bottom: -50px;
	  }
	  .btn-success{
		width:129px;
	  }
	  .btn-danger{
		width:100px;
	  }
	  .btn-info{
		width:auto;
	  }
    </style>
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
			<div class="page-heading" style="padding-left:17px;">
			  <div class="page-breadcrumb">
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a>  &gt; North Grande &gt;Indent &gt;Pending Indent Details
				</h1>
			  </div>
			</div>
			<!-- BEGIN: Page content-->
            <div class="row">
			   <!-- settings sidebar start-->
				<?php include ('common/settings_sidebar.php');?>
				<!-- settings sidebar Ends-->
              <div class="col-md-9 col-xs-9" style="padding:0px;">
                <div class="card " style="border:1px solid #7c1ab5">
                  <div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Unapproved Indent Details</h5>
						<div class="row pull-right">
							<div class="col-md-12">
								
								
								<a class="btn btn-light" href="unapproved_indent.php">Back</a>

							</div>
						</div>
					</div>
				  <div class="card-body">
				  <div class="col-12 mb-4" style="padding-left:0px;margin-left:0px;">
						
						<div class="row mb-4 " style="padding-left:10px;">
							<div class="col-md-3 mb-2">
								<h5 class="text-primary mb-3">Indent No.</h5>
								<div class="font-15 text-muted">
									<div class=" text-muted">NG-001-1920</div>
									
								</div>
							</div>
							<div class="col-md-3 mb-4">
								<h5 class="text-primary mb-3">Project Details</h5>
								<div class="font-15 text-muted">
									<div class=" text-muted">North Grande</div>
									<div class=" text-muted">22 Dec 2019, 06:10 PM</div>
								</div>
							</div>
							<div class="col-md-3 mb-4">
								<h5 class="text-primary mb-3">Raise By</h5>
								<div class="font-15 text-muted">
								  <div class=" text-muted">Tarok Nath Das</div>
								</div>
							</div>
							<div class="col-md-3 mb-4" style="margin:0px !important;">
								<h5 class="text-primary mb-3">Supplier Name</h5>
								<div class="font-15 text-muted">
								  <div class=" text-muted">J P India Ltd</div>
								   
								</div>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered w-100">
							<thead class="thead-light">
								<tr>
									<th>Sl</th>
									<th>Code</th>
									<th>Name</th>
									<th>Unit</th>
									<th>Quantity</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>123</td>
									<td>ABC</td>
									<td>nos</td>
									<td>2</td>
									<td>22 Dec 2019, 06:10 PM</td>
									<td>
										<button class="btn btn-danger btn-sm" type="button">Delete</button>
									</td>
								</tr>
							</tbody>
						</table>
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
    <script src="js/vendor-js/datatables.min.js">
    </script>
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
      });
    </script>
  </body>
</html>

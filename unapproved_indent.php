<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/6.png' type='image/x-icon'/ >
    <title>Unapproved Indent | City Construction
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
		width:129px;
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
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a>  &gt; North Grande &gt; Unapproved Indent
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
						<h5 class="box-title" style="color:#fff;">Unapproved Indent</h5>
						<div class="row pull-right">
							<div class="col-md-12">
								<a class="btn btn-danger" href="add_supplier.php">Add Supplier</a>
								<a class="btn btn-light" href="indent.php">Back</a>
							</div>
						</div>
					</div>
				  <div class="card-body">
				  <div class="col-12" style="padding-left:0px;margin-left:0px;">
						<div class="row">
							<div class="col-4">
								<h6>Indent Number: </h6>
							</div>
							<div class="col-4">
								<b>NGOO53</b>
							</div>
						</div>
						<div class="row">
							<div class="col-4">
								<h6>Project Name: </h6>
							</div>
							<div class="col-4">
								<h6>North Grande</h6>
							</div>
						</div>
						<div class="row">
							<div class="col-4">
								<h6>Date: </h6>
							</div>
							<div class="col-4">
								<h6>22/11/2019</h6>
							</div>
						</div>
						<div class="row">
							<div class="col-4">
								<h6>Raise By: </h6>
							</div>
							<div class="col-4">
								<h6>Tarok Nath Das</h6>
							</div>
						</div>
						<div class="row">
							<div class="col-4">
								<h6>Supplier: </h6>
							</div>
							<div class="col-4">
								<select class="selectpicker form-control mb-3" data-style="btn-light btn-light-solid">
									<option selected disabled>Choose Supplier</option>
									<option>J P India Ltd</option>
								</select>
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
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>123</td>
									<td>ABC</td>
									<td>nos</td>
									<td>2</td>
									<td>27/11/2019</td>
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

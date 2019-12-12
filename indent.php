<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/6.png' type='image/x-icon'/ >
    <title>Indent | City Construction
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
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a>  &gt; North Grande &gt; Indent
				</h1>
			  </div>
			  <a class="btn btn-primary" href="add_indent.php">
				<span class="btn-icon">
				  <i class="ti-plus"></i>
				  Add Indent
				</span>
			 </a>
			</div>
			<!-- BEGIN: Page content-->
            <div class="row">
			   <!-- settings sidebar start-->
				<?php include ('common/settings_sidebar.php');?>
				<!-- settings sidebar Ends-->
              <div class="col-md-9 col-xs-9" style="padding:0px;">
                <div class="card " style="border:1px solid #7c1ab5">
                  <div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Pending Indent</h5>
					</div>
				  <div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered w-100" id="dt-buttons">
							<thead class="thead-light">
								<tr>
									<th>Sl</th>
									<th>Indent Number</th>
									
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td><b>NG-001-1920</b></td>
									<td><a href="pending_indent_details.php" class="btn btn-primary">View Details</a>&nbsp;<a href="javascript:void(0);" class="btn btn-info">Approved</a>&nbsp;<a href="javascript:void(0);" class="btn btn-danger">Not approved</a></td>
								</tr>
								<tr>
									<td>2</td>
									<td><b>NG-002-1920</b></td>
									<td><a href="pending_indent_details.php" class="btn btn-primary">View Details</a>&nbsp;<a href="javascript:void(0);" class="btn btn-info">Approved</a>&nbsp;<a href="javascript:void(0);" class="btn btn-danger">Not approved</a></td>
								</tr>
								<tr>
									<td>3</td>
									<td><b>NG-003-1920</b></td>
									<td><a href="pending_indent_details.php" class="btn btn-primary">View Details</a>&nbsp;<a href="javascript:void(0);" class="btn btn-info">Approved</a>&nbsp;<a href="javascript:void(0);" class="btn btn-danger">Not approved</a></td>
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

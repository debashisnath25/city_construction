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
			<div class="page-heading">
			  <div class="page-breadcrumb">
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a>  &gt; GRI Details
				</h1>
			  </div>
			</div>
			<!-- BEGIN: Page content-->
            <div class="row">
			   <!-- settings sidebar start-->
				
				<!-- settings sidebar Ends-->
              <div class="col-md-12 col-xs-12" style="padding:0px;">
                <div class="card " style="border:1px solid #7c1ab5">
                  <div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">GRI Details</h5>
						<div class="row pull-right">
							<div class="col-md-12">
								<a class="btn btn-light" href="gin.php">Back</a>
							</div>
						</div>
					</div>
				  <div class="card-body">
				  <div class="col-12" style="padding-left:0px;margin-left:0px;">
						
						<div class="row">
							<div class="col-3">
								<h6>Project Name: </h6>
							</div>
							<div class="col-3">
								<h6>North Grande</h6>
							</div>
						</div>
						<div class="row">
							<div class="col-3">
								<h6>Date: </h6>
							</div>
							<div class="col-3">
								<h6>22-11-19</h6>
							</div>
						</div>
						<div class="row">
							<div class="col-3">
								<h6>Issue To </h6>
							</div>
							<div class="col-3">
								<h6>Tarok Nath Das</h6>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered w-100">
							<thead class="thead-light">
								<tr>
									<th>Sl</th>
									<th>Name</th>
									<th>Unit</th>
									<th>Code</th>
									<th>Qty</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>123</td>
									<td>ABC</td>
									<td>nos</td>
									<td>2</td>
								
								</tr>
							</tbody>
							<tbody>
								<tr>
									<td>2</td>
									<td>123</td>
									<td>ABC</td>
									<td>nos</td>
									<td>2</td>
									
								</tr>
							</tbody>
							<tbody>
								<tr>
									<td>3</td>
									<td>123</td>
									<td>ABC</td>
									<td>nos</td>
									<td>2</td>
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

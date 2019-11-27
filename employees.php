<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/6.png' type='image/x-icon'/ >
    <title>Employees | City Construction
    </title>
    <?php
	include("common/metalinks.php");
	?>
    <!-- PAGE LEVEL VENDORS-->
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
	<style>
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
            <div class="page-heading">
              <div class="page-breadcrumb">
                <h1 class="page-title">
                  <a href="dashboard.php">Dashboard 
                  </a>>Employees
                </h1>
              </div>
			  <a class="btn btn-primary" href="add_employee.php">
				<span class="btn-icon">
				  <i class="ti-plus"></i>
				  Add Employee
				</span>
			 </a>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="faq-group-1">
                      <div class="card" style="border:1px solid #7c1ab5">
                        <div class="card-header cardhdd">
                          <h5 class="box-title" style="color:#fff;">Employees
                          </h5>
                        </div>
                        <div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered w-100" id="dt-buttons">
									<thead class="thead-light">
										<tr>
											<th>Sl</th>
											<th>Name</th>
											<th>Employees Code</th>
											<th>Address</th>
											<th>Phone</th>
										</tr>
									</thead>
									<tbody>
										<?php
											for($i=1;$i<=10;$i++){
										?>
										<tr>
											<td><?php echo $i;?></td>
											<td>Ratan Kumar</td>
											<td>RK123</td>
											<td>Anandapuri, Barrackpore</td>
											<td>9876543210</td>
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

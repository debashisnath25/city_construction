<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/6.png' type='image/x-icon'/ >
    <title>List of Supplier | City Construction
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
                  </a>> List of Supplier
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="faq-group-1">
                      <div class="card" style="border:1px solid #7c1ab5">
                        <div class="card-header cardhdd">
                          <h5 class="box-title" style="color:#fff;">List of Supplier
                          </h5>
                          <div class="card-actions">
                            <a class="card-collapse">
                              <i class="ti-angle-down">
                              </i>
                            </a>
                          </div>
                        </div>
                        <div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered w-100" id="dt-buttons">
									<thead class="thead-light">
										<tr>
											<th>Sl</th>
											<th>Name</th>
											<th>Email ID</th>
											<th>Phone</th>
											<th>Message</th>
										</tr>
									</thead>
									<tbody>
										<?php
											for($i=1;$i<=10;$i++){
										?>
										<tr>
											<td><?php echo $i;?></td>
											<td>Ratan Kumar</td>
											<td>RK123@gmail.com</td>
											<td>9876543210</td>
											<td>Please contact me on my phone number.</td>
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

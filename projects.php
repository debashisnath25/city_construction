<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/6.png' type='image/x-icon'/ >
    <title>Projects | City Construction
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
                  </a>> Projects
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
                          <h5 class="box-title" style="color:#fff;">Projects
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
											<th>Project Name</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>North Grande</td>
											<td><a href="indent.php" class="btn btn-primary">View Details</a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Siddha Galaxia</td>
											<td><a href="indent.php" class="btn btn-primary">View Details</a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>Kalim Ark Residency</td>
											<td><a href="indent.php" class="btn btn-primary">View Details</a></td>
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

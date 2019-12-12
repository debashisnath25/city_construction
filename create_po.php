<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/6.png' type='image/x-icon'/ >
    <title>Pending Indent Details | City Construction
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
			<div class="page-heading">
			  <div class="page-breadcrumb">
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a>  &gt; North Grande &gt;Indent &gt;Pending Indent Details
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
						<h5 class="box-title" style="color:#fff;">Create P.O</h5>
						<div class="row pull-right">
							<div class="col-md-12">
								
								<a class="btn btn-light" style="margin-right:5px;" href="#">Edit</a>
								<a class="btn btn-light" href="#">Back</a>

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
					<div class="card-fullwidth-block mx-sm-0 mt-4" style="padding:0 !important;border: 1px solid #cccccc;">
                                    <div class="table-responsive">
                                        <table class="table invoice-table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Material Id</th>
													<th>Material Name</th>
													<th>QTY</th>
                                                    <th>Unit Price</th>
                                                    <th>Discount</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-none d-sm-block">108737NT</div>
                                                    </td>
													<td>
                                                        <div class="d-none d-sm-block">Bricks</div>
                                                    </td>
                                                    <td>1000 pc</td>
                                                    <td><span style="font-family:arial;">&#8377;</span> 5.00</td>
													  <td><span style="font-family:arial;">&#8377;</span>0.00</td>
                                                    <td class="text-right"><span style="font-family:arial;">&#8377;</span>5000.00</td>
                                                </tr>
												   <tr>
                                                    <td>
                                                        <div class="d-none d-sm-block">108737NT</div>
                                                    </td>
													<td>
                                                        <div class="d-none d-sm-block">Cement</div>
                                                    </td>
                                                    <td>100 pkt</td>
                                                    <td><span style="font-family:arial;">&#8377;</span>350.00</td>
													  <td><span style="font-family:arial;">&#8377;</span>0.00</td>
                                                    <td class="text-right"><span style="font-family:arial;">&#8377;</span>35000.00</td>
                                                </tr>
												   <tr>
                                                    <td>
                                                        <div class="d-none d-sm-block">108737NT</div>
                                                    </td>
													<td>
                                                        <div class="d-none d-sm-block">Sand</div>
                                                    </td>
                                                    <td>90 pkt</td>
                                                    <td><span style="font-family:arial;">&#8377;</span>100.00</td>
													  <td><span style="font-family:arial;">&#8377;</span>0.00</td>
                                                    <td class="text-right"><span style="font-family:arial;">&#8377;</span>9000.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="6"></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                               
								<div class="d-flex justify-content-end">
                                    <div class="text-right mr-3" style="width:400px;">
										<div class="row mb-4">
                                            <div class="col-8">Taxes (GST):</div>
                                            <div class="col-4"><b><span style="font-family:arial;">&#8377;</span>280</b></div>
                                        </div>
										
										<!-- <div class="row mb-3">
                                            <div class="col-9">Packing Charges :</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>100</b></div>
                                        </div> -->
										<!-- <div class="row mb-3">
                                            <div class="col-9">GST on Packing Charges:</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>18</b></div>
                                        </div> -->
										<!-- <div class="row mb-3">
                                            <div class="col-9">Shipping Charges :</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>100</b></div>
                                        </div> -->
										<!-- <div class="row mb-3">
                                            <div class="col-9">GST on Shipping Charges:</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>18</b></div>
                                        </div> -->
										 <div class="row font-weight-strong font-20 align-items-center text-primary mb-2">
                                            <div class="col-8" style="color:#211f20;">Total Charges & Tax:</div>
                                            <div class="col-4">
                                                <div class="h3 " style="color: #37ba32;"><span style="font-family:arial;">&#8377;</span>280‬</div>
                                            </div>
                                        </div>
										 <div class="row font-weight-strong font-20 align-items-center text-primary mb-2">
                                            <div class="col-8" style="color:#211f20;">Sub Total:</div>
                                            <div class="col-4">
                                                <div class="h3 " style="color: #37ba32;"><span style="font-family:arial;">&#8377;</span>49,000</div>
                                            </div>
                                        </div>
                                        
                                        <div class="row font-weight-strong font-20 align-items-center text-primary mb-4">
                                            <div class="col-8" style="color:#211f20;">Total Price:</div>
                                            <div class="col-4">
                                                <div class="h3 " style="color: #37ba32;"><span style="font-family:arial;">&#8377;</span>49,280‬</div>
                                            </div>
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

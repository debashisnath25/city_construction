<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Subcategory | Wanted 7
    </title>
    <?php
		include("common/metalinks.php");
	?>
	
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<link href="css/vendor-css/summernote-bs4.css" rel="stylesheet" />
	<link href="css/vendor-css/dropzone.min.css" rel="stylesheet" />
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
    <style>
	  .dt-buttons {
	  	padding-bottom:15px;
		margin-bottom:-50px;
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
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>>Product > Subcategory
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
			 
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-md-12">
				  	<div class="row mb-3">
									<div class="col-md-12">
										
										<a class="btn btn-default del" href="add_category.php" style="background-color: #ccc;color:#000;"><span class="btn-icon"><i class="fas fa-plus"></i>Add  Category</span></a>
										<button class="btn btn-primary clr" data-toggle="modal" data-target="#exampleLargeModal"><span class="btn-icon"><i class="fas fa-plus"></i>Add Subcategory</span></button>
									</div>
								</div>
							<div class="card" style="border:1px solid #7c1ab5">
							   <div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">All Subcategories List</h5>
								<div class="row pull-right">
									<div class="col-md-12">
										<button class="btn btn-default del" data-toggle="modal" data-target="#exampleLargeModal"><span class="btn-icon"><i class="fas fa-plus"></i>Add New Subcategory</span></button>
										
									</div>
								</div>
							</div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped w-100" id="dt-buttons_1">
                                      <thead class="">
                                            <tr>
												<th style="min-width:140px;">Subcategory Image</th>
                                                <th style="min-width:140px;">Subcategory Name</th>
												<th>Subcategory Description</th>
												<th style="min-width:140px;">Category Name</th>
												
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										
                                            <tr>
                                                
                                               <td>
													<img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="130">
												</td>
												<td>Fashion</td>
												<td>demo description demo description demo description demo description demo description demo description demo description.</td>
												<td>Wanted7</td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
											  <tr>
                                               
                                                <td><img class="rounded-lg" src="images/vendor-images/galaxy-s8.png" alt="image" width="130"></td>
												 <td>Jwellery</td>
												<td>demo description demo description demo description demo description demo description demo description demo description.</td>
												<td>New Arrivals</td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
											  <tr>
                                                
                                                <td>
													<img class="rounded-lg" src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" alt="image" width="130">
                                                </td>
												<td>Sports</td>
												<td>demo description demo description demo description demo description demo description demo description demo description.</td>
												<td>Sale Items</td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
											  <tr>
                                                
                                                <td><img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="130"></td>
												<td>Electronics</td>
												<td>demo description demo description demo description demo description demo description demo description demo description.</td>
												<td>Main/All</td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
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
          </div>

		  <div class="modal fade" id="exampleLargeModal" tabindex="-1" role="dialog" aria-labelledby="exampleLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header cardhdd">
							<h5 class="modal-title h4" id="exampleLargeModalLabel" style="color:#fff;">Add Subcategory</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times" style="font-size:15px;color:#fff;"></i></button>
						</div>
						<div class="modal-body">
						   <div class="form-group mb-4 row">
								<dt class="col-sm-3" style="padding-top:10px;">Name</dt>
								<div class="col-sm-9">
									<input class="form-control form-control-solid theme_border" id="validationCustom03" type="text" placeholder="Enter Subcategory Name" required="">
								</div>
							</div>
							<div class="form-group mb-4 row">
									<dt class="col-sm-3" style="padding-top:10px;">Category Name</dt>
									<div class="col-sm-9">
										<select class="selectpicker form-control" data-style="btn-light btn-light-solid">
											<option selected disabled>Choose  Category</option>
											<option>Wanted7</option>
											<option>New Arrivals</option>
											<option>Sale Items</option>
											<option>Main/All</option>
											<option>Home Utensils</option>
											<option>Jewellery</option>
										</select>
									</div>
								</div>
							
							
							<div class="form-group mb-4 row">
								<dt class="col-sm-3" style="padding-top:10px;">Description</dt>
								<div class="col-sm-9">
									<div id="summernote">
									</div>
								</div>
							</div>	
						</div>
						<div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
					</div>
				</div>
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
    <?php
		include("common/extra.php");
    ?>
    <!-- BEGIN: Page backdrops-->
    <?php
		include("common/scripts.php");
	?>
    <script src="js/vendor-js/datatables.min.js"></script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/vendor-js/summernote-bs4.min.js"></script>
	<script src="js/vendor-js/dropzone.min.js"></script>
    <script>
      $(function() {

	 var t = $('#summernote').summernote({
		  height: 150,
		  focus: true
	  });
		$('#dt-buttons').DataTable({
		  "searching": true,
		  "pageLength":10,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'copy', 'excel', 'pdf', 'csv', 'print'
		  ]
		});
		 
		 $('#dt-buttons_1').DataTable({
		  "searching": true,
		  "pageLength":10,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'copy', 'excel', 'pdf', 'csv', 'print'
		  ]
		});
		$(".dt-buttons").removeClass("btn-group");
		
		$("div#mydropzoneSingle").dropzone({
			url: "./",
			maxFiles: 1,
			maxFilesize: 5, // MB
			addRemoveLinks: !0,
		});


		
	  });
    </script>
  </body>
</html>

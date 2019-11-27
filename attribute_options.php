<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Attributes Options | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<style>
	  .dt-buttons {
	  	padding-bottom:15px;
	  }
	 .dz-error-message {
	 	display:none !important;
	 }
	 .dz-image {
	 	margin-top: -31px;
		margin-left: -28px;
	 }
	 .dz-message {
	 	margin-top: -2px !important;
	 }
	 .faq-tabs .nav-link {
      padding: 10px;
	  width: 101px;
      border: 1px dashed;
      margin-bottom: 1rem;
      background-color: #fff;
      box-shadow: 0 1px 15px 1px rgba(62,57,107,.07);
	  margin-right:15px;
	  text-align: center;
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
      .faq-list>li {
        padding: .75rem 0;
      }
      .faq-list>li>a {
        display: block;
        position: relative;
        color: inherit;
        font-weight: 500;
        font-size: 16px;
      }
      .faq-list>li>a:after {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        font-family: 'themify';
        content: "\e61a";
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
      }
      .faq-list>li>a[aria-expanded=true] {
        color: #2949ef;
      }
      .faq-list>li>a[aria-expanded=true]:after {
        content: "\e622";
      }
      .faq-answer {
        padding: 1rem 0;
        margin-top: 1rem;
        color: #6c757d;
      }
	  .nav-pills {
	    padding-left: 16px;
		padding-top: 15px;
	  }
	  .list-group-item {
	  	cursor: pointer;
		background-color: #E9ECEF;
	  }
	  .btn-light-solid {
			background-color: #f4f5f9;
			border-color: #f4f5f9;
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
            <div>
				<div class="row">
					<div class="col-lg-12">
						<div class="ex-box">
							<h4>Product Types</h4>
							<p>Product types are groups of products which share the same attributes. For example "Books", "Apparel", "Hand-made", etc.</p>
						</div>
					</div>
					<div class="col-lg-12 mb-4">
						<button class="btn btn-primary clr" data-toggle="modal" data-target="#exampleLargeModal"><span class="btn-icon"><i class="fas fa-plus"></i>Add New Option</span></button>
						<button class="btn btn-default del" style="background-color: #ccc;">Delete Option</button>
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-body">
								<div class="row" id="main_panel">
									<div class="col-md-3" style="border-right:1px solid #dee2e6;">
										<ul class="list-group" id="sortable">
                                            <li class="list-group-item" id="li_name"">General (no type assigned)</li>
                                        </ul>
									</div>
									<div class="col-md-9" id="option_div">
										<h4>'General' type</h4>
										<br/>
										<h4>Attributes</h4>
										<span>Additional product detail fields (that will be shown in the store-front) to provide your customers with extra information on the product</span>
										<div class="form-row">
											<div class="col-md-6 mb-3">
												<button class="btn btn-default" style="background-color: #ccc;margin-top:28px;" onclick="add_new_value();">
													<span class="btn-icon">
														<i class="fas fa-plus"></i>Add New
													</span>
												</button>
											</div>
										</div>
										<table class="table table-bordered mb-3">
											<thead class="thead-light">
												<tr>
													<th scope="col">Name</th>
													<th scope="col">Display Value</th>
													<th scope="col">Show</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody id="tbody_value">
												<tr>
													<td>
														UPC
													</td>
													<td>
														<input class="form-control form-control-solid form-control-sm"id="validationCustom03" type="text" required="" value="UPC">
													</td>
													<td>
														<select class="form-control form-control-sm mb-3" data-style="btn-light btn-light-solid">
															<option>Show</option>
															<option>Do not show</option>
														</select>
													</td>
													<td>
														<i class="ft-trash-2 remove" style="font-size:20px;margin-right:4px;"></i>
													</td>
												</tr>
												<tr>
													<td>
														Brand
													</td>
													<td>
														<input class="form-control form-control-solid form-control-sm"id="validationCustom03" type="text" required="" value="Brand">
													</td>
													<td>
														<select class="form-control form-control-sm mb-3" data-style="btn-light btn-light-solid">
															<option>Show</option>
															<option>Do not show</option>
														</select>
													</td>
													<td>
														<i class="ft-trash-2 remove" style="font-size:20px;margin-right:4px;"></i>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														<input class="form-control form-control-solid form-control-sm" id="validationCustom03" type="text" required="">
													</td>
													<td>
														<select class="form-control form-control-sm mb-3" data-style="btn-light btn-light-solid">
															<option>Show</option>
															<option>Do not show</option>
														</select>
													</td>
													<td>
														<i class="ft-trash-2 remove" style="font-size:20px;margin-right:4px;"></i>
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
							<h5 class="modal-title h4" id="exampleLargeModalLabel" style="color:#fff;">New Product Type</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times" style="font-size:15px;color:#fff;"></i></button>
						</div>
						<div class="modal-body">
							<div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
										<?php
											for($i=1;$i<=7;$i++){
										?>
											 <tr>
												<th><label class="checkbox checkbox-primary mt-3"><input type="checkbox" id="checkAll"><span></span></label></th>
                                                <td>Product Type <?php echo $i;?></td>
												<td><i class="ft-plus" style="color:#220132;font-size:20px;"></i></td>
                                            </tr>
										<?php
											}
										?>
										</tbody>
									</table>
								</div>
								<button class="btn btn-primary clr" type="button">Add</button>
						</div>
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
    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <?php
		include("common/scripts.php");
	?>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );

function add_new_value()
{
	var htmlz = '<tr><td colspan="2"><input class="form-control form-control-solid form-control-sm" id="validationCustom03" type="text" required=""></td><td><select class="form-control form-control-sm mb-3" data-style="btn-light btn-light-solid"><option>Show</option><option>Do not show</option></select></td><td><i class="ft-trash-2 remove" style="font-size:20px;margin-right:4px;"></i></td></tr>';

    $("#tbody_value").append(htmlz);

	$("body").on("click",".remove",function(){ 
          $(this).parents("tr").remove();
    });
}
  </script>
  </body>
</html>

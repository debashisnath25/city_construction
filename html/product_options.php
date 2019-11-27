<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Add Options | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<style>
	  .dt-buttons {
	  	padding-bottom:15px;
		margin-bottom:-50px;
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
      height: 70px;
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
		float:left !important;
	  }
	  .col-5 {
	  	margin-right:18px !important;
	  }
	  .badge-pill {
		font-size: 14px;
	  }
	  p {
	  	margin-bottom: 0px;
	  }
	  .empty_div {
	  	padding: 15px;
		background-color: #F2F2F2;
		text-align:center;
		display:none;
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
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> <a href="products.php">Products </a>> Options & Variations
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
				<?php
					include("common/product_header.php");
				?>
				<div class="row">
					<div class="col-lg-12 mb-4">
						<button class="btn btn-primary clr" id="add_option" data-toggle="modal" data-target="#exampleLargeModaladd"><span class="btn-icon"><i class="fas fa-plus"></i>Add New Option</span></button>
						<button class="btn btn-primary clr" id="add_variation" style="display:none;" data-toggle="modal" data-target="#variation_modal"><span class="btn-icon"><i class="fas fa-plus"></i>Add New Variation</span></button>
					</div>
				</div> 
				<div class="row">
					<div class="col-lg-9">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-body">
							<div>
								<ul class="nav line-tabs">
									<li class="nav-item"><a class="nav-link active" id="option" style="font-size: 15px;font-weight: 600;" data-toggle="tab" href="#tab1-1">Options</a></li>
									<li class="nav-item"><a class="nav-link" id="variaton" style="font-size: 15px;font-weight: 600;" data-toggle="tab" href="#tab1-2">Variations</a></li>
								</ul>
								<div class="tab-content mt-4">
									<div class="tab-pane fade show active" id="tab1-1">
										<div class="empty_div">
											<p style="font-size:medium;font-weight:600;">Try Product Options</p>
											<p style="font-size:14px;">Start creating options by clicking <a href="javascrip:void();" data-toggle="modal" data-target="#exampleLargeModaladd">here</a></p>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered table-striped w-100" id="dt-base">
												<thead class="">
													<tr>
														<th style="min-width:200px;">Option Name</th>
														<th style="min-width:200px;">Total Values</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Size</td>
														<td>
															3 options
															<p class="mt-2"><span class="badge badge-success badge-pill">UK 7</span>&nbsp;&nbsp;<span class="badge badge-success badge-pill">UK 8</span>&nbsp;&nbsp;<span class="badge badge-success badge-pill">UK 9</span></p>
														</td>
														<td>
															<a class="font-20" href="javascript:;" data-toggle="modal" data-target="#exampleLargeModaladd"><i class="ti-pencil"></i></a>
															<a class="font-20" href="javascript:;"><i class="ti-trash"></i></a>
														</td>
													</tr>
													<tr>
														<td>Color</td>
														<td>
															4 options
															<p class="mt-2"><span class="badge badge-success badge-pill">White</span>&nbsp;&nbsp;<span class="badge badge-success badge-pill">Black</span>&nbsp;&nbsp;<span class="badge badge-success badge-pill">Red</span>&nbsp;&nbsp;<span class="badge badge-success badge-pill">Blue</span></p>
														</td>
														<td>
															<a class="font-20" href="javascript:;" data-toggle="modal" data-target="#exampleLargeModaladd"><i class="ti-pencil"></i></a>
															<a class="font-20" href="javascript:;"><i class="ti-trash"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="tab1-2">
										<div class="empty_div">
											<p style="font-size:medium;font-weight:600;">Try Product variation</p>
											<p style="font-size:14px;">Start creating variations by clicking <a href="javascrip:void();" data-toggle="modal" data-target="#variation_modal">here</a></p>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered table-striped w-100" id="dt-base2">
												<thead class="">
													<tr>
														<th>Image</th>
														<th>Variation</th>
														<th>SKU</th>
														<th>UPC</th>
														<th>Price</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100"></td>
														<td>
															<p>Size : UK 8<p>
															<p>Color : White<p>
														</td>
														<td>
															 0001.456778
														</td>
														<td>
															 CD7287-001
														</td>
														<td>
															 <span style="font-family:arial;">₹</span>&nbsp;3500
														</td>
														<td>
															<a class="font-20" href="javascript:;" data-toggle="modal" data-target="#variation_modal"><i class="ti-pencil"></i></a>
															<a class="font-20" href="javascript:;"><i class="ti-trash"></i></a>
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
					  <?php
						include("common/product_sidebar.php");
					  ?>
				</div>
            </div>
            <!-- END: Page content-->
          </div>
		 <!-- option modal starts-->
		 <div class="modal fade" id="exampleLargeModaladd" tabindex="-1" role="dialog" aria-labelledby="exampleLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header cardhdd">
						<h5 class="modal-title h4" id="exampleLargeModalLabel" style="color:#fff;">Option</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times" style="font-size:15px;color:#fff;"></i></button>
					</div>
					<div class="modal-body">
						<div class=" card-fullheight">
							<div class="card-body">
								<div class="row" id="main_panel">
									<div class="col-md-12" id="option_div">
										<div class="form-row">
											<div class="col-md-6 mb-3">
												<dt class="mb-3">Option name</dt>
												<input class="form-control form-control-solid" id="opt_name" type="text" placeholder="Option name" onkeyup="write_option(this.value)"required="">
											</div>
											<div class="col-md-6 mb-3">
												<button class="btn btn-primary clr" style="color: #fff;margin-top:33px;" onclick="add_new_value();">
													<span class="btn-icon">
														<i class="fas fa-plus"></i>Add New Value
													</span>
												</button>
											</div>
										</div>
										<table class="table table-bordered mb-3">
											<thead class="thead-light">
												<tr>
													<th scope="col">Option values</th>
													<th scope="col">Price modifier</th>
													<th scope="col">Default value</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody id="tbody_value">
												<tr>
													<td>
														<input class="form-control form-control-solid" id="validationCustom03" type="text" required="">
													</td>
													<td>
														<select class="form-control selectpicker col-3"  data-style="btn-light btn-light-solid">
															<option>Rs.</option>
															<option>%</option>
														</select>
														<select class="form-control selectpicker col-3"  data-style="btn-light btn-light-solid">
															<option>+</option>
															<option>-</option>
														</select>
														<input class="form-control form-control-solid col-5" style="float:right;" id="validationCustom03" type="number" required="">
													</td>
													<td>
														<div class="check-list">
															<label class="radio radio-grey radio-primary">
																<input type="radio" name="cl" >
																<span></span>
															</label>
														</div>
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
					<div class="card-footer">
						<div class="form-group">
							<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Save </button>
							<button class="btn btn-default" type="reset"> Clear </button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- option modal ends-->
		<!-- variation modal starts-->
		<div class="modal fade" id="variation_modal" tabindex="-1" role="dialog" aria-labelledby="variation_modal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header cardhdd">
						<h5 class="modal-title h4" id="variation_modal" style="color:#fff;">Variation</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times" style="font-size:15px;color:#fff;"></i></button>
					</div>
					<div class="modal-body">
						<div class=" card-fullheight">
							<div class="card-body">
								<h5 class="mb-4" style="margin-top: -14px;">Start creating variation by choosing the right combination of product options</h5>
								<div class="row" style="margin:0px;padding:0px;">
									<div class="col-md-4" style="padding:3px !important;">
									  <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
										<option selected disabled>Size</option>
										<option>UK 7</option>
										<option>UK 8</option>
										<option>UK 9</option>
									  </select>
									</div>
									<div class="col-md-4" style="padding:3px !important;">
									  <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
										<option selected disabled>Color</option>
										<option>White</option>
										<option>Black</option>
										<option>Red</option>
										<option>Blue</option>
									  </select>
									</div>
								  </div>
								  <hr class="my-4">
								<div class="row">
									<div class="col-md-12">
										<div class="table-responsive">
											<table class="table table-bordered mb-3">
												<thead class="thead-light">
													<tr>
														<th scope="col">Image</th>
														<th scope="col">SKU</th>
														<th scope="col">UPC</th>
														<th scope="col">Price modifier</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td style="text-align:center;">
															<img id ="render_image" class="rounded-lg" src="images/vendor-images/nike.png" alt="image" height="100">
															<button class="btn btn-ok btn-sm" id="change_btn" style="margin-top:8px;">Change</button>
															<input id="product_image" onchange="document.getElementById('render_image').src = window.URL.createObjectURL(this.files[0])" style="display:none;" type="file">
														</td>
														<td>
															<input class="form-control form-control-solid" id="validationCustom03" placeholder="SKU" type="text" required="">
														</td>
														<td>
															<input class="form-control form-control-solid" id="validationCustom03" placeholder="UPC" type="text" required="">
														</td>
														<td style="min-width:300px;">
															<select class="form-control selectpicker col-3"  data-style="btn-light btn-light-solid">
																<option>Rs.</option>
																<option>%</option>
															</select>
															<select class="form-control selectpicker col-3"  data-style="btn-light btn-light-solid">
																<option>+</option>
																<option>-</option>
															</select>
															<input class="form-control form-control-solid col-5" style="float:right;" id="validationCustom03" type="number" required="">
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
					<div class="card-footer">
						<div class="form-group">
							<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Save </button>
							<button class="btn btn-default" type="reset"> Clear </button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- variation modal ends-->
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
	<?php
		include("product_preview_modal.php");
	?>
    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <?php
		include("common/scripts.php");
	?>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/vendor-js/datatables.min.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();

	$('#dt-base').DataTable();
	$('#dt-base2').DataTable();

	$('#option').click(function() {
		$('#add_option').show();
		$('#add_variation').hide();
	});
	$('#variaton').click(function() {
		$('#add_variation').show();
		$('#add_option').hide();
	});

	//image upload starts
	$('#change_btn').click(function() {
		$('#product_image').click();
	});
	//image upload ends
  } );

function add_new_value()
{
	
	var htmlz = '<tr><td><input class="form-control form-control-solid" id="validationCustom03" type="text" required=""></td><td><select class="form-control selectpicker col-3" data-style="btn-light btn-light-solid"><option>Rs.</option><option>%</option></select>&nbsp;<select class="form-control selectpicker col-3"  data-style="btn-light btn-light-solid"><option>+</option><option>-</option></select><input class="form-control form-control-solid col-5" style="float:right;" id="validationCustom03" type="number" required=""></td><td><div class="check-list"><label class="radio radio-grey radio-primary"><input type="radio" name="cl" ><span></span></label></div></td><td><i class="ft-trash-2 remove" style="font-size:20px;margin-right:4px;"></i></td></tr>';

    $("#tbody_value").append(htmlz);
	$('.selectpicker').selectpicker('refresh');

	$("body").on("click",".remove",function(){ 
          $(this).parents("tr").remove();
    });
}


function write_option(e){
	$('#li_name').show();
	$('#li_name').html(e);
}
function stock_levelz(){
	$('#stockzz').hide();
	$('#stockzz_qty').show();
}
  </script>
  </body>
</html>

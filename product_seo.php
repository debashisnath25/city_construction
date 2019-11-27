<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Seo Links | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/dropzone.min.css" rel="stylesheet" />
	<link href="css/vendor-css/summernote-bs4.css" rel="stylesheet" />
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<style>
	  .dt-buttons {
	  	padding-bottom:15px;
	  }
	 .dz-error-message {
	 	display:none !important;
	 }
	 .btn-light-solid[aria-expanded="true"]{
	  	background-color: #e4e6f0 !important;
		color: #495057 !important;
		border-color: #7c1ab5 !important;
		outline: 0 !important;
		box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 0 0.2rem rgba(41,73,239,.25) !important;
	  }
	  .btn-light-solid{
	    background-color: #f4f5f9;
		border-color: #f4f5f9;
	  }
     .form-control-lg {
	     border-radius: 4px !important;
	 }
	 .input-group-text {
	 	font-size: 20px !important;
		color: #000000 !important;
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
		  <div class="page-heading" >
              <div class="page-breadcrumb">
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> <a href="products.php">Products </a>> Seo
                </h1>
              </div>
            </div>
            <div>
				<?php
					include("common/product_header.php");
				?>
				
				<div class="row">
					<div class="col-lg-9">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">SEO Information</h5>
							</div>
							<form>
							<div class="card-body">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Page Title</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid theme_border" id="validationCustom03" type="text" placeholder="Enter Page Title" required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Page Description</dt>
									<div class="col-sm-8">
										<textarea class="form-control form-control-solid" placeholder="Enter Page Description" required="" id="validationCustom03"></textarea>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">OG Image</dt>
									<div class="col-sm-8">
										<div class="mr-3 mb-3" style="max-width: 200px;max-height:200px;">
                                        <div class="dropzone dz-clickable" id="mydropzoneSingle">
                                            <div class="dz-message"><i class="ti-plus text-primary font-40"></i>
                                                <div class="mt-3 font-18">Upload Here</div>
                                            </div>
                                        </div>
                                    </div>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Parmalinks</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Parmalinks" required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Google Preview</dt>
									<div class="col-sm-8">
									  <div class="media col-md-12" style="float:left;border:1px solid #ccc;border-radius: .25rem;padding-top:20px;padding-bottom:20px;">
										<span class="position-relative d-inline-block mr-4">
										  <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="130">
										</span>
										<div class="media-body mt-2">
										  <div class="h4 font-20" style="line-height: 1.3;color:#1558d6;">Nike Black Running Sports Shoes
										  </div>
										  <div class="text-muted " style="font-size: 13px;padding-top: 1px;line-height: 1.3;">
											<span style="color: #1558d6;"><i><u>www.wanted7.com > Footwear > Shoes & Footwear</u></i>
											</span>
										  </div>
										  <div class="text-muted font-14 mb-1 " style="color: #878787;font-family: arial,sans-serif;line-height: 1.3;margin-top:4px;">
											<span>Buy shoes online for Men, Women & Kids at best price in India. Shop from the latest collection of shoes available in various brands, colours & sizes @ Wanted7.
											</span>
										  </div>
										</div>
									  </div>
									</div>
								</div>
							
								<div id="blank_div">
								</div>
							  </div>
							
							</form>
						</div>
					  </div>
					  <?php
						include("common/product_sidebar.php");
					  ?>
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
	<script src="js/vendor-js/dropzone.min.js"></script>
	<script src="js/vendor-js/summernote-bs4.min.js"></script>
	<script>
	function add_more()
	{
		var name = $("#label_name").val();
		var value = $("#label_value").val();
		var htmlz = '<div class="form-group mb-4 row"><dt class="col-sm-4" style="padding-top:10px;">'+name+'</dt><div class="col-sm-6"><input class="form-control form-control-solid" id="validationCustom03" type="text" value="'+value+'"></div><div class="col-sm-2"><i class="ft-trash-2 remove" style="font-size:29px;margin-right:4px;"></i></div></div>';

		$("#blank_div").append(htmlz);
		$("#label_name").val('');
		$("#label_value").val('');

		$(".remove").click(function(){
			$(this).parents(".form-group").remove();
		});
	}

	  	$("div#mydropzoneSingle").dropzone({
		url: "./",
		maxFiles: 1,
		maxFilesize: 5, // MB
		addRemoveLinks: !0,
	});
    </script>
  </body>
</html>

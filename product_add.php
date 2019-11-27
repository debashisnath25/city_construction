<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Add Product | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/summernote-bs4.css" rel="stylesheet" />
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<style>
	  .dt-buttons {
	  	padding-bottom:15px;
	  }
     .form-control-lg {
	     border-radius: 4px !important;
	 }
	 .input-group-text {
	 	font-size: 20px !important;
		color: #000000 !important;
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

	.preview-images-zone {
    width: 100%;
    border: 1px solid #ddd;
    min-height: 180px;
    /* display: flex; */
    padding: 5px 5px 0px 5px;
    position: relative;
    overflow:auto;

	}
	.preview-images-zone > .preview-image:first-child {
		height: 185px;
		width: 185px;
		position: relative;
		margin-right: 5px;
	}
	.preview-images-zone > .preview-image {
		height: 90px;
		width: 90px;
		position: relative;
		margin-right: 5px;
		float: left;
		margin-bottom: 5px;
	}
	.preview-images-zone > .preview-image > .image-zone {
		width: 100%;
		height: 100%;
	}
	.preview-images-zone > .preview-image > .image-zone > img {
		width: 100%;
		height: 100%;
	}
	.preview-images-zone > .preview-image > .tools-edit-image {
		position: absolute;
		z-index: 100;
		color: #fff;
		bottom: 0;
		width: 100%;
		text-align: center;
		margin-bottom: 10px;
		display: none;
	}
	.preview-images-zone > .preview-image > .image-cancel {
		font-size: 18px;
		position: absolute;
		top: 0;
		right: 0;
		font-weight: bold;
		margin-right: 10px;
		cursor: pointer;
		display: none;
		z-index: 100;
	}
	.preview-image:hover > .image-zone {
		cursor: move;
		opacity: .5;
	}
	.preview-image:hover > .tools-edit-image,
	.preview-image:hover > .image-cancel {
		display: block;
	}
	.ui-sortable-helper {
		width: 90px !important;
		height: 90px !important;
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
            <div class="page-heading" >
              <div class="page-breadcrumb">
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> <a href="products.php">Products </a>> General
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
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
									<h5 class="box-title" style="color:#fff;">Product Images</h5>
								</div>
								<form>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12" style="padding:3px !important;">
											<div class="mb-3 "  >
												<div class=" " style="border: 2px dashed#1663ff;min-height: auto;background:white;padding: 10px 10px;border-radius: 5px;text-align:center;">
													<label for="image_upload " style="margin-top:25px; " onclick="$('#pro-image').click()">
														<div class="dz-message ">
															<i class="ti-plus text-primary font-26 "  ></i>
															<div class="mt-2 font-15 mb-4" style="color: #0463a7;">UPLOAD IMAGES</div>
														</div>
													</label>
												</div>
												<input type="file" id="pro-image" name="pro-image[]" style="display: none;" class="form-control" >
												
											</div>
										</div>
										<div class="preview-images-zone" style="display:none;">
											
										</div> 
									</div>
								</div>
							</form>
						</div>
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Product Information</h5>
							</div>
							<form>
							<div class="card-body">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Name</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Product Name" required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">SKU</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter SKU" required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Store Key</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Store Key" required="">
									</div>
								</div>
								<hr class="my-4">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Platform Category</dt>
									<div class="col-sm-8">
										<select class="selectpicker form-control" data-style="btn-light btn-light-solid">
											<option selected disabled>Choose Platform Category</option>
											<option>Cosmetics</option>
											<option>Electronics</option>
											<option>Fashion</option>
											<option>Furniture</option>
											<option>Home Utensils</option>
											<option>Jewellery</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Platform Sub-category</dt>
									<div class="col-sm-8">
										<select class="selectpicker form-control" data-style="btn-light btn-light-solid">
											<option selected disabled>Choose Platform Sub-category</option>
											<option>Men Clothing</option>
											<option>Women Clothing</option>
											<option>Mobiles</option>
											<option>Laptops</option>
											<option>Home & Decor</option>
										</select>
									</div>
								</div>
								<hr class="my-4">
								<div class="row">
									<div class="col-md-4 check-list">
										<dt class="mb-3">Store Categories</dt>
										<label class="checkbox checkbox-primary"><input type="checkbox"><span>Wanted7</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox"><span>New Arrivals</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox"><span>Sale Items</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Main/All</span></label>
									</div>
									<div class="col-md-4 check-list">
										<dt class="mb-3">Store Sub-Categories</dt>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Shoes</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Clothings</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Electronics</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Jwellery</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Furnitures</span></label>
									</div>
									<div class="col-md-4 check-list">
										<dt class="mb-3">&nbsp;</dt>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Shoes</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Clothings</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Electronics</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Jwellery</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Furnitures</span></label>
									</div>
							   </div>
								
							    <hr class="my-4">
								<div class="form-group row mb-4">
									<dt class="col-sm-4" style="padding-top:10px;">Selected Sub-Categories</dt>
									<div class="col-sm-8">
										<span class="btn btn-vk btn-sm mb-2"><span class="btn-icon"><i class="fas fa-times"></i>Shoes</span></span>
										<span class="btn btn-vk btn-sm mb-2"><span class="btn-icon"><i class="fas fa-times"></i>Clothings</span></span>
										<span class="btn btn-vk btn-sm mb-2"><span class="btn-icon"><i class="fas fa-times"></i>Electronics</span></span>
										<span class="btn btn-vk btn-sm mb-2"><span class="btn-icon"><i class="fas fa-times"></i>Jwellery</span></span>
										<span class="btn btn-vk btn-sm mb-2"><span class="btn-icon"><i class="fas fa-times"></i>Furnitures</span></span>
									</div>
								</div>


								<hr class="my-4">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Description</dt>
									<div class="col-sm-8">
										<div id="summernote">
										</div>
									</div>
								</div>

								<hr class="my-4">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Additional Features</dt>
									<div class="col-sm-8">
										<div id="summernote2">
										</div>
									</div>
								</div>
								<!-- <button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Save </button>
								<button class="btn btn-default" type="reset"> Clear </button> -->
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
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);
   
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});

var num = 0;
function readImage() {
	 $( ".preview-images-zone" ).show();
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
			var bytes = file.size;
			var file_name = file.name;
			//alert(file_name + bytes);
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
            var picReader = new FileReader();
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
					
				   if (file.type.match('image'))
					{
						var html =  '<div class="preview-image preview-show-' + num + '">' +
								'<div class="image-cancel" data-no="' + num + '">x</div>' +
								'<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
								'<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="">'+file_name+' </br>('+main_size+')</a></div>' +
								'</div>';
					}
					else if(file.type.match('video'))
					{
						var html =  '<div class="preview-image preview-show-' + num + '">' +
									'<div class="image-cancel" data-no="' + num + '">x</div>' +
									'<div class="image-zone"><video style="height:100%;width:100%;" controls><source src="'+ picFile.result +'" type="video/mp4"><source src=""'+ picFile.result +'"" type="video/ogg"></video></div>' +
									'<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="">'+file_name+' </br>('+main_size+')</a></div>' +
									'</div>';
					}
					else
						{
							alert('opps!! File Type Does Not Matched');
						}
					
                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}
    </script>
	<script>
	 $(document).ready(function() {
	  var t = $('#summernote').summernote({
		  height: 150
	  });
	  var tt = $('#summernote2').summernote({
		  height: 150
	  });
	  $("#btn").click(function(){
		  $('div.note-editable').height(150);
	  });
	});

	$("div#mydropzoneSingle").dropzone({
		url: "./",
		maxFiles: 1,
		maxFilesize: 5, // MB
		addRemoveLinks: !0,
	});

	function stock_levelz(){
		$('#stockzz').hide();
		$('#stockzz_qty').show();
	}
    </script>
  </body>
</html>

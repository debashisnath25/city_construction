<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title> General Settings | Wanted 7</title>
	<?php
		include("common/metalinks.php");
	?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="css/vendor-css/dropzone.min.css" rel="stylesheet" />
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-timepicker.css" rel="stylesheet" /><!-- THEME STYLES-->
	<style>
	 .dropzone{
		text-align:center;
		min-height: 242px !important;
	 }
	 .dz-error-message {
	 	display:none !important;
	 }
	 .dz-image {
	 	width:auto;
	 }
	 .dz-message {
	 	margin: 4em 0 !important;
	 }
	 .dz-error-mark{
		display:none !important;
	 }
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
	 .dt-buttons {
		padding-bottom: 15px;
		margin-bottom: -50px;
	  }
	 .mapouter{position:relative;text-align:right;height:300px;width:100%;}
	 .gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}
    </style>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBpO0pxiyuWIcY2SpRyDLPcv2sJT1NW3zc"></script>
	<script>
		var searchInput = 'search_input';

		$(document).ready(function () {
			var autocomplete;
			autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
				types: ['geocode'],
			});
			
			google.maps.event.addListener(autocomplete, 'place_changed', function () {
				var near_place = autocomplete.getPlace();
				document.getElementById('loc_lat').value = near_place.geometry.location.lat();
				document.getElementById('loc_long').value = near_place.geometry.location.lng();
				
				document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
				document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
			});
		});
</script>
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
			<div class="page-heading" style="padding-left:17px;padding-right:17px;">
			  <div class="page-breadcrumb">
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a>  &gt; <a href="dashboard.php">Profile</a> &gt; General Settings
				</h1>
			  </div>
			  <button class="btn btn-primary" data-toggle="modal" data-target="#add_store" style="background-color:#7613a7;border:1px solid #7613a7">
				<span class="btn-icon">
				  <i class="ti-star">
				  </i>
				  Add Another Store
				</span>
			  </button>
			</div>
			<!-- BEGIN: Page content-->
            <div>

			<div class="row"> 
				<!-- settings sidebar start-->
				<?php include ('common/settings_sidebar.php');?>
				<!-- settings sidebar Ends-->
				<div class="col-lg-9">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-fullheight" style="border:1px solid #7c1ab5">
                      <div class="card-body">
					  <button class="btn btn-primary btn-fix" style="float:right;"><span class="btn-icon"><i class="ti-pencil"></i>Edit</span></button>
                        <h5 class="mb-4 articles-list-title">Store 1
                        </h5>
                        <div class="nav flex-column articles-list mb-3">
                          <a class="nav-link d-flex align-items-center" href="#">
                            <b>Biltmore Hotel And Suites Santa Clara Hotel</b>
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            2151 Laurewood Road
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            Santa Clara,CA 95054-2754
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                           United States
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            Phone: 4089887456
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
				  <div class="col-lg-6">
					<div class="card card-fullheight" style="border:1px solid #7c1ab5">
						<div class="card-body">
							<button class="btn btn-primary btn-fix" style="float:right;"><span class="btn-icon"><i class="ti-pencil"></i>Edit</span></button>
							<h5 class="mb-4 articles-list-title">My Store Location</h5>
							<div class="mapouter p-b-30">
								<div class="gmap_canvas">
									<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=delhi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

				 <div class="card " style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Store Logo & Description</h5>
					</div>
					<form>
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<!-- Store Information Starts -->									
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Store Type</dt>
									<div class="col-sm-8">
										<select class="selectpicker form-control  mb-3" data-style="btn-light-solid" tabindex="-98">
											<option disabled>Choose Store Type</option>
											<option>Type 1</option>
											<option selected>Type 2</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Store Name</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store Name" value="Portme">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Store Description</dt>
									<div class="col-sm-8">
										<textarea class="form-control form-control-solid" placeholder="Your Store Description">We are dedicated on line store for your Fashion Dream and her fashion needs. Dress up your Fashion Dream with the latest designs from Fashion Dream. Our dresses are designed to be smooth and comfortable to wear for kids. We offer wide range of Kids dresses, Ethnic Wear, Lehenga Choli, Party Wear Gowns, Frocks and Accessories for Girls and Baby Girls. Our dresses are best suited for Birthdays, Weddings and Festivals like Diwali, Eid, and Christmas. We also customize orders for Bulk requirement. Hope you like our Trendy Kids wear collection and you enjoy shopping with us.</textarea>
									</div>
								</div>
								<!-- Store Information Starts -->
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Store Email</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store Email" value="portme@gmail.com">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Phone number</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store Phone Number" value="9876543210">
									</div>
								</div>
								<!-- Store Information Ends -->
								
								<!-- Open and Close Time Starts -->
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Opening Time</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="open_time" type="text" placeholder="Select Opening time" value="8:00 AM">
									</div>
								</div>
							
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Closing Time</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="close_time" type="text" placeholder="Select Closing time" value="8:00 PM">
									</div>
								</div>
								<!-- Open and Close Time Ends -->
								<!-- Store Category and wanted name starts -->
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Store Category</dt>
									<div class="col-sm-8">
										<select class="selectpicker form-control mb-3" data-style="btn-light-solid" tabindex="-98">
											<option value="" disabled="">Choose Category...</option>
											<option value="Clothing,Shoes &amp; Jewelry" selected>Clothing,Shoes &amp; Jewelry</option>
											<option value="Home, Garden &amp; Tools">Home, Garden &amp; Tools</option>
											<option value="Books, Movies &amp; Games">Books, Movies &amp; Games</option>
											<option value="Beauty, Health &amp; Groceries">Beauty, Health &amp; Groceries</option>
											<option value="Beauty, Health &amp; Groceries">Sports, Toys &amp; Baby</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Wanted7 Store Name</dt>
									<div class="col-sm-8">
										<div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left">@</span><input class="form-control form-control-solid" type="text" placeholder="Username" value="portme"></div>
									</div>
								</div>
								<!-- Store Category and wanted name ends -->
							</div>
							<div class="col-md-4">
								<!-- Store Image and Logo Starts -->
								
								<div class="form-group mb-4">
									<dt style="padding-top:7px;">Store's Logo</dt>
									<div class="col-sm-10" style="padding:0px;">
										<div class="dropzone dz-clickable" id="mydropzoneSingle" >
											<div class="dz-message"><i class="ti-import text-primary font-40"></i>
												<div class="mt-3 font-15">Upload Image</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-4">
									<dt style="padding-top:7px;">Store's profile picture / video</dt>
									<div class="col-sm-10" style="padding:0px;">
										<div class="dropzone dz-clickable" id="mydropzoneSingle" >
											<div class="dz-message"><i class="ti-import text-primary font-40"></i>
												<div class="mt-3 font-15">Upload Image/Video</div>
											</div>
										</div>
									</div>
								</div>
							
								<!-- <div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Store's profile picture / video</dt>
									<div class="col-sm-8">
										<input type="file" multiple class="form-control form-control-solid">
									</div>
								</div> -->
								<!-- Store Image and Logo Ends -->
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="form-group">
							<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Update </button>
							<button class="btn btn-default" type="reset"> Clear </button>
                        </div>
					</div>
					</form>
				</div>
				
				<div class="card " style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Store Address</h5>
					</div>
					<form>
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Street Address</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store Street Address" >
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">City</dt>
									<div class="col-sm-8">
										<select class="selectpicker form-control mb-3" data-style="btn-light-solid" tabindex="-98">
											<option disabled="" selected="">Select city</option>
											<option>Ahmedabad</option>
											<option>Bengaluru</option>
											<option>Chandigarh</option>
											<option>Chennai</option>
											<option>Coimbatore</option>
											<option>Delhi</option>
											<option>Goa</option>
											<option>Gurugram</option>
											<option>Hyderabad</option>
											<option>Indore</option>
											<option>Jaipur</option>
											<option>Kochi</option>
											<option>Kolkata</option>
											<option>Manila</option>
											<option>Mumbai</option>
											<option>Nagpur</option>
											<option>Noida</option>
											<option>Pune</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">State/Province/Region</dt>
									<div class="col-sm-8">
										<select class="selectpicker form-control mb-3" data-style="btn-light-solid" tabindex="-98">
											<option disabled="" selected="">Select State</option>
											<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
											<option value="Andhra Pradesh">Andhra Pradesh</option>
											<option value="Arunachal Pradesh">Arunachal Pradesh</option>
											<option value="Assam">Assam</option>
											<option value="Bihar">Bihar</option>
											<option value="Chandigarh">Chandigarh</option>
											<option value="Chhattisgarh">Chhattisgarh</option>
											<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
											<option value="Daman and Diu">Daman and Diu</option>
											<option value="Delhi">Delhi</option>
											<option value="Goa">Goa</option>
											<option value="Gujarat">Gujarat</option>
											<option value="Haryana">Haryana</option>
											<option value="Himachal Pradesh">Himachal Pradesh</option>
											<option value="Jammu and Kashmir">Jammu and Kashmir</option>
											<option value="Jharkhand">Jharkhand</option>
											<option value="Karnataka">Karnataka</option>
											<option value="Kerala">Kerala</option>
											<option value="Lakshadweep">Lakshadweep</option>
											<option value="Madhya Pradesh">Madhya Pradesh</option>
											<option value="Maharashtra">Maharashtra</option>
											<option value="Manipur">Manipur</option>
											<option value="Meghalaya">Meghalaya</option>
											<option value="Mizoram">Mizoram</option>
											<option value="Nagaland">Nagaland</option>
											<option value="Orissa">Orissa</option>
											<option value="Pondicherry">Pondicherry</option>
											<option value="Punjab">Punjab</option>
											<option value="Rajasthan">Rajasthan</option>
											<option value="Sikkim">Sikkim</option>
											<option value="Tamil Nadu">Tamil Nadu</option>
											<option value="Tripura">Tripura</option>
											<option value="Uttaranchal">Uttaranchal</option>
											<option value="Uttar Pradesh">Uttar Pradesh</option>
											<option value="West Bengal">West Bengal</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Zip/Postal code</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Postal Code">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Country</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store Country" value="India" >
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="form-group">
							<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Update </button>
							<button class="btn btn-default" type="reset"> Clear </button>
                        </div>
					</div>
					</form>
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
    <?php
		include("common/extra.php");
    ?>
    <?php
		include("common/scripts.php");
	?>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/vendor-js/dropzone.min.js"></script>
	<script src="js/vendor-js/bootstrap-timepicker.js"></script><!-- CORE SCRIPTS-->
	<script>
	 $(function() {
            var i = {
                up: 'ti-angle-up',
                down: 'ti-angle-down'
            };
            $('#open_time').timepicker({
                icons: i,
            });
			$('#close_time').timepicker({
                icons: i,
            });
        });
	$("div#mydropzoneSingle").dropzone({
		url: "./",
		maxFiles: 1,
		maxFilesize: 5, // MB
		addRemoveLinks: !0,
	});
    </script>
  </body>
</html>

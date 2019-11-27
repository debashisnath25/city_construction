<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title> Delivery Location | Wanted 7</title>
	<?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/dropzone.min.css" rel="stylesheet" />
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-timepicker.css" rel="stylesheet" /><!-- THEME STYLES-->
	<style>.faq-tabs .nav-link {
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
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a> &gt; <a href="dashboard.php">Profile</a> &gt; Delivery Location
				</h1>
			  </div>
			  <button class="btn btn-primary" data-toggle="modal" data-target="#add_store" style="background-color:#7613a7;border:1px solid #7613a7">
				<span class="btn-icon">
				  <i class="ti-star">
				  </i>
				  Add Another Location
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
                        <h5 class="mb-4 articles-list-title">My Delivery Pickup Location
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
							<h5 class="mb-4 articles-list-title">My Delivery Pickup Location</h5>
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
						<h5 class="box-title" style="color:#fff;">Delivery Pickup Address</h5>
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

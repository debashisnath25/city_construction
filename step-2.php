<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Step 2 | Wanted 7  
    </title>
	<?php
		include ('common/signup_metalinks.php');
	?>
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
	<style>
	.cs_label {
	    font-size: 12px !important;
		font-weight: 800 !important;
	}
	.form-g-grey, .select2-selection, .select2-selection--multiple{
        background-color:#e9e9e9 !important;
    }
	.form-g-white{
		background-color:#ffffff !important;
		color: #000000;
	}
	.select2-selection__choice{
		background-color: white !important;
	}
	.req{
		color:red;
		font-size: 15px;
	}
	.bold{
		color: #000000;
	}
	</style>
  </head>
  <body class="fixed-header menu-pin menu-behind">
    <div class="page-container" >
      <div class="page-content-wrapper " >
        <div class="content col-md-12">
          <div class="col-md-3 " style="float:left;">
            <div class="card card-transparent">
              <div class="inline">
                <img src="images/logo.png" alt="Avatar" data-src="images/logo.png" data-src-retina="images/logo.png" style="width:50%">
				<h3 style="font-size:22px !important;font-weight:bold;">Complete Your Registration</h3>
				<h3 style="font-size:20px !important;font-weight:bold;color:#1dbb99;">Step 2 of 4</h3>
				<div class="progress">
					<div class="progress-bar progress-bar-success" style="width:50%"></div>
				</div>
				 <p><b>Congratulations!</b> We see You are seller Type 1, So you have a shop/store/business in a main market where customer can visit you easily.Customers can buy directly from your store as always or they can buy online through our platform. You handle offline sales on your own. We handle Online Sales , Delivery and Payment for You!  </b>
                </p>
              </div>
            </div>
          </div>
          <div class=" container-fluid container-fixed-lg col-md-9" >
            <div class="row">
              <div class="col-md-12" >
                <div class="card card-default" style="height:100%;box-shadow: 0 4px 10px rgba(0,0,0,0.08), 0 0 0 rgba(0,0,0,0.08) inset;border-radius:5px;">
                  <div class="card-header ">
					<h3 style="font-size:22px;font-weight:bold;">Welcome to <span style="color: #8053CB">Wanted7</span> , Mr. Dheeraj Sood !</h3>
					
                  </div>
                  <div class="card-body">
                    <form role="form">
						 <div class="form-group form-group-default form-g-grey ">
							<label>What's Your <b class="bold">Store Name</b>
								 <a href="#" data-toggle="tooltip" title="It is not important that your store name and registered business name are the same."><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a>
							</label>
							<input type="text" class="form-control" required>
						</div>

						 <div class="form-group form-group-default form-g-grey ">
							<label>Store <b class="bold">Address</b>
								 <a href="#" data-toggle="tooltip" title="This Address will be used for pickup of goods from you.If your pickup address is different don't worry, you can change it in the Dashboard later."><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a>
							</label>
							<input type="text" class="form-control" required>
						</div>

						<div class="form-group form-group-default form-g-grey input-group ">
							<div class="form-input-group">
								<label>Let's <b class="bold">Locate Your Store Address</b> In Google Map
									<a href="#" data-toggle="tooltip" title="This is very important and will help your Customers Locate You. Kindly complete this step on a computer inside your store to get the perfect location for your customer to find, Drop the pin to Nearest to your Store's Location"><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a>
								</label>
								<input type="text" class="form-control " id="search_input" name="username" required="" >
							</div>
							<div class="input-group-append ">
								<span class="input-group-text" onclick="view_map();">View Map
								</span>
							</div>
						</div>
						<div class="row" id="map_dikhao" style="margin-bottom:10px;display:none;">
							<div class ="col-md-12">
								<div class="mapouter p-b-30"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=delhi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.org">google map embed code cool</a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}</style></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group form-group-default form-g-grey bootstrap-timepicker">
									<label>Store <b class="bold">Opening Time</b>
									</label>
									<input id="" type="text" class="form-control">
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group form-group-default form-g-grey bootstrap-timepicker">
									<label>Store <b class="bold">Closing Time</b></label>
									<input id="timepicker" type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group form-group-default  form-group-default-select2">
							<label >What Is Your <b class="bold">Category</b>
								<a href="#" data-toggle="tooltip" title="Please choose this wisely as your store listing on our Application will be defined by the Categoty you Choose, it cannot be changed later."><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
							</label>
							<select id="multi" class="full-width select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" >
								<option value="" disabled>Choose Category...</option>
								<option value="Clothing,Shoes & Jewellery">Clothing,Shoes & Jewellery</option>
								<option value="Home, Garden & Tools">Home, Garden & Tools</option>
								<option value="Books, Movies & Games">Books, Movies & Games</option>
								<option value="Beauty, Health & Groceries">Beauty, Health & Groceries</option>
								<option value="Beauty, Health & Groceries">Sports, Toys & Baby</option>
							</select>
						</div>
						<div class="form-group form-group-default input-group ">
							<div class="input-group-append form-g-white">
								<span class="input-group-text form-g-white"><i class="fa fa-at" aria-hidden="true"></i>
								</span>
							</div>
							<div class="form-input-group form-g-grey">
								<label>Wanted7 <b class="bold">Store Name</b>
									<a href="#" data-toggle="tooltip" title="Please Choose a name Wisely. Your Customers will be able to find you easily using your Wanted7 Store Name"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
								</label>
								<input type="text" class="form-control " name="username" required="" >
							</div>
						</div>
				
						<br>
						<a class="btn btn-warning btn-cons" style="color: white;float:left;" href="step-1.php">BACK</a>
						<a class="btn btn-success btn-cons" style="color: white;float:right;" href="step-3.php">NEXT</a>
					</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" container-fluid  container-fixed-lg footer" style="text-align: center;">
          <div class="copyright sm-text-center">
            <p class="small no-margin sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2019
              </span>
              <span class="font-montserrat">Wanted7
              </span>.
              <span class="hint-text">All rights reserved. 
              </span>
              <span class="sm-block">
                <a href="#" class="m-l-10 m-r-10">Terms of use
                </a> 
                <span class="muted">|
                </span> 
                <a href="#" class="m-l-10">Privacy Policy
                </a>
              </span>
            </p>
            <div class="clearfix">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
	<script>
		$(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip();
		});

		function view_map()
		{
			$("#map_dikhao").show();
		}
	</script>
		<?php
		include ('common/signup_footer.php');
	?>
  </body>
</html>

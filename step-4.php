<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Step 4 | Wanted 7  
    </title>
	<?php
		include ('common/signup_metalinks.php');
	?>
	<style>
	.cs_card {
		background-color: #F0F0F0;
		border-radius: 10px;
		height: 94%;
	}
	.cs_card:hover, .cs_active{
		border: 1px solid #8053CB !important;
	}
	.hd_card {
		border-radius: 10px;
		border:1px solid #CCC;
	}
	.cs_span {
		margin-top: 11px !important;
		font-weight: 500;
	}
	.none{
		display:none;
	}
	</style>
  </head>
  <body class="fixed-header menu-pin menu-behind">
    <div class="page-container" >
      <div class="page-content-wrapper " >
        <div class="content col-md-12"  >
          <div class="col-md-3 " style="float:left;">
            <div class="card card-transparent">
              <div class="inline">
                <img src="images/logo.png" alt="Avatar" data-src="images/logo.png" data-src-retina="images/logo.png" style="width:50%">
				<h3 style="font-size:22px !important;font-weight:bold;">Complete Your Registration</h3>
				<h3 style="font-size:20px !important;font-weight:bold;color:#1dbb99;">Step 4 of 4</h3>
                <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width:100%"></div>
                </div>
				<p>Choose from a List of Wanted7 Services, They're Free in Beta Mode!</p>
              </div>
            </div>
          </div>
          <div class=" container-fluid container-fixed-lg col-md-9" >
            <div class="row">
              <div class="col-md-12" >
                <div class="card card-default" style="height:100%;box-shadow: 0 4px 10px rgba(0,0,0,0.08), 0 0 0 rgba(0,0,0,0.08) inset;border-radius:5px;">
                  <div class="card-header ">
					 <h3 style="font-size:22px;font-weight:bold;">Welcome to <span style="color: #8053CB">Wanted7</span> , Mr. Dheeraj Sood From Dummy Store!</h3>
                  </div>
				  <div class="card-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="card card-default cs_card" id="first_card" onclick="trigger_one('first');">
								<div class="card-header" style="text-align:center;">
									<h5 style="color: #8053CB;" class="bold">Wanted Express Delivery Service</h5>
									<div class="clearfix"></div>
								</div>
								<div class="card-body text-center">
									<p>Select this box you are ready to ship your products in a few hours to your Customers in Delhi/Ncr.<p>
									
								</div>
								<div class="card-footer text-center none"  id="first">
									<div class="user-pic">
										<img alt="Avatar" width="40" height="40" src="images/tick.png">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-default cs_card" id="second_card" onclick="trigger_one('second');">
								<div class="card-header" style="text-align:center;">
									<h5 style="color: #8053CB;" class="bold">Wanted Support</h5>
									<div class="clearfix"></div>
								</div>
								<div class="card-body text-center">
									<p>Select this box you are ready to Take some text.<p>
								</div>
								<div class="card-footer text-center none"  id="second">
									<div class="user-pic">
										<img alt="Avatar" width="40" height="40" src="images/tick.png">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-default cs_card" id="third_card" onclick="trigger_one('third');">
								<div class="card-header" style="text-align:center;">
									<h5 style="color: #8053CB;" class="bold">Wanted Assurance Program</h5>
									<div class="clearfix"></div>
								</div>
								<div class="card-body text-center">
									<p>Check this box you are ready to Provide your Customers with some text.<p>
								</div>
								<div class="card-footer text-center none" id="third">
									<div class="user-pic">
										<img alt="Avatar" width="40" height="40" src="images/tick.png">
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-12" style="display:none;" id="extra_div_3">
							<a class="btn btn-warning btn-cons" style="color: white;float:left;" href="step-3.php">BACK</a>
							<a class="btn btn-success btn-cons" style="color: white;float:right;" href="dashboard.php">NEXT</a>
						</div>
						
					</div>
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
	<?php
		include ('common/signup_footer.php');
	?>
	<script>
	function trigger_one(val){
		$("#extra_div_3").show();
		if(val == 'first'){
			if($("#first_card").hasClass("cs_active") == true){
				$("#first_card").removeClass("cs_active");
				$("#first").hide();
			}else{
				$("#first_card").addClass("cs_active");
				$("#first").show();
			}
		}
		else if(val == 'second'){
			if($("#second_card").hasClass("cs_active") == true){
				$("#second_card").removeClass("cs_active");
				$("#second").hide();
			}else{
				$("#second_card").addClass("cs_active");
				$("#second").show();
			}
		}
		else if(val == 'third'){
			if($("#third_card").hasClass("cs_active") == true){
				$("#third_card").removeClass("cs_active");
				$("#third").hide();
			}else{
				$("#third_card").addClass("cs_active");
				$("#third").show();
			}
		}
	}
	</script>
  </body>
</html>

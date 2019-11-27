<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Step 1 | Wanted 7  
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
				<h3 style="font-size:20px !important;font-weight:bold;color:#1dbb99;">Step 1 of 4</h3>
                <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width:25%"></div>
                </div>
				<p>Now that you have a Username and Password, you can complete your store at any time. Let's proceed to help you decide what kind of a seller are you?</p>
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
					<div class="row">
						<div class="col-lg-6">
							<div class="card card-default cs_card" id="first_card" onclick="trigger_one('first');">
								<div class="card-header" style="text-align:center;">
									<div class="user-pic">
										<img alt="Avatar" width="150" height="150" src="images/1.png">
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="card-body text-center">
									<h5 class="semi-bold no-margin"> I have Retail Store only. </h5>
									<h5 class="semi-bold no-margin"> (TYPE 1) </h5>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card card-default cs_card" id="second_card" onclick="trigger_one('second');">
								<div class="card-header" style="text-align:center;">
									<div class="user-pic">
										<img alt="Avatar" width="150" height="150" src="images/2.png">
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="card-body text-center">
									<h5 class="semi-bold no-margin"> I sell Online only. </h5>
									<h5 class="semi-bold no-margin"> (TYPE 2) </h5>
								</div>
							</div>
						</div>
						<div class="col-lg-12" style="display:none;" id="extra_div">
							<div class="card card-default hd_card">
								<div class="card-header">
									<h3 style="font-size:22px;font-weight:bold;">Things to Consider</h3>
								</div>
								<div class="card-body">
									<div class="alert alert-success">You have a shop in markets like Lajpat Nagar, Greater Kailash, Connaught Place, Sarojini Nagar, Kamla Nagar. Pitampura Netaji Subhash Place Market etc.</div>
									<div class="alert alert-success">You will ship goods from your shop/ registered shipping address.</div>
									<div class="alert alert-success">Customers can easily visit your stores.</div>
									<div class="alert alert-success">You have a valid GST Registration Certificate. PAN Card, Bank Account and other ID documents.</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12" style="display:none;" id="extra_div_2">
							<div class="card card-default hd_card">
								<div class="card-header">
									<h3 style="font-size:22px;font-weight:bold;">Things to Consider</h3>
								</div>
								<div class="card-body">
									<div class="alert alert-success">You have a Business which sells products but you do not have any commercial shop in any physical location. You will Only Sell Goods Online.</div>
									<div class="alert alert-success">You will Ship Goods from your Office Location/Registered Address Location.</div>
									<div class="alert alert-success">Customers Cannot Visit you to see Products You're Selling</div>
									<div class="alert alert-success">You have a valid GST Registration Certificate, PAN Card, Bank Account and Other ID Documents.</div>
								</div>
							</div>
							
						</div>
						<div class="col-lg-12" style="display:none;text-align:right;" id="extra_div_3">
							<a class="btn btn-success btn-cons" style="color: white;" href="step-2.php">NEXT</a>
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
			$("#first_card").addClass("cs_active");
			$("#second_card").removeClass("cs_active");
			$("#third_card").removeClass("cs_active");
			$("#extra_div").show();
			$("#extra_div_2").hide();
		}
		else if(val == 'second'){
			$("#second_card").addClass("cs_active");
			$("#first_card").removeClass("cs_active");
			$("#third_card").removeClass("cs_active");
			$("#extra_div").hide();
			$("#extra_div_2").show();
		}
		else if(val == 'third'){
			$("#third_card").addClass("cs_active");
			$("#first_card").removeClass("cs_active");
			$("#second_card").removeClass("cs_active");
			$("#extra_div").hide();
			$("#extra_div_2").hide();
		}
	}
	</script>
  </body>
</html>

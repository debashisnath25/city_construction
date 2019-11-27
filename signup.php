<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title> Signup | Wanted 7 </title>
	<?php
		include ('common/signup_metalinks.php');
	?>
    <style>
      .form-g-grey, .select2-selection, .select2-selection--multiple{
        background:#e9e9e9 !important;
      }
	  .login-wrapper{
	  	background-color:#220132;
	  }
	  .forget:hover{
	  	text-decoration: underline;
	  }
    </style>
  </head>
  <body class="fixed-header menu-pin menu-behind">
    <div class="login-wrapper" >
      <div class="bg-pic" style="width:50% !important;">

        <div class="text-white p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <h2 class="semi-bold text-white" >
            Sell to crores of customers right from your doorstep!
          </h2>

          <h5 class="semi-bold text-white p-t-20" style="font-size:15px;">All you need to sell on wanted7 is</h5>

          <div class="col-lg-12 p-t-50 p-b-50">
                <div class="row">
                  <div class="col-lg-4 text-center" style="border-right:1px solid #fff;">
                    <img src="images/gst.png" alt="logo" data-src="images/gst.png" data-src-retina="images/gst.png" height="50">
                    <p class="p-t-35">GSTIN Number</p>
                  </div>
                  <div class="col-lg-4 text-center" style="border-right:1px solid #fff;">
                    <img src="images/bank_account.png" alt="logo" data-src="images/bank_account.png" data-src-retina="images/bank_account.png" height="50">
                    <p class="p-t-35">Bank Account</p>
                  </div>
                  <div class="col-lg-4 text-center">
                    <img src="images/prodcuts.png" alt="logo" data-src="images/prodcuts.png" data-src-retina="images/prodcuts.png" height="50">
                    <p class="p-t-35">Products To Sell</p>
                  </div>
                </div>
          </div>

          <div class="col-lg-12 p-t-20" style="border-top:1px solid #fff;border-bottom:1px solid #fff;">
            <h5 class="semi-bold text-white"> Let's Start by Registering and Verifying You! </h5>
            <p class="p-t-10 p-b-20" style="font-size:14px;">Start by creating your own store on Wanted7 and join a new revolutionary way of selling online!</p>
          </div>
        </div>
      </div>

      <div class="login-container bg-white">

        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <div class="col-md-12 text-center">
            <img src="images/logo.png" alt="logo" data-src="images/logo.png" data-src-retina="images/logo.png" height="150">
          </div>
          <h2 class="p-t-5 text-center semi-bold">Create your own store</h2>
          <form id="form-login" class="p-t-15" role="form" method="POST" action="step-1.php">
            <div class="form-group form-group-default form-g-grey">
              <label>Email
              </label>
              <div class="controls">
                <input type="text" name="username" placeholder="Email" class="form-control" required>
              </div>
            </div>


            <div class="form-group form-group-default input-group form-g-grey">
              <div class="form-input-group">
                <label>Phone
                </label>
                <input type="text" placeholder="Phone"class="form-control">
              </div>
              <div class="input-group-append">
                <a href="" class="input-group-text" style="background:#fafafa !important"> Send OTP </a>
              </div>
            </div>
			
			<div class="row">
				<div class="form-group form-group-default form-group-default-select2 form-g-grey col-md-2">
					<label class="">Salutation</label>
					<select class="full-width form-g-grey" data-placeholder="Select Salutation" data-init-plugin="select2">
						<option value="Mr.">Mr.</option>
						<option value="Mrs.">Mrs.</option>
						<option value="Miss">Miss</option>
					</select>
				</div>
				<div class="form-group form-group-default form-g-grey col-md-10">
				  <label>Full Name</label>
				  <div class="controls">
					<input type="text" name="username" placeholder="Full Name" class="form-control" required>
				  </div>
				</div>
			</div>
			
			

            <div class="form-group form-group-default form-g-grey">
              <label>Set Password
              </label>
              <div class="controls">
                <input type="password" class="form-control" name="password" placeholder="Set Password" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 no-padding sm-p-l-10">
                <button class="btn btn-primary btn-cons m-t-10" type="submit">Create Seller Account
                </button>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-end">
                Already have account ?  &nbsp; <a href="login.php" class="semi-bold forget" style="color:#6d5eac;font-style:italic;">Signin
                </a>
              </div>
			  <div class="col-md-12 m-t-5">
                <span>By continuing, you agree to the <a href="#" class="semi-bold forget" style="color:#6d5eac;font-style:italic;">Terms of Service</a> and <a href="#" class="semi-bold forget" style="color:#6d5eac;font-style:italic;">Privacy Policy</a></span>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>
	<?php
		include ('common/signup_footer.php');
	?>
    <script>
      $(function(){
        $('#form-login').validate()
        }
      )
    </script>
  </body>
</html>

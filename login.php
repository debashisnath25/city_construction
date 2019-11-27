<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title> Login | Wanted 7 </title>
	<?php
		include ('common/signup_metalinks.php');
	?>
    <style>
      .form-g-grey{
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
            <h5 class="semi-bold text-white"> How will this information be used? </h5>
            <p class="p-t-10" style="font-size:14px;">You can use your email address or mobile number as 'Username' to login to your wanted7 Seller Account.</p>
            <p class="p-b-20" style="font-size:14px;"> Please note, the 'Username' and 'Password' used here are only to access your wanted7 Seller Account and can’t be used on wanted7.com shopping destination.</p>
          </div>
        </div>
      </div>

      <div class="login-container bg-white">

        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <div class="col-md-12 text-center">
            <img src="images/logo.png" alt="logo" data-src="images/logo.png" data-src-retina="images/logo.png" height="150">
          </div>
          <h2 class="p-t-5 text-center semi-bold">Signin into your store</h2>
          <form autocomplete="off" id="form-login" class="p-t-15" role="form" action="">
            <div class="form-group form-group-default form-g-grey">
              <label>Email
              </label>
              <div class="controls">
                <input autocomplete="false" type="text" name="username" placeholder="Email" class="form-control" required>
              </div>
            </div>

            <div class="form-group form-group-default form-g-grey">
              <label>Password
              </label>
              <div class="controls">
                <input autocomplete="false" type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 no-padding sm-p-l-10">
                <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in
                </button>
              </div>
              <div class="col-md-9 d-flex align-items-center justify-content-end">
                <a href="#" class="semi-bold forget" style="font-style:italic;"> Forgot password</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="signup.php" class="semi-bold forget" style="font-style:italic;"> Create your Own Store Now
                </a>
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Dashboard | Wanted 7</title>
	<?php
		include("common/metalinks.php");
	?>
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
				<h1 class="page-title">Dashboard
				</h1>
			  </div>
			</div>
			<!-- BEGIN: Page content-->
            <!-- BEGIN: Page heading-->
            <div class="page-heading" style="padding-left:17px;">
              <div class="page-breadcrumb">
                <h1 class="page-title">Greetings, Mr.Dheeraj Sood!
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
			<div class="col-lg-12">
				<div>
					<div class="media mb-4 p-3 bg-white shadow"><i class="ti-star mr-3 font-30 text-warning" style="line-height: 1"></i>
						<div class="media-body">
							<div class="flexbox mb-2">
								<div class="h4 mb-0">Your store is limited to Free plan features</div>
								<div class="font-16">
								<button class="btn btn-primary btn-rounded " data-toggle="modal" data-target="#new-question-dialog" style="background-color:#37ba32;border:1px solid #37ba32">
								  <span class="btn-icon">
									<i class="ti-star">
									</i>
									Unlock More Features Now
								  </span>
								</button>
								</div>
							</div>
							<div class="text-muted font-13" style="word-break:break-word">Upgrade your account to unlock new ways to sell, promote, and manage your store.</div>
						</div>
					</div>
				</div>
			</div>
			 <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="box-title mb-2">Manage your store on the go with Wanted7 mobile app
                    </h5>
                    <div class="text-muted mb-4 font-13">Get Wanted7 mobile app for Android, iPhone, or iPad and manage your store wherever you are. Fulfill orders, update your product catalog, and receive instant sale notifications on your phone or tablet.
                    </div>
					<button class="btn btn-primary clr" style="display: inline-block;width: auto;min-width: 260px;margin-right: 8px;margin-bottom: 0;">Get App</button>
					<a class="" data-dismiss="alert" aria-label="Close" style="position: absolute;padding: .9rem 1.4rem;color: inherit;font-size:12px;font-weight:bold;float:right;color:#7c1ab5;cursor:pointer">Dismiss</a>
                  </div>
                </div>
				
              </div>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="box-title mb-2">Store Setup Completed
                    </h5>
                    <div class="text-muted mb-4 font-13">Congratulations, your store is now ready for its first sale.
                    </div>
                    <div class="row mb-4">
                      <div class=" col-lg-4 col-xs-12 col-sm-12" style="padding-top:10px;">
                        <a href="profile_general_settings.php">
					<div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc;">
						
                          <i class="ti-flag-alt-2 align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>
                          <div class="media-body">
						  <span class="text-muted" href="#" style="float:right;"><i class="fa fa-check-circle" style="color:green;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold">Your Store Type
                            </h6>
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
						  
                        </div></a>
						
                      </div>
                      <div class=" col-lg-4 col-xs-12 col-sm-12 " style="padding-top:10px;">
                        <a href="profile_general_settings.php"><div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc;">
                          <i class="ti-package align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>
                          <div class="media-body">
						  <span class="text-muted"  style="float:right;"><i class="fa fa-check-circle" style="color:green;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold">Create Your Store
                            </h6>
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
                        </div></a>
                      </div>
                      <div class=" col-lg-4 col-xs-12 col-sm-12 " style="padding-top:10px;">
					  	<a href="profile_documents.php">
                        <div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc;">
                          <i class="ti-envelope align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>
                          <div class="media-body">
						  <span class="text-muted"  style="float:right;"><i class="fa fa-exclamation-circle" style="color:red;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold">Document Upload & Verification
                            </h6>
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
                        </div></a>
                      </div>
                      <div class=" col-lg-4 col-xs-12 col-sm-12 " style="padding-top:10px;">
					   <a href="profile_mail_settings.php">
                        <div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc !important;">
                          <i class="ti-basketball align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>

                          <div class="media-body">
						  <span class="text-muted"  style="float:right;"><i class="fa fa-check-circle" style="color:green;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold" >Add Ons
                            </h6>
							
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
                        </div></a>
                      </div>
                      <div class=" col-lg-4 col-xs-12 col-sm-12 " style="padding-top:10px;">
					  <a href="profile_delivery_location.php">
                        <div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc;">
                          <i class="ti-truck align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>
                          <div class="media-body">
						  <span class="text-muted"  style="float:right;"><i class="fa fa-exclamation-circle" style="color:red;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold">Set Up Shipping or Pickup
                            </h6>
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
                        </div></a>
                      </div>
                      <div class=" col-lg-4 col-xs-12 col-sm-12 " style="padding-top:10px;">
					  	<a href="profile_payment_settings.php">
                        <div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc;">
                          <i class="ti-wallet align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>
                          <div class="media-body">
						  <span class="text-muted"  style="float:right;"><i class="fa fa-exclamation-circle" style="color:red;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold">Payment Setup
                            </h6>
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
                        </div></a>
                      </div>

					  <div class=" col-lg-12 col-xs-12 col-sm-12" style="padding-top:10px;">
					    <button class="btn btn-primary clr pull-right" style="display: inline-block;width: auto;min-width: 260px;margin-bottom: 0;">Submit My Application</button>
					  </div>

                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-lg-12">
                <div class="card"  style="background:#fafafa;border:1px solid #7c1ab5;">
                  <div class="card-body">
                    <h5 class="box-title mb-2">Congratulations, you have succesfully submitted your application.
                    </h5>
                    <div class="text-muted mb-4 font-13">Your application is under review.
                    </div>
                    <div class="row mb-4">
                      <div class=" col-lg-4 col-xs-12 col-sm-12" style="padding-top:10px;">
                        <a href="#">
					<div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc;">
						
                          <i class="ti-flag-alt-2 align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>
                          <div class="media-body">
						  <span class="text-muted" href="#" style="float:right;"><i class="fa fa-check-circle" style="color:#a5e0a3;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold">Your Store Type
                            </h6>
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
						  
                        </div></a>
						
                      </div>
                      <div class=" col-lg-4 col-xs-12 col-sm-12 " style="padding-top:10px;">
                        <a href="#"><div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc;">
                          <i class="ti-package align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>
                          <div class="media-body">
						  <span class="text-muted"  style="float:right;"><i class="fa fa-check-circle" style="color:#a5e0a3;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold">Create Your Store
                            </h6>
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
                        </div></a>
                      </div>
                      <div class=" col-lg-4 col-xs-12 col-sm-12 " style="padding-top:10px;">
					  	<a href="#">
                        <div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc;">
                          <i class="ti-envelope align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>
                          <div class="media-body">
						  <span class="text-muted"  style="float:right;"><i class="fa fa-check-circle" style="color:#a5e0a3;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold">Document Upload & Verification
                            </h6>
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
                        </div></a>
                      </div>
                      <div class=" col-lg-4 col-xs-12 col-sm-12 " style="padding-top:10px;">
					   <a href="#">
                        <div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc !important;">
                          <i class="ti-basketball align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>

                          <div class="media-body">
						  <span class="text-muted"  style="float:right;"><i class="fa fa-check-circle" style="color:#a5e0a3;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold" >Add Ons
                            </h6>
							
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
                        </div></a>
                      </div>
                      <div class=" col-lg-4 col-xs-12 col-sm-12 " style="padding-top:10px;">
					  <a href="#">
                        <div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc;">
                          <i class="ti-truck align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>
                          <div class="media-body">
						  <span class="text-muted"  style="float:right;"><i class="fa fa-check-circle" style="color:#a5e0a3;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold">Set Up Shipping or Pickup
                            </h6>
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
                        </div></a>
                      </div>
                      <div class=" col-lg-4 col-xs-12 col-sm-12 " style="padding-top:10px;">
					  	<a href="#">
                        <div class="media p-4 align-items-center" style=" border-radius: 8px;border:1px solid #ccc;">
                          <i class="ti-wallet align-self-center mr-4 font-30" style="color:#a5e0a3;">
                          </i>
                          <div class="media-body">
						  <span class="text-muted"  style="float:right;"><i class="fa fa-check-circle" style="color:#a5e0a3;font-size:35px;"></i></span>
                            <h6 class="mb-0x font-weight-bold">Payment Setup
                            </h6>
                            <div class="text-muted font-13" style="color:#a5e0a3 !important;">Get Start
                            </div>
                          </div>
                        </div></a>
                      </div>
					
					  <div class=" col-lg-12 col-xs-12 col-sm-12" style="padding-top:10px;">
					    <a href="store_type.php" class="btn btn-success pull-right" style="display: inline-block;width: auto;min-width: 260px;margin-bottom: 0;">View My Application</a>
					  </div>
                    </div>


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
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Step 3 | Wanted 7  
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
	.form-g-grey{
        background-color:#e9e9e9 !important;
    }
	.bold{
		color: #000000;
	}
	.bold_btn{
		color: white;
	}
	.uline{
		color:black;
		float:right;
		font-size:15px;
		margin-right:10px;
		margin-top:7px;
	}
	.uline:hover{
		color:black;
		text-decoration: underline;
	}
	.text-big{
		height:50% !important;
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
				<h3 style="font-size:20px !important;font-weight:bold;color:#1dbb99;">Step 3 of 4</h3>
                <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width:75%"></div>
                </div>
				<p>Let's complete the Documentation for Verification</p>
              </div>
            </div>
          </div>
          <div class=" container-fluid container-fixed-lg col-md-9" >
            <div class="row">
              <div class="col-md-12" >
                <div class="card card-default" style="height:100%;box-shadow: 0 4px 10px rgba(0,0,0,0.08), 0 0 0 rgba(0,0,0,0.08) inset;border-radius:5px;">
                  <div class="card-header ">
					 <h3 style="font-size:22px;font-weight:bold;">Welcome to <span style="color: #8053CB">Wanted7</span> , Mr. Dheeraj Sood from Dummy Store!</h3>
                  </div>
				  <div class="card-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="card card-default cs_card" id="first_card" onclick="trigger_one('first');">
								<div class="card-header" style="text-align:center;">
									<div class="user-pic">
										<img alt="Avatar" width="100" height="100" src="images/4.png">
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="card-body text-center">
									<h5 class="semi-bold no-margin"> Individual/Propriertorship </h5>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-default cs_card" id="second_card" onclick="trigger_one('second');">
								<div class="card-header" style="text-align:center;">
									<div class="user-pic">
										<img alt="Avatar" width="100" height="100" src="images/5.png">
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="card-body text-center">
									<h5 class="semi-bold no-margin"> Partnership/LLP </h5>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-default cs_card" id="third_card" onclick="trigger_one('third');">
								<div class="card-header" style="text-align:center;">
									<div class="user-pic">
										<img alt="Avatar" width="100" height="100" src="images/6.png">
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="card-body text-center">
									<h5 class="semi-bold no-margin"> Private Limited </h5>
								</div>
							</div>
						</div>
						<div class="col-lg-12" style="display:none;" id="extra_div">
							<form role="form">
								 <h5>Tax Information</h5>
								 <div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">GST</b> Registation Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<input type="text" class="form-control" required>
								 </div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">GST Certificate</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_gst();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myGst" class="form-control none" required>
									<span id="gst_span"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">Pan Card</b> Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<input type="text" class="form-control" required>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of Pan Card
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_pan();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myPan" class="form-control none" required>
									<span id="pan_span"></span>
								</div>
								
								<h5 class="m-t-30">Legal Information</h5>
								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">Aadhar Card Number</b> of Proprietor/Individual
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<input type="text" class="form-control" required>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">Aadhar Card</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_aadhar();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myAadhar" class="form-control none" required>
									<span id="aadhaar_span"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">Telephone/Electricity Bill</b> pertaining to Proprietor
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_bill();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myBill" class="form-control none" required>
									<span id="bill_span"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">License of Lease Agreement</b> Showing Premises belong to Proprietor/Shop Owner/Registered Business
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_rental();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myRental" class="form-control none" required>
									<span id="rental_span"></span>
								</div>
								
								<h5 class="m-t-30">Banking Information</h5>
								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">Bank Account</b> Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<input type="text" class="form-control" required>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">Cancelled Cheque</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_cheque();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myCheque" class="form-control none" required>
									<span id="cheque_span"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of Last 3 Months <b class="bold">Bank Statement</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_statement();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myStatement" class="form-control none" required>
									<span id="statement_span"></span>
								</div>
							</form>
						</div>
						<div class="col-lg-12" style="display:none;" id="extra_div_2">
							<form role="form">
								 <h5>Tax Information</h5>
								 <div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">GST</b> Registation Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<input type="text" class="form-control" required>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">GST Certificate</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_gst2();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myGst2" class="form-control none" required>
									<span id="gst_span2"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">Pan Card</b> Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<input type="text" class="form-control" required>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">Pan Card</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_pan2();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myPan2" class="form-control none" required>
									<span id="pan_span2"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">Partnership Deed</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_partnership();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myPartnership" class="form-control none" required>
									<span id="partnership_span"></span>
								</div>
								
								<h5 class="m-t-30">Legal Information</h5>
								<div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">Power Of Attorney</b> granted to a partner or an employee of the firm to transact the business
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_poa();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myPoa" class="form-control none" required>
									<span id="poa_span"></span>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Document Validating the address of the partners and the person holding <b class="bold">Power Of Attorney</b>(Eg: Aadhar Card)
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_aadhar2();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myAadhar2" class="form-control none" required>
									<span id="aadhaar_span2"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">Lease or Rental Agreement</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_rental2();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myRental2" class="form-control none" required>
									<span id="rental_span2"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">License Agreement</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_license();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myLicense" class="form-control none" required>
									<span id="license_span"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label>Firm Partner's <b class="bold">Electricity Bill/Telephone Bill</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_bill2();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myBill2" class="form-control none" required>
									<span id="bill_span2"></span>
								</div>

								<h5 class="m-t-30">Banking Information</h5>
								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">Bank Account</b> Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<input type="text" class="form-control" required>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">Cancelled Cheque</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_cheque2();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myCheque2" class="form-control none" required>
									<span id="cheque_span2"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of Last 3 Months <b class="bold">Bank Statement</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_statement2();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myStatement2" class="form-control none" required>
									<span id="statement_span2"></span>
								</div>
							</form>
						</div>
						<div class="col-lg-12" style="display:none;" id="extra_div_3">
							<form role="form">
								 <h5>Tax Information</h5>
								 <div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">GST</b> Registation Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<input type="text" class="form-control" required>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">GST Certificate</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_gst3();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myGst3" class="form-control none" required>
									<span id="gst_span3"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">Pan Card</b> Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<input type="text" class="form-control" required>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">Pan Card</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_pan3();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myPan3" class="form-control none" required>
									<span id="pan_span3"></span>
								</div>
								
								<h5 class="m-t-30">Legal Information</h5>
								<div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">Certificate of Incorporation</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_incorp();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myIncorp" class="form-control none" required>
									<span id="incorp_span"></span>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">Memorandum of Association</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_memo();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myMemo" class="form-control none" required>
									<span id="memo_span"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of Company's <b class="bold">Telephone/Electricity Bill</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_bill3();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myBill3" class="form-control none" required>
									<span id="bill_span3"></span>
								</div>
								
								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">Lease or Rental Agreement</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_rental3();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myRental3" class="form-control none" required>
									<span id="rental_span3"></span>
								</div>
								
								<h5 class="m-t-30">Banking Information</h5>
								<div class="form-group form-group-default form-g-grey ">
									<label><b class="bold">Bank Account</b> Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<input type="text" class="form-control" required>
								</div>

								 <div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of <b class="bold">Cancelled Cheque</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_cheque3();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myCheque3" class="form-control none" required>
									<span id="cheque_span3"></span>
								</div>

								<div class="form-group form-group-default form-g-grey ">
									<label>Scanned Copy of Last 3 Months <b class="bold">Bank Statement</b>
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<button class="btn btn-primary btn-cons m-b-10" onclick="upload_statement3();" type="button"><i class="fa fa-cloud-upload"></i> <span class="bold_btn">Upload</span></button>
									<input type="file" id="myStatement3" class="form-control none" required>
									<span id="statement_span3"></span>
								</div>
							</form>
						</div>
						
						<div class="col-lg-12" style="display:none;" id="extra_div_4">
							<br>
							<div class="form-group form-group-default form-g-grey ">
								<label>Leave your <b class="bold">comments or questions</b> here
									<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
								</label>
								<textarea class="form-control form-g-grey text-big" rows="4" required></textarea>
							</div>
							<a class="btn btn-warning btn-cons" style="color: white;float:left;" href="step-2.php">BACK</a>
							
							<a class="btn btn-success btn-cons" style="color: white;float:right;" href="step-4.php">NEXT</a>
							<a href="step-4.php" class="semi-bold uline">Skip For Now</a>
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
		$("#extra_div_4").show();
		if(val == 'first'){
			$("#first_card").addClass("cs_active");
			$("#second_card").removeClass("cs_active");
			$("#third_card").removeClass("cs_active");
			$("#extra_div").show();
			$("#extra_div_2").hide();
			$("#extra_div_3").hide();
		}
		else if(val == 'second'){
			$("#second_card").addClass("cs_active");
			$("#first_card").removeClass("cs_active");
			$("#third_card").removeClass("cs_active");
			$("#extra_div").hide();
			$("#extra_div_2").show();
			$("#extra_div_3").hide();
		}
		else if(val == 'third'){
			$("#third_card").addClass("cs_active");
			$("#first_card").removeClass("cs_active");
			$("#second_card").removeClass("cs_active");
			$("#extra_div").hide();
			$("#extra_div_2").hide();
			$("#extra_div_3").show();
		}
	}

//first tab start

	function upload_gst(){
		$('#myGst').click();
		$('#myGst').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_gst = file_name+'('+main_size+')';
			$('#gst_span').html(main_gst);
		});
	}

	function upload_pan(){
		$('#myPan').click();
		$('#myPan').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_pan = file_name+'('+main_size+')';
			$('#pan_span').html(main_pan);
		});
	}
	
	function upload_aadhar(){
		$('#myAadhar').click();
		$('#myAadhar').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_aadhar = file_name+'('+main_size+')';
			$('#aadhaar_span').html(main_aadhar);
		});
	}

	function upload_cheque(){
		$('#myCheque').click();
		$('#myCheque').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_cheque = file_name+'('+main_size+')';
			$('#cheque_span').html(main_cheque);
		});
	}

	function upload_statement(){
		$('#myStatement').click();
		$('#myStatement').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_statement = file_name+'('+main_size+')';
			$('#statement_span').html(main_statement);
		});
	}

	function upload_bill(){
		$('#myBill').click();
		$('#myBill').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_bill = file_name+'('+main_size+')';
			$('#bill_span').html(main_bill);
		});
	}

	function upload_rental(){
		$('#myRental').click();
		$('#myRental').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_rental = file_name+'('+main_size+')';
			$('#rental_span').html(main_rental);
		});
	}

// second tab startes

	function upload_gst2(){
		$('#myGst2').click();
		$('#myGst2').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_gst = file_name+'('+main_size+')';
			$('#gst_span2').html(main_gst);
		});
	}

	function upload_pan2(){
		$('#myPan2').click();
		$('#myPan2').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_pan = file_name+'('+main_size+')';
			$('#pan_span2').html(main_pan);
		});
	}

	function upload_partnership(){
		$('#myPartnership').click();
		$('#myPartnership').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_partnership = file_name+'('+main_size+')';
			$('#partnership_span').html(main_partnership);
		});
	}

	function upload_poa(){
		$('#myPoa').click();
		$('#myPoa').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_poa = file_name+'('+main_size+')';
			$('#poa_span').html(main_poa);
		});
	}

	function upload_aadhar2(){
		$('#myAadhar2').click();
		$('#myAadhar2').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_aadhar = file_name+'('+main_size+')';
			$('#aadhaar_span2').html(main_aadhar);
		});
	}

	function upload_rental2(){
		$('#myRental2').click();
		$('#myRental2').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_rental = file_name+'('+main_size+')';
			$('#rental_span2').html(main_rental);
		});
	}

	function upload_license(){
		$('#myLicense').click();
		$('#myLicense').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_license = file_name+'('+main_size+')';
			$('#license_span').html(main_license);
		});
	}

	function upload_bill2(){
		$('#myBill2').click();
		$('#myBill2').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_bill = file_name+'('+main_size+')';
			$('#bill_span2').html(main_bill);
		});
	}

	function upload_cheque2(){
		$('#myCheque2').click();
		$('#myCheque2').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_cheque = file_name+'('+main_size+')';
			$('#cheque_span2').html(main_cheque);
		});
	}

	function upload_statement2(){
		$('#myStatement2').click();
		$('#myStatement2').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_statement = file_name+'('+main_size+')';
			$('#statement_span2').html(main_statement);
		});
	}

//third tab start

	function upload_gst3(){
		$('#myGst3').click();
		$('#myGst3').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_gst = file_name+'('+main_size+')';
			$('#gst_span3').html(main_gst);
		});
	}

	function upload_pan3(){
		$('#myPan3').click();
		$('#myPan3').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_pan = file_name+'('+main_size+')';
			$('#pan_span3').html(main_pan);
		});
	}

	function upload_incorp(){
		$('#myIncorp').click();
		$('#myIncorp').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_incorp = file_name+'('+main_size+')';
			$('#incorp_span').html(main_incorp);
		});
	}

	function upload_memo(){
		$('#myMemo').click();
		$('#myMemo').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_memo = file_name+'('+main_size+')';
			$('#memo_span').html(main_memo);
		});
	}

	function upload_bill3(){
		$('#myBill3').click();
		$('#myBill3').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_bill = file_name+'('+main_size+')';
			$('#bill_span3').html(main_bill);
		});
	}

	function upload_rental3(){
		$('#myRental3').click();
		$('#myRental3').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_rental = file_name+'('+main_size+')';
			$('#rental_span3').html(main_rental);
		});
	}

	function upload_cheque3(){
		$('#myCheque3').click();
		$('#myCheque3').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_cheque = file_name+'('+main_size+')';
			$('#cheque_span3').html(main_cheque);
		});
	}

	function upload_statement3(){
		$('#myStatement3').click();
		$('#myStatement3').bind('change', function() {
			var bytes = this.files[0].size;
			var file_name = this.files[0].name;
			if(bytes > 999999)
			{
				var size = (bytes/1048576).toFixed(2);
				var unit = 'MB';
			}else{
				var size = (bytes/1024).toFixed(2);
				var unit = 'KB';
			}
			var main_size = size+' '+unit;
			var main_statement = file_name+'('+main_size+')';
			$('#statement_span3').html(main_statement);
		});
	}
	</script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title> Documents Verification | Wanted 7</title>
	<?php
		include("common/metalinks.php");
	?>
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
	  .type_1, .type_2, .type_3, .common, .common_2{
		display:none;
	  }
	  .none{
		display:none;
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
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a> &gt; <a href="dashboard.php">Profile</a> &gt; Documents Verfication
				</h1>
			  </div>
			</div>
			<!-- BEGIN: Page content-->
            <div>
			<div class="row">
				<!-- settings sidebar start-->
				<?php include ('common/settings_sidebar.php');?>
				<!-- settings sidebar Ends-->
				<div class="col-lg-9">
				<div class="card " style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Taxpayer Identification Number</h5>
					</div>
					<form>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group mb-4 row">
									<dt class="col-sm-3" >Business Type</dt>
									<div class="col-sm-3">
										<label class="radio radio-primary radio-grey"><input type="radio" name="e" value="type_1" checked><span style="font-weight: 500;">Individual/Propriertorship</span></label>
									</div>
									<div class="col-sm-2">
										<label class="radio radio-primary radio-grey"><input type="radio" name="e" value="type_2"><span style="font-weight: 500;">Partnership/LLP</span></label>
									</div>
									<div class="col-sm-3">
										<label class="radio radio-primary radio-grey"><input type="radio" name="e" value="type_3"><span style="font-weight: 500;">Private Limited</span></label>
									</div>
								</div>
								<div class="table-responsive mt-4">
									<table class="table table-bordered">
										<thead class="thead-light">
											<tr>
												<th scope="col">Document Type</th>
												<th scope="col">Name</th>
												<th scope="col">Date</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr class="common">
												<td scope="row">GST Certificate</td>
												<td style="font-weight:500;">
													<div class="d-flex">
														<div class="col-2">
															<img src="images/PDF-icon.png" >
														</div>
														<div class="col-10">
															<a href="#">abc_gst_2019.pdf</a>
															<p>3.56 MB</p>
														</div>
													</div>
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr>
											<tr class="common">
												<td scope="row">PAN Card</td>
												<td style="font-weight:500;">
													<div class="d-flex">
														<div class="col-2">
															<img src="images/PDF-icon.png" >
														</div>
														<div class="col-10">
															<a href="#">abc_pan_2019.pdf</a>
															<p>3.56 MB</p>
														</div>
														
													</div>
													
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr>
											<tr class="type_3">
												<td scope="row">Certificate of Incorporation</td>
												<td style="font-weight:500;">
													<div class="d-flex yoo">
														 <div class="form-group form-group-default form-g-grey " id="up_cer">
															<label class="col-md-12">Upload Certificate 
															</label>
															<button class="btn btn-primary btn-cons " style="float:left;margin-left:15px;" onclick="$('#myGst').click()" type="button"><i class="fa fa-file"></i>&nbsp;<span class="bold_btn">Upload</span></button>
															<input type="file" id="myGst" class="form-control none" required>
														</div>

													</div>
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr>
											<tr class="type_3">
												<td scope="row">Memorandum of Association</td>
												<td style="font-weight:500;">
													<div class="d-flex">
														<div class="col-2">
															<img src="images/PDF-icon.png" >
														</div>
														<div class="col-10">
															<a href="#">abc_memorandum_2019.pdf</a>
															<p>3.56 MB</p>
														</div>
													</div>
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr>
											<tr class="common_2">
												<td scope="row">Aadhar Card</td>
												<td style="font-weight:500;">
													<div class="d-flex">
														<div class="col-2">
															<img src="images/PDF-icon.png" >
														</div>
														<div class="col-10">
															<a href="#">abc_aadhar_2019.pdf</a>
															<p>3.56 MB</p>
														</div>
													</div>
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr>
											<tr class="type_2">
												<td scope="row">Partnership Deed</td>
												<td style="font-weight:500;">
													<div class="d-flex">
														<div class="col-2">
															<img src="images/PDF-icon.png" >
														</div>
														<div class="col-10">
															<a href="#">abc_partnership_2019.pdf</a>
															<p>3.56 MB</p>
														</div>
													</div>
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr>
											<tr class="type_2">
												<td scope="row">Power of Atorny</td>
												<td style="font-weight:500;">
													<div class="d-flex">
														<div class="col-2">
															<img src="images/PDF-icon.png" >
														</div>
														<div class="col-10">
															<a href="#">abc_poa_2019.pdf</a>
															<p>3.56 MB</p>
														</div>
													</div>
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr>
											<tr class="common">
												<td scope="row">Lease or Rental Agreement</td>
												<td style="font-weight:500;">
													<div class="d-flex">
														<div class="col-2">
															<img src="images/PDF-icon.png" >
														</div>
														<div class="col-10">
															<a href="#">abc_rental_2019.pdf</a>
															<p>3.56 MB</p>
														</div>
													</div>
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr>
											<tr class="type_2">
												<td scope="row">License Agreement</td>
												<td style="font-weight:500;">
													<div class="d-flex">
														<div class="col-2">
															<img src="images/PDF-icon.png" >
														</div>
														<div class="col-10">
															<a href="#">abc_license_2019.pdf</a>
															<p>3.56 MB</p>
														</div>
													</div>
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr>
											<tr class="common">
												<td scope="row">Telephone/Electricity Bill</td>
												<td style="font-weight:500;">
													<div class="d-flex">
														<div class="col-2">
															<img src="images/PDF-icon.png" >
														</div>
														<div class="col-10">
															<a href="#">abc_electric_2019.pdf</a>
															<p>3.56 MB</p>
														</div>
													</div>
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr>
											<!-- <tr class="type_3">
												<td scope="row">License of lease agreement</td>
												<td style="font-weight:500;">
													<div class="d-flex">
														<div class="col-2">
															<img src="images/PDF-icon.png" >
														</div>
														<div class="col-10">
															<a href="#">abc_lease_agreement_2019.pdf</a>
															<p>3.56 MB</p>
														</div>
													</div>
												</td>
												<td>2/11/2019</td>
												<td><button class="btn btn-ok btn-sm" type="button">View Document</button></td>
											</tr> -->
											
										</tbody>
									</table>
								</div>
								
							</div>
						</div>
					</div>
					</form>
				</div>
								
				</div>
				</div>
              </div>
		
            </div>
            <!-- END: Page content-->
         
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
	<script>
    $(function()
    {
		$('.type_1').show();
		$('.common').show();
		$('.common_2').show();
		$('.type_2').hide();
		$('.type_3').hide();

      $('input:radio[name="e"]').change(function()
      {
		   if($(this).val() == 'type_1'){
			$('.type_1').show();
			$('.common').show();
			$('.common_2').show();
			$('.type_2').hide();
			$('.type_3').hide();
			
		   }
		   else if($(this).val() == 'type_2'){
			$('.type_2').show();
			$('.common').show();
			$('.common_2').show();
			$('.type_1').hide();
			$('.type_3').hide();
		   }
		   else if($(this).val() == 'type_3'){
			$('.type_3').show();
			$('.common').show();
			$('.common-2').hide();
			$('.type_1').hide();
			$('.type_2').hide();
		   }
      });
    });
	$(document).ready(function() {
		document.getElementById('myGst').addEventListener('change', readFile, false);

	});
	function readFile(){
		
		var bytes = this.files[0].size;
		var file_name = this.files[0].name;
		var fileType = this.files[0].type;
		if(fileType.match('pdf'))
		{
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
			$("#up_cer").hide();
			var htmlzz = '<div class="col-2"><img src="images/PDF-icon.png" ></div><div class="col-10"> <a href="#">'+file_name+'</a><p>'+main_size+'</p></div>';
			alert(htmlzz);
			$('.yoo').append(htmlzz);
		}
		else{
			alert('Please Upload Pdf File.');
		}
		
	}
  </script>
  </body>
</html>

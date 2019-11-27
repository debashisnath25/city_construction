<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title> Email Settings | Wanted 7</title>
	<?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
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
			<div class="page-heading" style="padding-left:17px;">
			  <div class="page-breadcrumb">
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a>  &gt; <a href="dashboard.php">Profile</a> &gt; Mail Settings
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
							<h5 class="box-title" style="color:#fff;">CUSTOMER EMAIL NOTIFICATIONS</h5>
						</div>
						<div class="card-body">
							<div class="ex-box">
								<div class="media">
									<div class="media-body">
										<h5 class="mt-0" style="color:#0463a7;">Order Confirmation</h5> Sent to customer after successful order placement to acknowledge its receipt. This email contains information about order items, shipping, billing, and order status.
									</div>
									<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span>Enabled</label>
								</div>
							</div>
							<hr class="my-4">
							<div class="ex-box">
								<div class="media">
									<div class="media-body">
										<h5 class="mt-0" style="color:#0463a7;">Order Status Changed</h5> Sent on the order's status change to inform the customer about the progress in order fulfillment.
									</div>
									<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span>Enabled</label>
								</div>
							</div>
							<hr class="my-4">
							<div class="ex-box">
								<div class="media">
									<div class="media-body">
										<h5 class="mt-0" style="color:#0463a7;">Order Shipped</h5> Sent when the order status is changed to "Ready for Pickup" to notify the customer that purchased items are ready for pickup.
									</div>
									<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span>Enabled</label>
								</div>
							</div>
							<hr class="my-4">
							<div class="ex-box">
								<div class="media">
									<div class="media-body">
										<h5 class="mt-0" style="color:#0463a7;">Download E-goods</h5> Sent to admin when an order is placed. This email contains information about order items, shipping, and billing.
									</div>
									<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span>Enabled</label>
								</div>
							</div>
						</div>
					</div>
					<div class="card " style="border:1px solid #7c1ab5">
						<div class="card-header cardhdd">
							<h5 class="box-title" style="color:#fff;">ADMIN NOTIFICATIONS</h5>
						</div>
						<div class="card-body">
							<div class="ex-box">
								<div class="media">
									<div class="media-body">
										<h5 class="mt-0" style="color:#0463a7;">New Order Placed</h5> Sent to admin when an order is placed. This email contains information about order items, shipping, and billing.
									</div>
									<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span>Enabled</label>
								</div>
							</div>
							<hr class="my-4">
							<div class="ex-box">
								<div class="media">
									<div class="media-body">
										<h5 class="mt-0" style="color:#0463a7;">Low Stock Notification</h5> Sent to admin when a product in the store has reached a low stock limit.
									</div>
									<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span>Enabled</label>
								</div>
							</div>
							<hr class="my-4">
							<div class="ex-box">
								<div class="media">
									<div class="media-body">
										<h5 class="mt-0" style="color:#0463a7;">Weekly Stats Report</h5> Sent each Monday to provide a brief overview of store performance in the past 7 days and help build a plan for the upcoming week.
									</div>
									<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span>Enabled</label>
								</div>
							</div>
						</div>
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
	<script src="js/vendor-js/datatables.min.js"></script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/vendor-js/jquery.validate.min.js"></script>
	<script>
      $(function() {
		$('#dt-buttons').DataTable({
		  "searching": true,
		  "pageLength":10,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'excel', 'pdf', 'csv'
			]
		});
		$(".dt-buttons").removeClass("btn-group");


		$("#datetimepicker_1, #datetimepicker_2").datetimepicker({
			todayHighlight: !0,
			autoclose: !0,
			format: "yyyy.mm.dd hh:ii",
		});
	  });
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Notifications | Wanted 7
    </title>
    <?php
include("common/metalinks.php");
?>
    <!-- PAGE LEVEL VENDORS-->
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
    <link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
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
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a> &gt; Notifications
				</h1>
			  </div>
			</div>
			<!-- BEGIN: Page content-->
            <div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="card" style="border:1px solid #cccccc;">
                    <div class="card-body">
                      <div class="card-fullwidth-block px-3">
                        <div class="nav nav-pills flex-column faq-tabs" role="tablist">
                          <a class="nav-link media align-items-center active " data-toggle="pill" href="#faq-group-1"  role="tab" >
                            <i class="fa fa-cog text-muted font-26 mr-3">
                            </i>
                            <div class="media-body">
                              <div class="mb-1 h6" style="font-size:12px;">From Wanted7
                              </div>
                            </div>
                          </a>
                          <a class="nav-link media align-items-center " data-toggle="pill" href="#faq-group-2"  role="tab"  >
                            <i class="fa fa-users text-muted font-26 mr-3">
                            </i>
                            <div class="media-body">
                              <div class="mb-1 h6" style="font-size:12px;">From Customers
                              </div>
                            </div>
                          </a>
                          <a class="nav-link media align-items-center " data-toggle="pill" href="#faq-group-3"  role="tab" >
                            <i class="fa fa-server text-muted font-26 mr-3">
                            </i>
                            <div class="media-body">
                              <div class="mb-1 h6" style="font-size:12px;">For Your Products7
                              </div>
                            </div>
                          </a>
                          <a class="nav-link media align-items-center " data-toggle="pill" href="#faq-group-4"  role="tab">
                            <i class="fa fa-table text-muted font-26 mr-3">
                            </i>
                            <div class="media-body">
                              <div class="mb-1 h6" style="font-size:12px;">From Orders
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="faq-group-1">
                      <div class="card" style="border:1px solid #7c1ab5">
                        <div class="card-header cardhdd">
                          <h5 class="box-title" style="color:#fff;">Notifications From Super Admin (Wanted7)
                          </h5>
                          <div class="card-actions">
                            <a class="card-collapse">
                              <i class="ti-angle-down">
                              </i>
                            </a>
                          </div>
                        </div>
                        <div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Store Registration Successfull</a></h5>
									<p class="text-mutedx ">Your Store Has been Registered by Wanted7. Store ID allotted to you is ABC123. Your store is ready for selling in wanted7.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Setup In Store Id ABC123</a></h5>
									<p class="text-mutedx ">Please Update Your Payment Option in ABC123 Store To Receive The Payment. </p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2018</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Setup In Store Id ABC123</a></h5>
									<p class="text-mutedx ">Please Update Your Payment Option in ABC123 Store To Receive The Payment. </p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2018</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Setup In Store Id ABC123</a></h5>
									<p class="text-mutedx ">Please Update Your Payment Option in ABC123 Store To Receive The Payment. </p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2018</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Setup In Store Id ABC123</a></h5>
									<p class="text-mutedx ">Please Update Your Payment Option in ABC123 Store To Receive The Payment. </p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2018</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Setup In Store Id ABC123</a></h5>
									<p class="text-mutedx ">Please Update Your Payment Option in ABC123 Store To Receive The Payment. </p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2018</span></div>
								</li>
								
							</ul>
                        </div>
						<nav aria-label="...">
							<ul class="pagination justify-content-end">
								<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item "><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
                      </div>
                    </div>
                    <div class="tab-pane fade " id="faq-group-2">
					<div class="card" style="border:1px solid #7c1ab5">
                        <div class="card-header cardhdd">
                          <h5 class="box-title" style="color:#fff;">Notifications from Customers 
                          </h5>
                          <div class="card-actions">
                            <a class="card-collapse">
                              <i class="ti-angle-down">
                              </i>
                            </a>
                          </div>
                        </div>
                        <div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Product Return Requested </a></h5>
									<p class="text-mutedx ">Order No. ORDER123 for Nike Sneakers Black Colour , has been Request For Return By The Customer Id #USER123.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Successfully Refund </a></h5>
									<p class="text-mutedx ">Payment has been successfully refund to the Customer Id #USER123 for order no.ORDER124</p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Successfully Refund </a></h5>
									<p class="text-mutedx ">Payment has been successfully refund to the Customer Id #USER123 for order no.ORDER124</p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Successfully Refund </a></h5>
									<p class="text-mutedx ">Payment has been successfully refund to the Customer Id #USER123 for order no.ORDER124</p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Successfully Refund </a></h5>
									<p class="text-mutedx ">Payment has been successfully refund to the Customer Id #USER123 for order no.ORDER124</p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Successfully Refund </a></h5>
									<p class="text-mutedx ">Payment has been successfully refund to the Customer Id #USER123 for order no.ORDER124</p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Payment Successfully Refund </a></h5>
									<p class="text-mutedx ">Payment has been successfully refund to the Customer Id #USER123 for order no.ORDER124</p>
									<div class="text-muted font-13 pull-right"><span>Dec 27 2019</span></div>
								</li>
								
							</ul>
                        </div>
						<nav aria-label="...">
							<ul class="pagination justify-content-end">
								<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item "><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
                      </div>
                    </div>
                    <div class="tab-pane fade " id="faq-group-3">
						<div class="card" style="border:1px solid #7c1ab5">
                        <div class="card-header cardhdd">
                          <h5 class="box-title" style="color:#fff;">Notifications about your products 
                          </h5>
                          <div class="card-actions">
                            <a class="card-collapse">
                              <i class="ti-angle-down">
                              </i>
                            </a>
                          </div>
                        </div>
                        <div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Product Out Of Stock</a></h5>
									<p class="text-mutedx ">Item Id: #108737NT has been Out Of Stock. Update your stock from your store project page.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Product Out Of Stock</a></h5>
									<p class="text-mutedx ">Item Id: #108737NT has been Out Of Stock. Update your stock from your store project page.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Product Out Of Stock</a></h5>
									<p class="text-mutedx ">Item Id: #108737NT has been Out Of Stock. Update your stock from your store project page.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Product Out Of Stock</a></h5>
									<p class="text-mutedx ">Item Id: #108737NT has been Out Of Stock. Update your stock from your store project page.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Product Out Of Stock</a></h5>
									<p class="text-mutedx ">Item Id: #108737NT has been Out Of Stock. Update your stock from your store project page.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Product Out Of Stock</a></h5>
									<p class="text-mutedx ">Item Id: #108737NT has been Out Of Stock. Update your stock from your store project page.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Product Out Of Stock</a></h5>
									<p class="text-mutedx ">Item Id: #108737NT has been Out Of Stock. Update your stock from your store project page.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Product Out Of Stock</a></h5>
									<p class="text-mutedx ">Item Id: #108737NT has been Out Of Stock. Update your stock from your store project page.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
							</ul>
                        </div>
						<nav aria-label="...">
							<ul class="pagination justify-content-end">
								<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item "><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
                      </div>
                    </div>
                    <div class="tab-pane fade " id="faq-group-4">
					<div class="card" style="border:1px solid #7c1ab5">
                        <div class="card-header cardhdd">
                          <h5 class="box-title" style="color:#fff;">Notifications for Orders 
                          </h5>
                          <div class="card-actions">
                            <a class="card-collapse">
                              <i class="ti-angle-down">
                              </i>
                            </a>
                          </div>
                        </div>
                        <div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Order Successfully Shipped</a></h5>
									<p class="text-mutedx ">Order No. ORDER124 Has Been Successfully Shipped.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Order Successfully Delivered</a></h5>
									<p class="text-mutedx ">Order No. ORDER124 Has Been Successfully Delivered To The Customer Id #USER125.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Order Successfully Delivered</a></h5>
									<p class="text-mutedx ">Order No. ORDER124 Has Been Successfully Delivered To The Customer Id #USER125.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Order Successfully Delivered</a></h5>
									<p class="text-mutedx ">Order No. ORDER124 Has Been Successfully Delivered To The Customer Id #USER125.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Order Successfully Delivered</a></h5>
									<p class="text-mutedx ">Order No. ORDER124 Has Been Successfully Delivered To The Customer Id #USER125.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
								<li class="list-group-item py-3 px-0">
									<h5><a href="#">Order Successfully Delivered</a></h5>
									<p class="text-mutedx ">Order No. ORDER124 Has Been Successfully Delivered To The Customer Id #USER125.</p>
									<div class="text-muted font-13 pull-right" ><span>Dec 27 2019</span></div>
								</li>
							</ul>
                        </div>
						<nav aria-label="...">
							<ul class="pagination justify-content-end">
								<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item "><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
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
    <script src="js/vendor-js/datatables.min.js">
    </script>
    <script src="js/vendor-js/bootstrap-datetimepicker.min.js">
    </script>
    <script src="js/vendor-js/jquery.validate.min.js">
    </script>
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
        }
                                  );
        $(".dt-buttons").removeClass("btn-group");
        $("#datetimepicker_1, #datetimepicker_2").datetimepicker({
          todayHighlight: !0,
          autoclose: !0,
          format: "yyyy.mm.dd hh:ii",
        }
                                                                );
      }
       );
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Orders | Wanted 7
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
      .order_div{
        background: #F2F3FA;
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
            <div class="page-heading">
              <div class="page-breadcrumb">
                <h1 class="page-title">
                  <a href="dashboard.php">Dashboard 
                  </a>> Orders > Order returns 
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="row">
                <?php include('common/orders_left_sidebar.php');?>
                <div class="col-lg-9">
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="faq-group-1">
                      <div class="card" style="border:1px solid #7c1ab5">
                        <div class="card-header cardhdd">
                          <h5 class="box-title" style="color:#fff;">ORDERS (PRODUCT) RETURNS
                          </h5>
                          <div class="card-actions">
                            <a class="card-collapse">
                              <i class="ti-angle-down">
                              </i>
                            </a>
                          </div>
                        </div>
                        <div class="card-body">
                          <div >
                            <ul class="nav line-tabs" >
                              <li class="nav-item">
                                <a class="nav-link active " data-toggle="tab" href="#tab1-1"><b>Returns Awaiting Acceptence</b>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tab1-2"><b>Confirm Product Received</b>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tab1-3"><b>Process Refund/Replace</b>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tab1-4"><b>Return Orders</b>
                                </a>
                              </li>
                            </ul>
                            <div class="tab-content mt-4">
                              <div class="tab-pane fade show active" id="tab1-1">
                                <div class="row mb-3"  style="border-bottom:1px solid #cccccc;">
                                  <div class="col-md-2 col-sm-12 col-xs-12 " style="padding:3px !important;">
                                    <label for="validationCustom04">Order Id
                                    </label>
                                    <input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter Order Id" required="">
                                  </div>
                                  <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
                                    <label for="validationCustom04">Order Type
                                    </label>
                                    <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid" multiple="multiple">
                                      <optgroup label="Order Type">
                                        <option>Paid Orders
                                        </option>
                                        <option>COD Orders
                                        </option>
                                      </optgroup>
                                      <optgroup label="Shipping Api">
                                        <option>Delivery Orders From Delhivery
                                        </option>
                                        <option>Delivery Orders From India Post
                                        </option>
                                      </optgroup>
                                      <optgroup label="Wanted Program">
                                        <option>Wanted Assurance Program Orders
                                        </option>
                                        <option>Wanted Support Program Orders
                                        </option>
                                      </optgroup>
                                    </select>
                                  </div>
                                  <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
                                    <label >From
                                    </label>
                                    <input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Select Date">
                                  </div>
                                  <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
                                    <label for="validationCustom04">To
                                    </label>
                                    <input class="form-control form-control-solid" id="datetimepicker_2" type="text" placeholder="Select Date">
                                  </div>
                                  <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
                                    <label for="validationCustom04">Sort
                                    </label>
                                    <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
                                      <option selected disabled>Filters
                                      </option>
                                      <option>Highest First
                                      </option>
                                      <option>Lowest First
                                      </option>
                                      <option>Latest First
                                      </option>
                                      <option>Earliest First
                                      </option>
                                    </select>
                                  </div>
                                  <div class="col-md-1 col-sm-12 col-xs-12" style="padding:3px !important;">
                                    <button class="btn btn-primary clr" style="margin-top: 27px;" type="submit">
                                      <span class="btn-icon">
                                        <i class="ft-search">
                                        </i>Search
                                      </span>
                                    </button>
                                  </div>
                                </div>
                                <div class="row mb-3" style="border:1px solid #ccc;">
                                  <div class="order_div col-md-12 pt-3 ">
                                    <div class="col-md-2 col-sm-12  mb-3" style="float:left;padding:3px !important;">
                                      <a href="order_details.php" class="btn btn-primary ordr_btn" style="margin-left:-10px;margin-top:-5px;background:transparent;padding:7px;">
                                        <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER NUMBER
                                        </h5>
                                        <div class="font-13 text-muted">
                                          <div class=" text-muted" style="color:#2949ef !important;">
                                            #ORDER122
                                          </div>
                                        </div>
                                      </a>
                                    </div>
                                    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
                                      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER AMOUNT
                                      </h5>
                                      <div class="font-13 text-muted">
                                        <div class=" text-muted" style="color:#2949ef !important;">
                                          <span style="font-family:arial;">INR
                                          </span>20,000
                                          </span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
                                    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">CREATED DATE
                                    </h5>
                                    <div class="font-13 text-muted">
                                      <div class=" text-muted" style="color:#2949ef !important;">
                                        30 October 2019
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
                                    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">COUPON CODE
                                    </h5>
                                    <div class="font-13 text-muted">
                                      <div class=" text-muted" style="color:#2949ef !important;">
                                        BEAUTY10XX
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
                                    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">Status
                                    </h5>
                                    <div class="font-13 text-muted">
                                      <div class=" text-muted" style="color:#2949ef !important;">
                                       Awaiting Acceptence
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
                                    <button class="btn btn-primary pull-right" style="color:#fff;background:#09d261;border:1px solid #09d261;" type="submit">Accept
                                    </button>
                                    <button class="btn btn-warning pull-right" style="background:#eb5757;color:#fff;margin-top:5px;" type="submit">Cancel
                                    </button>
                                  </div>
                                </div>
                                <div class="table-responsive">
                                  <table class="table invoice-table">
                                    <tbody>
                                      <tr class="" style="padding-top:10px;padding:bottom:14px;">
                                        <td >
                                          <div class="media col-md-6 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
                                            <span class="position-relative d-inline-block mr-4">
                                              <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
                                            </span>
                                            <div class="media-body mt-2">
                                              <div class="h4 font-14">Mi Basic Wired Headset with Mic
                                              </div>
                                              <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                                                <span>Color : Black
                                                </span>&nbsp;&nbsp;&nbsp;
                                                <span style="color:black;">|
                                                </span>&nbsp;&nbsp;&nbsp;
                                                <span>Discount : 30%
                                                </span>
                                              </div>
                                              <div class="text-muted" style="color: #878787;font-size: 12px;">
                                                <span>Size : UK 8
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class=" col-md-2 mt-2 col-sm-12 col-xs-12" style="float:left;">
                                            <div class="h4 font-14">
                                              <span style="font-family:arial;">₹
                                              </span>&nbsp;20,0000
                                              </span>
                                          </div>
                                    </div>
                                      <div class=" col-md-4 col-sm-12 col-xs-12" style="float:left;">
                                        <div class="media-body mt-2">
                                          <div class="h4 font-14">Delivered on Dec 24, 2018
                                          </div>
                                          <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                <tr class="" style="padding-top:10px;padding:bottom:14px;">
                                  <td >
                                    <div class="media col-md-6" style="padding:0px !important;float:left;">
                                      <span class="position-relative d-inline-block mr-4">
                                        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
                                      </span>
                                      <div class="media-body mt-2">
                                        <div class="h4 font-14">Mi Basic Wired Headset with Mic
                                        </div>
                                        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                                          <span>Color : Black
                                          </span>&nbsp;&nbsp;&nbsp;
                                          <span style="color:black;">|
                                          </span>&nbsp;&nbsp;&nbsp;
                                          <span>Discount : 30%
                                          </span>
                                        </div>
                                        <div class="text-muted" style="color: #878787;font-size: 12px;">
                                          <span>Size : UK 8
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class=" col-md-2 mt-2" style="float:left;">
                                      <div class="h4 font-14">
                                        <span style="font-family:arial;">₹
                                        </span>&nbsp;2,00,000
                                        </span>
                                    </div>
                              </div>
                                <div class=" col-md-4" style="float:left;">
                                  <div class="media-body mt-2">
                                    <div class="h4 font-14">Delivered on Dec 24, 2018
                                    </div>
                                    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
                                    </div>
                                  </div>
                                </div>
                                </td>
                              </tr>
                            <tr class="" style="padding-top:10px;padding:bottom:14px;">
                              <td >
                                <div class="media col-md-6" style="padding:0px !important;float:left;">
                                  <span class="position-relative d-inline-block mr-4">
                                    <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
                                  </span>
                                  <div class="media-body mt-2">
                                    <div class="h4 font-14">Mi Basic Wired Headset with Mic
                                    </div>
                                    <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                                      <span>Color : Black
                                      </span>&nbsp;&nbsp;&nbsp;
                                      <span style="color:black;">|
                                      </span>&nbsp;&nbsp;&nbsp;
                                      <span>Discount : 30%
                                      </span>
                                    </div>
                                    <div class="text-muted" style="color: #878787;font-size: 12px;">
                                      <span>Size : UK 8
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class=" col-md-2 mt-2" style="float:left;">
                                  <div class="h4 font-14">
                                    <span style="font-family:arial;">₹
                                    </span>&nbsp;2,00,000
                                    </span>
                                </div>
                          </div>
                            <div class=" col-md-4" style="float:left;">
                              <div class="media-body mt-2">
                                <div class="h4 font-14">Delivered on Dec 24, 2018
                                </div>
                                <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
                                </div>
                              </div>
                            </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
                <div class="row mb-3 " style="border:1px solid #ccc;">
                  <div class="order_div col-md-12 pt-3 ">
                    <div class="col-md-2 col-sm-12  mb-3" style="float:left;padding:3px !important;">
                      <a href="order_details.php" class="btn btn-primary ordr_btn" style="margin-left:-10px;margin-top:-5px;background:transparent;padding:7px;">
                        <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER NUMBER
                        </h5>
                        <div class="font-13 text-muted">
                          <div class=" text-muted" style="color:#2949ef !important;">
                            #ORDER123
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
                      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER AMOUNT
                      </h5>
                      <div class="font-13 text-muted">
                        <div class=" text-muted" style="color:#2949ef !important;">
                          <span style="font-family:arial;">INR
                          </span>20,000
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
                    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">CREATED DATE
                    </h5>
                    <div class="font-13 text-muted">
                      <div class=" text-muted" style="color:#2949ef !important;">
                        30 October 2019
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
                    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">COUPON CODE
                    </h5>
                    <div class="font-13 text-muted">
                      <div class=" text-muted" style="color:#2949ef !important;">
                        BEAUTY10XX
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
                    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">Return Status
                    </h5>
                    <div class="font-13 text-muted">
                      <div class=" text-muted" style="color:#2949ef !important;">
                       Awaiting Acceptence
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
                    <button class="btn btn-primary pull-right" style="color:#fff;background:#09d261;border:1px solid #09d261;" type="submit">Accept
                    </button>
                    <button class="btn btn-warning pull-right" style="background:#eb5757;color:#fff;margin-top:5px;" type="submit">Cancel
                    </button>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table invoice-table">
                    <tbody>
                      <tr class="" style="padding-top:10px;padding:bottom:14px;">
                        <td >
                          <div class="media col-md-6 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
                            <span class="position-relative d-inline-block mr-4">
                              <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
                            </span>
                            <div class="media-body mt-2">
                              <div class="h4 font-14">Mi Basic Wired Headset with Mic
                              </div>
                              <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                                <span>Color : Black
                                </span>&nbsp;&nbsp;&nbsp;
                                <span style="color:black;">|
                                </span>&nbsp;&nbsp;&nbsp;
                                <span>Discount : 30%
                                </span>
                              </div>
                              <div class="text-muted" style="color: #878787;font-size: 12px;">
                                <span>Size : UK 8
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
                            <div class="h4 font-14">
                              <span style="font-family:arial;">₹
                              </span>&nbsp;20,0000
                              </span>
                          </div>
                    </div>
                      <div class=" col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
                        <div class="media-body mt-2">
                          <div class="h4 font-14">Delivered on Dec 24, 2018
                          </div>
                          <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                <tr class="" style="padding-top:10px;padding:bottom:14px;">
                  <td >
                    <div class="media col-md-6" style="padding:0px !important;float:left;">
                      <span class="position-relative d-inline-block mr-4">
                        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
                      </span>
                      <div class="media-body mt-2">
                        <div class="h4 font-14">Mi Basic Wired Headset with Mic
                        </div>
                        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                          <span>Color : Black
                          </span>&nbsp;&nbsp;&nbsp;
                          <span style="color:black;">|
                          </span>&nbsp;&nbsp;&nbsp;
                          <span>Discount : 30%
                          </span>
                        </div>
                        <div class="text-muted" style="color: #878787;font-size: 12px;">
                          <span>Size : UK 8
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
                      <div class="h4 font-14">
                        <span style="font-family:arial;">₹
                        </span>&nbsp;2,00,000
                        </span>
                    </div>
              </div>
                <div class="col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
                  <div class="media-body mt-2">
                    <div class="h4 font-14">Delivered on Dec 24, 2018
                    </div>
                    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
                    </div>
                  </div>
                </div>
                </td>
              </tr>
            <tr class="" style="padding-top:10px;padding:bottom:14px;">
              <td >
                <div class="media col-md-6" style="padding:0px !important;float:left;">
                  <span class="position-relative d-inline-block mr-4">
                    <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
                  </span>
                  <div class="media-body mt-2">
                    <div class="h4 font-14">Mi Basic Wired Headset with Mic
                    </div>
                    <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                      <span>Color : Black
                      </span>&nbsp;&nbsp;&nbsp;
                      <span style="color:black;">|
                      </span>&nbsp;&nbsp;&nbsp;
                      <span>Discount : 30%
                      </span>
                    </div>
                    <div class="text-muted" style="color: #878787;font-size: 12px;">
                      <span>Size : UK 8
                      </span>
                    </div>
                  </div>
                </div>
                <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
                  <div class="h4 font-14">
                    <span style="font-family:arial;">₹
                    </span>&nbsp;2,00,000
                    </span>
                </div>
          </div>
            <div class=" col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
              <div class="media-body mt-2">
                <div class="h4 font-14">Delivered on Dec 24, 2018
                </div>
                <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
                </div>
              </div>
            </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="tab-pane fade" id="tab1-2">
  <div class="row mb-3"  style="border-bottom:1px solid #cccccc;">
    <div class="col-md-2 col-sm-12 col-xs-12 " style="padding:3px !important;">
      <label for="validationCustom04">Order Id
      </label>
      <input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter Order Id" required="">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label for="validationCustom04">Order Type
      </label>
      <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid" multiple="multiple">
        <optgroup label="Order Type">
          <option>Paid Orders
          </option>
          <option>COD Orders
          </option>
        </optgroup>
        <optgroup label="Shipping Api">
          <option>Delivery Orders From Delhivery
          </option>
          <option>Delivery Orders From India Post
          </option>
        </optgroup>
        <optgroup label="Wanted Program">
          <option>Wanted Assurance Program Orders
          </option>
          <option>Wanted Support Program Orders
          </option>
        </optgroup>
      </select>
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label >From
      </label>
      <input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Select Date">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label for="validationCustom04">To
      </label>
      <input class="form-control form-control-solid" id="datetimepicker_2" type="text" placeholder="Select Date">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label for="validationCustom04">Sort
      </label>
      <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
        <option selected disabled>Filters
        </option>
        <option>Highest First
        </option>
        <option>Lowest First
        </option>
        <option>Latest First
        </option>
        <option>Earliest First
        </option>
      </select>
    </div>
    <div class="col-md-1 col-sm-12 col-xs-12" style="padding:3px !important;">
      <button class="btn btn-primary clr" style="margin-top: 27px;" type="submit">
        <span class="btn-icon">
          <i class="ft-search">
          </i>Search
        </span>
      </button>
    </div>
  </div>
  <div class="row mb-3" style="border:1px solid #ccc;">
    <div class="order_div col-md-12 pt-3 ">
      <div class="col-md-2 col-sm-12  mb-3" style="float:left;padding:3px !important;">
        <a href="order_details.php" class="btn btn-primary ordr_btn" style="margin-left:-10px;margin-top:-5px;background:transparent;padding:7px;">
          <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER NUMBER
          </h5>
          <div class="font-13 text-muted">
            <div class=" text-muted" style="color:#2949ef !important;">
              #ORDER122
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
        <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER AMOUNT
        </h5>
        <div class="font-13 text-muted">
          <div class=" text-muted" style="color:#2949ef !important;">
            <span style="font-family:arial;">INR
            </span>20,000
            </span>
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">CREATED DATE
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          30 October 2019
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">COUPON CODE
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          BEAUTY10XX
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">Status
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
			Product Pickup Confirmed
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <button class="btn btn-primary pull-right" style="color:#fff;background:#09d261;border:1px solid #09d261;" type="submit">Confirm
      </button>
      
    </div>
  </div>
  <div class="table-responsive">
    <table class="table invoice-table">
      <tbody>
        <tr class="" style="padding-top:10px;padding:bottom:14px;">
          <td >
            <div class="media col-md-6 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
              <span class="position-relative d-inline-block mr-4">
                <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
              </span>
              <div class="media-body mt-2">
                <div class="h4 font-14">Mi Basic Wired Headset with Mic
                </div>
                <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                  <span>Color : Black
                  </span>&nbsp;&nbsp;&nbsp;
                  <span style="color:black;">|
                  </span>&nbsp;&nbsp;&nbsp;
                  <span>Discount : 30%
                  </span>
                </div>
                <div class="text-muted" style="color: #878787;font-size: 12px;">
                  <span>Size : UK 8
                  </span>
                </div>
              </div>
            </div>
            <div class=" col-md-2 mt-2 col-sm-12 col-xs-12" style="float:left;">
              <div class="h4 font-14">
                <span style="font-family:arial;">₹
                </span>&nbsp;20,0000
                </span>
            </div>
      </div>
        <div class=" col-md-4 col-sm-12 col-xs-12" style="float:left;">
          <div class="media-body mt-2">
            <div class="h4 font-14">Delivered on Dec 24, 2018
            </div>
            <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
            </div>
          </div>
        </div>
      </td>
    </tr>
  <tr class="" style="padding-top:10px;padding:bottom:14px;">
    <td >
      <div class="media col-md-6" style="padding:0px !important;float:left;">
        <span class="position-relative d-inline-block mr-4">
          <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
        </span>
        <div class="media-body mt-2">
          <div class="h4 font-14">Mi Basic Wired Headset with Mic
          </div>
          <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
            <span>Color : Black
            </span>&nbsp;&nbsp;&nbsp;
            <span style="color:black;">|
            </span>&nbsp;&nbsp;&nbsp;
            <span>Discount : 30%
            </span>
          </div>
          <div class="text-muted" style="color: #878787;font-size: 12px;">
            <span>Size : UK 8
            </span>
          </div>
        </div>
      </div>
      <div class=" col-md-2 mt-2" style="float:left;">
        <div class="h4 font-14">
          <span style="font-family:arial;">₹
          </span>&nbsp;2,00,000
          </span>
      </div>
</div>
  <div class=" col-md-4" style="float:left;">
    <div class="media-body mt-2">
      <div class="h4 font-14">Delivered on Dec 24, 2018
      </div>
      <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
      </div>
    </div>
  </div>
  </td>
</tr>
<tr class="" style="padding-top:10px;padding:bottom:14px;">
  <td >
    <div class="media col-md-6" style="padding:0px !important;float:left;">
      <span class="position-relative d-inline-block mr-4">
        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
      </span>
      <div class="media-body mt-2">
        <div class="h4 font-14">Mi Basic Wired Headset with Mic
        </div>
        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
          <span>Color : Black
          </span>&nbsp;&nbsp;&nbsp;
          <span style="color:black;">|
          </span>&nbsp;&nbsp;&nbsp;
          <span>Discount : 30%
          </span>
        </div>
        <div class="text-muted" style="color: #878787;font-size: 12px;">
          <span>Size : UK 8
          </span>
        </div>
      </div>
    </div>
    <div class=" col-md-2 mt-2" style="float:left;">
      <div class="h4 font-14">
        <span style="font-family:arial;">₹
        </span>&nbsp;2,00,000
        </span>
    </div>
</div>
<div class=" col-md-4" style="float:left;">
  <div class="media-body mt-2">
    <div class="h4 font-14">Delivered on Dec 24, 2018
    </div>
    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
    </div>
  </div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row mb-3 " style="border:1px solid #ccc;">
  <div class="order_div col-md-12 pt-3 ">
    <div class="col-md-2 col-sm-12  mb-3" style="float:left;padding:3px !important;">
      <a href="order_details.php" class="btn btn-primary ordr_btn" style="margin-left:-10px;margin-top:-5px;background:transparent;padding:7px;">
        <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER NUMBER
        </h5>
        <div class="font-13 text-muted">
          <div class=" text-muted" style="color:#2949ef !important;">
            #ORDER123
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER AMOUNT
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          <span style="font-family:arial;">INR
          </span>20,000
          </span>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">CREATED DATE
    </h5>
    <div class="font-13 text-muted">
      <div class=" text-muted" style="color:#2949ef !important;">
        30 October 2019
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">COUPON CODE
    </h5>
    <div class="font-13 text-muted">
      <div class=" text-muted" style="color:#2949ef !important;">
        BEAUTY10XX
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">Status
    </h5>
    <div class="font-13 text-muted">
      <div class=" text-muted" style="color:#2949ef !important;">
        Product Pickup Confirmed
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <button class="btn btn-primary pull-right" style="color:#fff;background:#09d261;border:1px solid #09d261;" type="submit">Confirm
    </button>
   
  </div>
</div>
<div class="table-responsive">
  <table class="table invoice-table">
    <tbody>
      <tr class="" style="padding-top:10px;padding:bottom:14px;">
        <td >
          <div class="media col-md-6 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
            <span class="position-relative d-inline-block mr-4">
              <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
            </span>
            <div class="media-body mt-2">
              <div class="h4 font-14">Mi Basic Wired Headset with Mic
              </div>
              <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                <span>Color : Black
                </span>&nbsp;&nbsp;&nbsp;
                <span style="color:black;">|
                </span>&nbsp;&nbsp;&nbsp;
                <span>Discount : 30%
                </span>
              </div>
              <div class="text-muted" style="color: #878787;font-size: 12px;">
                <span>Size : UK 8
                </span>
              </div>
            </div>
          </div>
          <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
            <div class="h4 font-14">
              <span style="font-family:arial;">₹
              </span>&nbsp;20,0000
              </span>
          </div>
    </div>
      <div class=" col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
        <div class="media-body mt-2">
          <div class="h4 font-14">Delivered on Dec 24, 2018
          </div>
          <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
          </div>
        </div>
      </div>
    </td>
  </tr>
<tr class="" style="padding-top:10px;padding:bottom:14px;">
  <td >
    <div class="media col-md-6" style="padding:0px !important;float:left;">
      <span class="position-relative d-inline-block mr-4">
        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
      </span>
      <div class="media-body mt-2">
        <div class="h4 font-14">Mi Basic Wired Headset with Mic
        </div>
        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
          <span>Color : Black
          </span>&nbsp;&nbsp;&nbsp;
          <span style="color:black;">|
          </span>&nbsp;&nbsp;&nbsp;
          <span>Discount : 30%
          </span>
        </div>
        <div class="text-muted" style="color: #878787;font-size: 12px;">
          <span>Size : UK 8
          </span>
        </div>
      </div>
    </div>
    <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
      <div class="h4 font-14">
        <span style="font-family:arial;">₹
        </span>&nbsp;2,00,000
        </span>
    </div>
</div>
<div class="col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
  <div class="media-body mt-2">
    <div class="h4 font-14">Delivered on Dec 24, 2018
    </div>
    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
    </div>
  </div>
</div>
</td>
</tr>
<tr class="" style="padding-top:10px;padding:bottom:14px;">
  <td >
    <div class="media col-md-6" style="padding:0px !important;float:left;">
      <span class="position-relative d-inline-block mr-4">
        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
      </span>
      <div class="media-body mt-2">
        <div class="h4 font-14">Mi Basic Wired Headset with Mic
        </div>
        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
          <span>Color : Black
          </span>&nbsp;&nbsp;&nbsp;
          <span style="color:black;">|
          </span>&nbsp;&nbsp;&nbsp;
          <span>Discount : 30%
          </span>
        </div>
        <div class="text-muted" style="color: #878787;font-size: 12px;">
          <span>Size : UK 8
          </span>
        </div>
      </div>
    </div>
    <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
      <div class="h4 font-14">
        <span style="font-family:arial;">₹
        </span>&nbsp;2,00,000
        </span>
    </div>
</div>
<div class=" col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
  <div class="media-body mt-2">
    <div class="h4 font-14">Delivered on Dec 24, 2018
    </div>
    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
    </div>
  </div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="tab-pane fade" id="tab1-3">
  <div class="row mb-3"  style="border-bottom:1px solid #cccccc;">
    <div class="col-md-2 col-sm-12 col-xs-12 " style="padding:3px !important;">
      <label for="validationCustom04">Order Id
      </label>
      <input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter Order Id" required="">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label for="validationCustom04">Order Type
      </label>
      <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid" multiple="multiple">
        <optgroup label="Order Type">
          <option>Paid Orders
          </option>
          <option>COD Orders
          </option>
        </optgroup>
        <optgroup label="Shipping Api">
          <option>Delivery Orders From Delhivery
          </option>
          <option>Delivery Orders From India Post
          </option>
        </optgroup>
        <optgroup label="Wanted Program">
          <option>Wanted Assurance Program Orders
          </option>
          <option>Wanted Support Program Orders
          </option>
        </optgroup>
      </select>
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label >From
      </label>
      <input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Select Date">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label for="validationCustom04">To
      </label>
      <input class="form-control form-control-solid" id="datetimepicker_2" type="text" placeholder="Select Date">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label for="validationCustom04">Sort
      </label>
      <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
        <option selected disabled>Filters
        </option>
        <option>Highest First
        </option>
        <option>Lowest First
        </option>
        <option>Latest First
        </option>
        <option>Earliest First
        </option>
      </select>
    </div>
    <div class="col-md-1 col-sm-12 col-xs-12" style="padding:3px !important;">
      <button class="btn btn-primary clr" style="margin-top: 27px;" type="submit">
        <span class="btn-icon">
          <i class="ft-search">
          </i>Search
        </span>
      </button>
    </div>
  </div>
  <div class="row mb-3" style="border:1px solid #ccc;">
    <div class="order_div col-md-12 pt-3 ">
      <div class="col-md-2 col-sm-12  mb-3" style="float:left;padding:3px !important;">
        <a href="order_details.php" class="btn btn-primary ordr_btn" style="margin-left:-10px;margin-top:-5px;background:transparent;padding:7px;">
          <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER NUMBER
          </h5>
          <div class="font-13 text-muted">
            <div class=" text-muted" style="color:#2949ef !important;">
              #ORDER122
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
        <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER AMOUNT
        </h5>
        <div class="font-13 text-muted">
          <div class=" text-muted" style="color:#2949ef !important;">
            <span style="font-family:arial;">INR
            </span>20,000
            </span>
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">CREATED DATE
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          30 October 2019
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">COUPON CODE
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          BEAUTY10XX
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">Status
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          Confirm Refund Process
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <button class="btn btn-primary pull-right" style="color:#fff;background:#09d261;border:1px solid #09d261;" type="submit">Accept
      </button>
      <button class="btn btn-warning pull-right" style="background:#eb5757;color:#fff;margin-top:5px;" type="submit">Cancel  
      </button>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table invoice-table">
      <tbody>
        <tr class="" style="padding-top:10px;padding:bottom:14px;">
          <td >
            <div class="media col-md-6 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
              <span class="position-relative d-inline-block mr-4">
                <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
              </span>
              <div class="media-body mt-2">
                <div class="h4 font-14">Mi Basic Wired Headset with Mic
                </div>
                <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                  <span>Color : Black
                  </span>&nbsp;&nbsp;&nbsp;
                  <span style="color:black;">|
                  </span>&nbsp;&nbsp;&nbsp;
                  <span>Discount : 30%
                  </span>
                </div>
                <div class="text-muted" style="color: #878787;font-size: 12px;">
                  <span>Size : UK 8
                  </span>
                </div>
              </div>
            </div>
            <div class=" col-md-2 mt-2 col-sm-12 col-xs-12" style="float:left;">
              <div class="h4 font-14">
                <span style="font-family:arial;">₹
                </span>&nbsp;20,0000
                </span>
            </div>
      </div>
        <div class=" col-md-4 col-sm-12 col-xs-12" style="float:left;">
          <div class="media-body mt-2">
            <div class="h4 font-14">Delivered on Dec 24, 2018
            </div>
            <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
            </div>
          </div>
        </div>
      </td>
    </tr>
  <tr class="" style="padding-top:10px;padding:bottom:14px;">
    <td >
      <div class="media col-md-6" style="padding:0px !important;float:left;">
        <span class="position-relative d-inline-block mr-4">
          <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
        </span>
        <div class="media-body mt-2">
          <div class="h4 font-14">Mi Basic Wired Headset with Mic
          </div>
          <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
            <span>Color : Black
            </span>&nbsp;&nbsp;&nbsp;
            <span style="color:black;">|
            </span>&nbsp;&nbsp;&nbsp;
            <span>Discount : 30%
            </span>
          </div>
          <div class="text-muted" style="color: #878787;font-size: 12px;">
            <span>Size : UK 8
            </span>
          </div>
        </div>
      </div>
      <div class=" col-md-2 mt-2" style="float:left;">
        <div class="h4 font-14">
          <span style="font-family:arial;">₹
          </span>&nbsp;2,00,000
          </span>
      </div>
</div>
  <div class=" col-md-4" style="float:left;">
    <div class="media-body mt-2">
      <div class="h4 font-14">Delivered on Dec 24, 2018
      </div>
      <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
      </div>
    </div>
  </div>
  </td>
</tr>
<tr class="" style="padding-top:10px;padding:bottom:14px;">
  <td >
    <div class="media col-md-6" style="padding:0px !important;float:left;">
      <span class="position-relative d-inline-block mr-4">
        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
      </span>
      <div class="media-body mt-2">
        <div class="h4 font-14">Mi Basic Wired Headset with Mic
        </div>
        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
          <span>Color : Black
          </span>&nbsp;&nbsp;&nbsp;
          <span style="color:black;">|
          </span>&nbsp;&nbsp;&nbsp;
          <span>Discount : 30%
          </span>
        </div>
        <div class="text-muted" style="color: #878787;font-size: 12px;">
          <span>Size : UK 8
          </span>
        </div>
      </div>
    </div>
    <div class=" col-md-2 mt-2" style="float:left;">
      <div class="h4 font-14">
        <span style="font-family:arial;">₹
        </span>&nbsp;2,00,000
        </span>
    </div>
</div>
<div class=" col-md-4" style="float:left;">
  <div class="media-body mt-2">
    <div class="h4 font-14">Delivered on Dec 24, 2018
    </div>
    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
    </div>
  </div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row mb-3 " style="border:1px solid #ccc;">
  <div class="order_div col-md-12 pt-3 ">
    <div class="col-md-2 col-sm-12  mb-3" style="float:left;padding:3px !important;">
      <a href="order_details.php" class="btn btn-primary ordr_btn" style="margin-left:-10px;margin-top:-5px;background:transparent;padding:7px;">
        <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER NUMBER
        </h5>
        <div class="font-13 text-muted">
          <div class=" text-muted" style="color:#2949ef !important;">
            #ORDER123
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER AMOUNT
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          <span style="font-family:arial;">INR
          </span>20,000
          </span>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">CREATED DATE
    </h5>
    <div class="font-13 text-muted">
      <div class=" text-muted" style="color:#2949ef !important;">
        30 October 2019
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">COUPON CODE
    </h5>
    <div class="font-13 text-muted">
      <div class=" text-muted" style="color:#2949ef !important;">
        BEAUTY10XX
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">Status
    </h5>
    <div class="font-13 text-muted">
      <div class=" text-muted" style="color:#2949ef !important;">
        Confirm Replacement Process
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <button class="btn btn-primary pull-right" style="color:#fff;background:#09d261;border:1px solid #09d261;" type="submit">Accept
    </button>
    <button class="btn btn-warning pull-right" style="background:#eb5757;color:#fff;margin-top:5px;" type="submit">Cancel  
    </button>
  </div>
</div>
<div class="table-responsive">
  <table class="table invoice-table">
    <tbody>
      <tr class="" style="padding-top:10px;padding:bottom:14px;">
        <td >
          <div class="media col-md-6 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
            <span class="position-relative d-inline-block mr-4">
              <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
            </span>
            <div class="media-body mt-2">
              <div class="h4 font-14">Mi Basic Wired Headset with Mic
              </div>
              <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                <span>Color : Black
                </span>&nbsp;&nbsp;&nbsp;
                <span style="color:black;">|
                </span>&nbsp;&nbsp;&nbsp;
                <span>Discount : 30%
                </span>
              </div>
              <div class="text-muted" style="color: #878787;font-size: 12px;">
                <span>Size : UK 8
                </span>
              </div>
            </div>
          </div>
          <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
            <div class="h4 font-14">
              <span style="font-family:arial;">₹
              </span>&nbsp;20,0000
              </span>
          </div>
    </div>
      <div class=" col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
        <div class="media-body mt-2">
          <div class="h4 font-14">Delivered on Dec 24, 2018
          </div>
          <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
          </div>
        </div>
      </div>
    </td>
  </tr>
<tr class="" style="padding-top:10px;padding:bottom:14px;">
  <td >
    <div class="media col-md-6" style="padding:0px !important;float:left;">
      <span class="position-relative d-inline-block mr-4">
        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
      </span>
      <div class="media-body mt-2">
        <div class="h4 font-14">Mi Basic Wired Headset with Mic
        </div>
        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
          <span>Color : Black
          </span>&nbsp;&nbsp;&nbsp;
          <span style="color:black;">|
          </span>&nbsp;&nbsp;&nbsp;
          <span>Discount : 30%
          </span>
        </div>
        <div class="text-muted" style="color: #878787;font-size: 12px;">
          <span>Size : UK 8
          </span>
        </div>
      </div>
    </div>
    <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
      <div class="h4 font-14">
        <span style="font-family:arial;">₹
        </span>&nbsp;2,00,000
        </span>
    </div>
</div>
<div class="col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
  <div class="media-body mt-2">
    <div class="h4 font-14">Delivered on Dec 24, 2018
    </div>
    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
    </div>
  </div>
</div>
</td>
</tr>
<tr class="" style="padding-top:10px;padding:bottom:14px;">
  <td >
    <div class="media col-md-6" style="padding:0px !important;float:left;">
      <span class="position-relative d-inline-block mr-4">
        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
      </span>
      <div class="media-body mt-2">
        <div class="h4 font-14">Mi Basic Wired Headset with Mic
        </div>
        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
          <span>Color : Black
          </span>&nbsp;&nbsp;&nbsp;
          <span style="color:black;">|
          </span>&nbsp;&nbsp;&nbsp;
          <span>Discount : 30%
          </span>
        </div>
        <div class="text-muted" style="color: #878787;font-size: 12px;">
          <span>Size : UK 8
          </span>
        </div>
      </div>
    </div>
    <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
      <div class="h4 font-14">
        <span style="font-family:arial;">₹
        </span>&nbsp;2,00,000
        </span>
    </div>
</div>
<div class=" col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
  <div class="media-body mt-2">
    <div class="h4 font-14">Delivered on Dec 24, 2018
    </div>
    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
    </div>
  </div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="tab-pane fade" id="tab1-4">
  <div class="row mb-3"  style="border-bottom:1px solid #cccccc;">
    <div class="col-md-2 col-sm-12 col-xs-12 " style="padding:3px !important;">
      <label for="validationCustom04">Order Id
      </label>
      <input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter Order Id" required="">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label for="validationCustom04">Order Type
      </label>
      <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid" multiple="multiple">
        <optgroup label="Order Type">
          <option>Paid Orders
          </option>
          <option>COD Orders
          </option>
        </optgroup>
        <optgroup label="Shipping Api">
          <option>Delivery Orders From Delhivery
          </option>
          <option>Delivery Orders From India Post
          </option>
        </optgroup>
        <optgroup label="Wanted Program">
          <option>Wanted Assurance Program Orders
          </option>
          <option>Wanted Support Program Orders
          </option>
        </optgroup>
      </select>
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label >From
      </label>
      <input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Select Date">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label for="validationCustom04">To
      </label>
      <input class="form-control form-control-solid" id="datetimepicker_2" type="text" placeholder="Select Date">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
      <label for="validationCustom04">Sort
      </label>
      <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
        <option selected disabled>Filters
        </option>
        <option>Highest First
        </option>
        <option>Lowest First
        </option>
        <option>Latest First
        </option>
        <option>Earliest First
        </option>
      </select>
    </div>
    <div class="col-md-1 col-sm-12 col-xs-12" style="padding:3px !important;">
      <button class="btn btn-primary clr" style="margin-top: 27px;" type="submit">
        <span class="btn-icon">
          <i class="ft-search">
          </i>Search
        </span>
      </button>
    </div>
  </div>
  <div class="row mb-3" style="border:1px solid #ccc;">
    <div class="order_div col-md-12 pt-3 ">
      <div class="col-md-2 col-sm-12  mb-3" style="float:left;padding:3px !important;">
        <a href="order_details.php" class="btn btn-primary ordr_btn" style="margin-left:-10px;margin-top:-5px;background:transparent;padding:7px;">
          <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER NUMBER
          </h5>
          <div class="font-13 text-muted">
            <div class=" text-muted" style="color:#2949ef !important;">
              #ORDER122
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
        <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER AMOUNT
        </h5>
        <div class="font-13 text-muted">
          <div class=" text-muted" style="color:#2949ef !important;">
            <span style="font-family:arial;">INR
            </span>20,000
            </span>
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">CREATED DATE
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          30 October 2019
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">COUPON CODE
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          BEAUTY10XX
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">Status
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          Completed
        </div>
      </div>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table invoice-table">
      <tbody>
        <tr class="" style="padding-top:10px;padding:bottom:14px;">
          <td >
            <div class="media col-md-6 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
              <span class="position-relative d-inline-block mr-4">
                <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
              </span>
              <div class="media-body mt-2">
                <div class="h4 font-14">Mi Basic Wired Headset with Mic
                </div>
                <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                  <span>Color : Black
                  </span>&nbsp;&nbsp;&nbsp;
                  <span style="color:black;">|
                  </span>&nbsp;&nbsp;&nbsp;
                  <span>Discount : 30%
                  </span>
                </div>
                <div class="text-muted" style="color: #878787;font-size: 12px;">
                  <span>Size : UK 8
                  </span>
                </div>
              </div>
            </div>
            <div class=" col-md-2 mt-2 col-sm-12 col-xs-12" style="float:left;">
              <div class="h4 font-14">
                <span style="font-family:arial;">₹
                </span>&nbsp;20,0000
                </span>
            </div>
      </div>
        <div class=" col-md-4 col-sm-12 col-xs-12" style="float:left;">
          <div class="media-body mt-2">
            <div class="h4 font-14">Delivered on Dec 24, 2018
            </div>
            <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
            </div>
          </div>
        </div>
      </td>
    </tr>
  <tr class="" style="padding-top:10px;padding:bottom:14px;">
    <td >
      <div class="media col-md-6" style="padding:0px !important;float:left;">
        <span class="position-relative d-inline-block mr-4">
          <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
        </span>
        <div class="media-body mt-2">
          <div class="h4 font-14">Mi Basic Wired Headset with Mic
          </div>
          <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
            <span>Color : Black
            </span>&nbsp;&nbsp;&nbsp;
            <span style="color:black;">|
            </span>&nbsp;&nbsp;&nbsp;
            <span>Discount : 30%
            </span>
          </div>
          <div class="text-muted" style="color: #878787;font-size: 12px;">
            <span>Size : UK 8
            </span>
          </div>
        </div>
      </div>
      <div class=" col-md-2 mt-2" style="float:left;">
        <div class="h4 font-14">
          <span style="font-family:arial;">₹
          </span>&nbsp;2,00,000
          </span>
      </div>
</div>
  <div class=" col-md-4" style="float:left;">
    <div class="media-body mt-2">
      <div class="h4 font-14">Delivered on Dec 24, 2018
      </div>
      <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
      </div>
    </div>
  </div>
  </td>
</tr>
<tr class="" style="padding-top:10px;padding:bottom:14px;">
  <td >
    <div class="media col-md-6" style="padding:0px !important;float:left;">
      <span class="position-relative d-inline-block mr-4">
        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
      </span>
      <div class="media-body mt-2">
        <div class="h4 font-14">Mi Basic Wired Headset with Mic
        </div>
        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
          <span>Color : Black
          </span>&nbsp;&nbsp;&nbsp;
          <span style="color:black;">|
          </span>&nbsp;&nbsp;&nbsp;
          <span>Discount : 30%
          </span>
        </div>
        <div class="text-muted" style="color: #878787;font-size: 12px;">
          <span>Size : UK 8
          </span>
        </div>
      </div>
    </div>
    <div class=" col-md-2 mt-2" style="float:left;">
      <div class="h4 font-14">
        <span style="font-family:arial;">₹
        </span>&nbsp;2,00,000
        </span>
    </div>
</div>
<div class=" col-md-4" style="float:left;">
  <div class="media-body mt-2">
    <div class="h4 font-14">Delivered on Dec 24, 2018
    </div>
    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
    </div>
  </div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row mb-3 " style="border:1px solid #ccc;">
  <div class="order_div col-md-12 pt-3 ">
    <div class="col-md-2 col-sm-12  mb-3" style="float:left;padding:3px !important;">
      <a href="order_details.php" class="btn btn-primary ordr_btn" style="margin-left:-10px;margin-top:-5px;background:transparent;padding:7px;">
        <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER NUMBER
        </h5>
        <div class="font-13 text-muted">
          <div class=" text-muted" style="color:#2949ef !important;">
            #ORDER123
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
      <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">ORDER AMOUNT
      </h5>
      <div class="font-13 text-muted">
        <div class=" text-muted" style="color:#2949ef !important;">
          <span style="font-family:arial;">INR
          </span>20,000
          </span>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">CREATED DATE
    </h5>
    <div class="font-13 text-muted">
      <div class=" text-muted" style="color:#2949ef !important;">
        30 October 2019
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">COUPON CODE
    </h5>
    <div class="font-13 text-muted">
      <div class=" text-muted" style="color:#2949ef !important;">
        BEAUTY10XX
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-6 col-xs-6 mb-3" style="float:left;padding:3px !important;">
    <h5 class="text-primary mb-1 font-15" style="color:#343a40 !important;">Return Status
    </h5>
    <div class="font-13 text-muted">
      <div class=" text-muted" style="color:#2949ef !important;">
        Out For Delivery
      </div>
    </div>
  </div>
</div>
<div class="table-responsive">
  <table class="table invoice-table">
    <tbody>
      <tr class="" style="padding-top:10px;padding:bottom:14px;">
        <td >
          <div class="media col-md-6 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
            <span class="position-relative d-inline-block mr-4">
              <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
            </span>
            <div class="media-body mt-2">
              <div class="h4 font-14">Mi Basic Wired Headset with Mic
              </div>
              <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
                <span>Color : Black
                </span>&nbsp;&nbsp;&nbsp;
                <span style="color:black;">|
                </span>&nbsp;&nbsp;&nbsp;
                <span>Discount : 30%
                </span>
              </div>
              <div class="text-muted" style="color: #878787;font-size: 12px;">
                <span>Size : UK 8
                </span>
              </div>
            </div>
          </div>
          <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
            <div class="h4 font-14">
              <span style="font-family:arial;">₹
              </span>&nbsp;20,0000
              </span>
          </div>
    </div>
      <div class=" col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
        <div class="media-body mt-2">
          <div class="h4 font-14">Delivered on Dec 24, 2018
          </div>
          <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
          </div>
        </div>
      </div>
    </td>
  </tr>
<tr class="" style="padding-top:10px;padding:bottom:14px;">
  <td >
    <div class="media col-md-6" style="padding:0px !important;float:left;">
      <span class="position-relative d-inline-block mr-4">
        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
      </span>
      <div class="media-body mt-2">
        <div class="h4 font-14">Mi Basic Wired Headset with Mic
        </div>
        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
          <span>Color : Black
          </span>&nbsp;&nbsp;&nbsp;
          <span style="color:black;">|
          </span>&nbsp;&nbsp;&nbsp;
          <span>Discount : 30%
          </span>
        </div>
        <div class="text-muted" style="color: #878787;font-size: 12px;">
          <span>Size : UK 8
          </span>
        </div>
      </div>
    </div>
    <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
      <div class="h4 font-14">
        <span style="font-family:arial;">₹
        </span>&nbsp;2,00,000
        </span>
    </div>
</div>
<div class="col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
  <div class="media-body mt-2">
    <div class="h4 font-14">Delivered on Dec 24, 2018
    </div>
    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
    </div>
  </div>
</div>
</td>
</tr>
<tr class="" style="padding-top:10px;padding:bottom:14px;">
  <td >
    <div class="media col-md-6" style="padding:0px !important;float:left;">
      <span class="position-relative d-inline-block mr-4">
        <img class="rounded-lg" src="images/vendor-images/nike.png" alt="image" width="100">
      </span>
      <div class="media-body mt-2">
        <div class="h4 font-14">Mi Basic Wired Headset with Mic
        </div>
        <div class="text-muted mb-1" style="color: #878787;font-size: 12px;">
          <span>Color : Black
          </span>&nbsp;&nbsp;&nbsp;
          <span style="color:black;">|
          </span>&nbsp;&nbsp;&nbsp;
          <span>Discount : 30%
          </span>
        </div>
        <div class="text-muted" style="color: #878787;font-size: 12px;">
          <span>Size : UK 8
          </span>
        </div>
      </div>
    </div>
    <div class=" col-md-2 mt-2 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
      <div class="h4 font-14">
        <span style="font-family:arial;">₹
        </span>&nbsp;2,00,000
        </span>
    </div>
</div>
<div class=" col-md-4 col-sm-8 sm-offset-4 col-xs-8 xs-offset-4" style="float:left;">
  <div class="media-body mt-2">
    <div class="h4 font-14">Delivered on Dec 24, 2018
    </div>
    <div class="text-muted" style="color: #878787;font-size: 12px;">Your item has been delivered
    </div>
  </div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mt-5 row">
  <div class="col-md-6 col-sm-12">
    <button class="btn btn-primary btn-fix" type="button">Download As Csv Data File
    </button>&nbsp;
    <button class="btn btn-primary active btn-fix" type="button">Download As Pdf File
    </button>
  </div>
  <div class="col-md-6 col-sm-12">
    <nav aria-label="..." class="col-sm-12">
      <ul class="pagination justify-content-end">
        <li class="page-item disabled">
          <a class="page-link" href="#">Previous
          </a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="#">1
          </a>
        </li>
        <li class="page-item ">
          <a class="page-link" href="#">2
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">Next
          </a>
        </li>
      </ul>
    </nav>
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

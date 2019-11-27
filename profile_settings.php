<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Profile | Wanted 7
    </title>
	 <?php
		include("common/metalinks.php");
	?>
    <!-- PAGE LEVEL STYLES-->
    <style>
      .data-widget-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 40px;
        color: #6a89d7;
      }
    </style>
    <style>
      .articles-list-title {
        position: relative;
        padding-bottom: 11px;
        margin-bottom: 20px;
        font-size: 16px;
        text-transform: uppercase;
      }
      .articles-list-title:after {
        content: "";
        background: #2949EF;
        width: 50px;
        height: 2px;
        bottom: 0;
        left: 0;
        position: absolute;
        z-index: 1;
      }
      .articles-list .nav-link {
        padding: 0.5rem 0;
        color: inherit;
        font-size: 15px;
      }
      .articles-list .nav-link:hover {
        color: #0e2abd;
      }
      .kbase-heading {
        position: relative;
        background-image: url(./assets/img/blog/19.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
      }
      .kbase-heading:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: rgba(0, 0, 0, .4);
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
            <div class="page-heading" style="padding-left:17px;padding-right:17px;">
              <div class="page-breadcrumb">
                <h1 class="page-title">Store Information
                </h1>
              </div>
              <button class="btn btn-primary  " data-toggle="modal" data-target="#new-question-dialog" style="background-color:#7613a7;border:1px solid #7613a7">
                <span class="btn-icon">
                  <i class="ti-star">
                  </i>
                  Add Another Store
                </span>
              </button>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="col-lg-12" style="border-bottom:1px solid #cccccc;padding-bottom:12px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
					  <button class="btn btn-primary btn-fix" style="float:right;"><span class="btn-icon"><i class="ti-pencil"></i>Edit</span></button>
                        <h5 class="mb-4 articles-list-title">Store 1
                        </h5>
						
                        <div class="nav flex-column articles-list mb-3">
                          <a class="nav-link d-flex align-items-center" href="#">
                            <b>Biltmore Hotel And Suites Santa Clara Hotel</b>
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            2151 Laurewood Road
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            Santa Clara,CA 95054-2754
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                           United States
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            Phone: 4089887456
                          </a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
				 <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
					  <button class="btn btn-primary btn-fix" style="float:right;"><span class="btn-icon"><i class="ti-pencil"></i>Edit</span></button>
                        <h5 class="mb-4 articles-list-title">Store 2
                        </h5>
                        <div class="nav flex-column articles-list mb-3">
                          <a class="nav-link d-flex align-items-center" href="#">
                            <b>Biltmore Hotel And Suites Santa Clara Hotel</b>
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            2151 Laurewood Road
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            Santa Clara,CA 95054-2754
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                           United States
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            Phone: 4089887456
                          </a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
				 </div>
			</div>
				  <div class="page-heading" style="padding-top:12px;padding-left:17px;padding-right:17px;">
				  <div class="page-breadcrumb">
					<h1 class="page-title">Banking Information
					</h1>
				  </div>
				  <button class="btn btn-primary  " data-toggle="modal" data-target="#new-question-dialog" style="background-color:#7613a7;border:1px solid #7613a7">
					<span class="btn-icon">
					  <i class="ti-star">
					  </i>
					  Add Another Bank
					</span>
				  </button>
				</div>
				<div class="col-lg-12" style="padding-top:12px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
					  <button class="btn btn-primary btn-fix" style="float:right;"><span class="btn-icon"><i class="ti-pencil"></i>Edit</span></button>
                        <h5 class="mb-4 articles-list-title">Bank Details
                        </h5>
                        <div class="nav flex-column articles-list mb-3">
                          <a class="nav-link d-flex align-items-center" href="#">
                            <b>DHEERAJ SOOD</b>
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            0157010302976
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            BANK OF INDIA
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                           INDIA SOUTH
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            2078
                          </a>
                        </div>
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
    <!-- BEGIN: Search form-->
	 <?php
		include("common/extra.php");
    ?>
    <!-- END: Page backdrops-->
    <!-- CORE PLUGINS-->
	<?php
		include("common/scripts.php");
	?>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
      $(function() {
        var MONTHS_SH = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        var DAYS_S = ["S", "M", "T", "W", "T", "F", "S"];
        var DAYS = ["Sunday", "Munday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        var color = Chart.helpers.color;
        (function() {
          var dr = $('#subheader_daterange');
          if (dr.length) {
            var t = moment();
            var a = moment();
            dr.daterangepicker({
              startDate: t,
              endDate: a,
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              }
              ,
            }
                               , f),
              f(t, a, "");
          }
          function f(t, a, r) {
            var o = "",
                n = "";
            a - t < 100 || "Today" == r ?
              (o = "Today:", n = t.format("MMM D")) :
            "Yesterday" == r ? (o = "Yesterday:", n = t.format("MMM D")) :
            n = t.format("MMM D") + " - " + a.format("MMM D"), dr.find(".subheader-daterange-date").html(n), dr.find(".subheader-daterange-title").html(o)
          }
        }
        )();
        $('.easypie').each(function() {
          $(this).easyPieChart({
            trackColor: $(this).attr('data-trackColor') || '#f2f2f2',
            scaleColor: false,
          }
                              );
        }
                          );
        if ($('#line_chart_1').length) {
          var ctx = document.getElementById("line_chart_1").getContext("2d");
          new Chart(ctx, {
            type: 'line',
            showScale: false,
            data: {
              labels: MONTHS_SH,
              datasets: [{
                label: 'Dataset 1',
                data: [60, 30, 80, 45, 90, 62, 85, 35, 75, 45, 90, 35],
                data: [10, 30, 20, 40, 30, 50, 40, 60, 50, 70, 60, 80],
                backgroundColor: color(theme_color('primary')).alpha(0.4).rgbString(),
                borderColor: theme_color('primary'),
                fill: false,
                pointRadius: 5,
                pointHitRadius: 30,
                pointHoverBorderWidth: 2,
                pointHoverRadius: 7,
                pointBackgroundColor: '#fff',
              }
                        ]
            }
            ,
            options: {
              responsive: true,
              maintainAspectRatio: false,
              scales: {
                xAxes: [{
                  gridLines: {
                    display: false,
                    max: 60,
                  }
                  ,
                }
                       ],
                yAxes: [{
                  gridLines: {
                    drawBorder: false,
                  }
                  ,
                  ticks: {
                    beginAtZero: true,
                  }
                }
                       ]
              }
              ,
              legend: {
                labels: {
                  boxWidth: 12
                }
              }
              ,
            }
          }
                   );
        }
        if ($('#horizonal_bars').length) {
          var ctx = document.getElementById("horizonal_bars").getContext("2d");
          new Chart(ctx, {
            type: 'horizontalBar',
            data: {
              labels: ['PayPal', 'Visa', 'Mastercard', 'Eps', 'JCB', 'Others'],
              datasets: [{
                label: 'Dataset 1',
                backgroundColor: theme_color('info'),
                //borderColor: theme_color('info'),
                //borderWidth: 1,
                data: [80, 70, 60, 50, 40, 30, 20],
              }
                        ]
            }
            ,
            options: {
              showScale: false,
              elementxs: {
                rectangle: {
                  borderWidth: 2,
                }
              }
              ,
              scales: {
                xAxes: [{
                  gridLine: {
                    display: false,
                  }
                  ,
                }
                       ],
                yAxes: [{
                  gridLines: {
                    display: false,
                    drawBorderx: false,
                  }
                  ,
                  barPercentage: 0.7,
                }
                       ]
              }
              ,
              responsive: true,
            }
          }
                   );
        }
        if ($('#pie_chart_1').length) {
          var ctx = document.getElementById("pie_chart_1").getContext("2d");
          new Chart(ctx, {
            type: 'doughnut',
            data: {
              labels: ['In-Store Sales', 'Online Sales'],
              datasets: [{
                data: [80, 20],
                backgroundColor: [
                  theme_color('primary'),
                  theme_color('info'),
                ],
              }
                        ]
            }
            ,
            options: {
              responsive: true,
              legend: {
                display: false
              }
              ,
              cutoutPercentage: 65,
            }
          }
                   );
        }
        if ($('#bar_chart_sm').length) {
          var ctx = document.getElementById("bar_chart_sm").getContext("2d");
          new Chart(ctx, {
            type: 'bar',
            data: {
              labels: DAYS,
              datasets: [{
                backgroundColor: theme_color("primary"),
                data: [45, 80, 58, 74, 54, 59, 40]
              }
                         , {
                           backgroundColor: theme_color('light'),
                           data: [29, 48, 40, 19, 78, 31, 85]
                         }
                        ]
            }
            ,
            options: {
              title: {
                display: !1
              }
              ,
              legend: {
                display: !1
              }
              ,
              responsive: !0,
              maintainAspectRatio: !1,
              scales: {
                xAxes: [{
                  display: !1,
                  gridLines: !1,
                }
                       ],
                yAxes: [{
                  display: !1,
                  gridLines: !1
                }
                       ]
              }
              ,
              layout: {
                padding: 0
              }
            }
          }
                   );
        }
        if ($('#world_map').length) {
          var markers = [{
            latLng: [55.524010, 105.318756],
            name: 'Russia',
            visits: 1000
          }
                         ,
                         {
                           latLng: [60.128161, 18.643501],
                           name: 'Sweden',
                           visits: 1000
                         }
                         ,
                         {
                           latLng: [35.861660, 104.195397],
                           name: 'China',
                           visits: 1000
                         }
                         ,
                         {
                           latLng: [37.090240, -95.712891],
                           name: 'USA(Neda Shine)',
                           visits: 1000
                         }
                         ,
                         {
                           latLng: [52.130366, -92.346771],
                           name: 'Canada',
                           visits: 1000
                         }
                         ,
                         {
                           latLng: [-25.274398, 133.775136],
                           name: 'Austrlia(Neda Shine)',
                           visits: 1000
                         }
                         ,
                         {
                           latLng: [51.165691, 10.451526],
                           name: 'Germany',
                           visits: 1000
                         }
                         ,
                         {
                           latLng: [26.02, 50.55],
                           name: 'Bahrain',
                           visits: 1000
                         }
                         ,
                         {
                           latLng: [-3, -61.38],
                           name: 'Brazil',
                           visits: 1000
                         }
                         ,
                        ];
          $('#world_map').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            scale: 5,
            focusOn: {
              scale: 1,
              x: 0.5,
              y: 0.5,
            }
            ,
            regionStyle: {
              initial: {
                fill: '#DADDE0',
              }
            }
            ,
            markers: markers,
            markerStyle: {
              initial: {
                fill: theme_color('primary'), // '#ff4081',
                stroke: '#b9d0ff', // '#ffc6d9',
                "stroke-width": 5,
                r: 8
              }
              ,
              hover: {
                fill: theme_color('primary'),
                stroke: '#b9d0ff',
              }
            }
            ,
            onMarkerTipShow: function(e, label, index) {
              label.html('' + markers[index].name + ' (Visits - ' + markers[index].visits);
            }
            ,
          }
                                   );
        }
        var table = $('#dt-filter').DataTable({
          responsive: true,
          "sDom": 'rtip',
          columnDefs: [{
            targets: 'no-sort',
            orderable: false
          }
                      ]
        }
                                             );
        $('#key-search').on('keyup', function() {
          table.search(this.value).draw();
        }
                           );
        $('#type-filter').on('change', function() {
          table.column(4).search($(this).val()).draw();
        }
                            );
      }
       );
    </script>
  </body>
</html>

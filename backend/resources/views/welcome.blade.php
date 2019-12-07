<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/azia/v1.0.0/template/dashboard-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2019 10:24:02 GMT -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body class="az-body">

    <div class="az-header shadow-none">
      <div class="container-fluid">
        <div class="az-header-left">
          <a href="#" class="az-logo">az<span>i</span>a</a>
          <a href="#" id="azNavShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-center">
          <input type="search" class="form-control" placeholder="Search for schedules and events...">
          <button class="btn"><i class="fas fa-search"></i></button>
        </div><!-- az-header-center -->
        <div class="az-header-right">
          <div class="az-header-message">
            <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
          </div><!-- az-header-message -->
          <div class="dropdown az-header-notification">
            <a href="#" class="new"><i class="typcn typcn-bell"></i></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have 2 unread notification</p>
              <div class="az-notification-list">
                <div class="media new">
                  <div class="az-img-user"><img src="../img/img2.jpg" alt=""></div>
                  <div class="media-body">
                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                    <span>Mar 15 12:32pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media new">
                  <div class="az-img-user online"><img src="../img/img3.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                    <span>Mar 13 04:16am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="../img/img4.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                    <span>Mar 13 02:56am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="../img/img5.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                    <span>Mar 12 10:40pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- az-notification-list -->
              <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
            </div><!-- dropdown-menu -->
          </div><!-- az-header-notification -->
          <div class="dropdown az-profile-menu">
            <a href="#" class="az-img-user"><img src="../img/img1.jpg" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="../img/img1.jpg" alt="">
                </div><!-- az-img-user -->
                <h6>Aziana Pechon</h6>
                <span>Premium Member</span>
              </div><!-- az-header-profile -->

              <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
              <a href="#" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
              <a href="#" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
             
             <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="typcn typcn-power-outline"></i> Sign Out</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-navbar az-navbar-dashboard-four">
      <div class="container-fluid">
        <div class="az-navbar-header">
          <a href="/home" class="az-logo">az<span>i</span>a</a>
        </div><!-- az-navbar-header -->
        <div class="az-navbar-search">
          <input type="search" class="form-control" placeholder="Search for anything...">
          <button class="btn"><i class="fas fa-search "></i></button>
        </div><!-- az-navbar-search -->
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item active show">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link">Web Analytics</a></li>
              <li class="nav-sub-item"><a href="dashboard-two.html" class="nav-sub-link">Sales Monitoring</a></li>
              <li class="nav-sub-item"><a href="dashboard-three.html" class="nav-sub-link">Ad Campaign</a></li>
              <li class="nav-sub-item active"><a href="dashboard-four.html" class="nav-sub-link">Event Management</a></li>
              <li class="nav-sub-item"><a href="dashboard-five.html" class="nav-sub-link">Helpdesk Management</a></li>
              <li class="nav-sub-item"><a href="dashboard-six.html" class="nav-sub-link">Finance Monitoring</a></li>
              <li class="nav-sub-item"><a href="dashboard-seven.html" class="nav-sub-link">Cryptocurrency</a></li>
              <li class="nav-sub-item"><a href="dashboard-eight.html" class="nav-sub-link">Executive / SaaS</a></li>
              <li class="nav-sub-item"><a href="dashboard-nine.html" class="nav-sub-link">Campaign Monitoring</a></li>
              <li class="nav-sub-item"><a href="dashboard-ten.html" class="nav-sub-link">Product Management</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-folder"></i>Apps</a>
            <ul class="nav-sub">
              <li class="nav-sub-item">
                <a href="app-mail.html" class="nav-sub-link">Mailbox</a>
              </li>
              <li class="nav-sub-item">
                <a href="app-chat.html" class="nav-sub-link">Chat</a>
              </li>
              <li class="nav-sub-item">
                <a href="app-calendar.html" class="nav-sub-link">Calendar</a>
              </li>
              <li class="nav-sub-item">
                <a href="app-contacts.html" class="nav-sub-link">Contacts</a>
              </li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-document"></i>Pages</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="page-profile.html" class="nav-sub-link">Profile</a></li>
              <li class="nav-sub-item"><a href="page-invoice.html" class="nav-sub-link">Invoice</a></li>
              <li class="nav-sub-item"><a href="page-signin.html" class="nav-sub-link">Sign In</a></li>
              <li class="nav-sub-item"><a href="page-signup.html" class="nav-sub-link">Sign Up</a></li>
              <li class="nav-sub-item"><a href="page-404.html" class="nav-sub-link">Page 404</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item nav-item-mega">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i>Components</a>
            <div class="nav-sub nav-sub-mega">
              <div class="container-fluid">
                <div>
                  <ul class="nav">
                    <li><span>UI Elements</span></li>
                    <li class="nav-sub-item"><a href="elem-accordion.html" class="nav-sub-link active">Accordion</a></li>
                    <li class="nav-sub-item"><a href="elem-alerts.html" class="nav-sub-link">Alerts</a></li>
                    <li class="nav-sub-item"><a href="elem-avatar.html" class="nav-sub-link">Avatar</a></li>
                    <li class="nav-sub-item"><a href="elem-badge.html" class="nav-sub-link">Badge</a></li>
                    <li class="nav-sub-item"><a href="elem-breadcrumbs.html" class="nav-sub-link">Breadcrumbs</a></li>
                    <li class="nav-sub-item"><a href="elem-buttons.html" class="nav-sub-link">Buttons</a></li>
                    <li class="nav-sub-item"><a href="elem-cards.html" class="nav-sub-link">Cards</a></li>
                    <li class="nav-sub-item"><a href="elem-carousel.html" class="nav-sub-link">Carousel</a></li>
                  </ul>
                  <ul class="nav">
                    <li class="nav-sub-item"><a href="elem-collapse.html" class="nav-sub-link">Collapse</a></li>
                    <li class="nav-sub-item"><a href="elem-dropdown.html" class="nav-sub-link">Dropdown</a></li>
                    <li class="nav-sub-item"><a href="elem-icons.html" class="nav-sub-link">Icons</a></li>
                    <li class="nav-sub-item"><a href="elem-images.html" class="nav-sub-link">Images</a></li>
                    <li class="nav-sub-item"><a href="elem-list-group.html" class="nav-sub-link">List Group</a></li>
                    <li class="nav-sub-item"><a href="elem-media-object.html" class="nav-sub-link">Media Object</a></li>
                    <li class="nav-sub-item"><a href="elem-modals.html" class="nav-sub-link">Modals</a></li>
                    <li class="nav-sub-item"><a href="elem-navigation.html" class="nav-sub-link">Navigation</a></li>
                  </ul>
                  <ul class="nav">
                    <li class="nav-sub-item"><a href="elem-pagination.html" class="nav-sub-link">Pagination</a></li>
                    <li class="nav-sub-item"><a href="elem-popover.html" class="nav-sub-link">Popover</a></li>
                    <li class="nav-sub-item"><a href="elem-progress.html" class="nav-sub-link">Progress</a></li>
                    <li class="nav-sub-item"><a href="elem-spinners.html" class="nav-sub-link">Spinners</a></li>
                    <li class="nav-sub-item"><a href="elem-toast.html" class="nav-sub-link">Toast</a></li>
                    <li class="nav-sub-item"><a href="elem-tooltip.html" class="nav-sub-link">Tooltip</a></li>
                  </ul>
                </div>
                <div>
                  <ul class="nav">
                    <li><span>Forms</span></li>
                    <li class="nav-sub-item"><a href="form-elements.html" class="nav-sub-link">Form Elements</a></li>
                    <li class="nav-sub-item"><a href="form-layouts.html" class="nav-sub-link">Form Layouts</a></li>
                    <li class="nav-sub-item"><a href="form-validation.html" class="nav-sub-link">Form Validation</a></li>
                    <li class="nav-sub-item"><a href="form-wizards.html" class="nav-sub-link">Form Wizards</a></li>
                    <li class="nav-sub-item"><a href="form-editor.html" class="nav-sub-link">WYSIWYG Editor</a></li>
                  </ul>
                </div>
                <div>
                  <ul class="nav">
                    <li><span>Charts</span></li>
                    <li class="nav-sub-item"><a href="chart-morris.html" class="nav-sub-link">Morris Charts</a></li>
                    <li class="nav-sub-item"><a href="chart-flot.html" class="nav-sub-link">Flot Charts</a></li>
                    <li class="nav-sub-item"><a href="chart-chartjs.html" class="nav-sub-link">ChartJS</a></li>
                    <li class="nav-sub-item"><a href="chart-sparkline.html" class="nav-sub-link">Sparkline</a></li>
                    <li class="nav-sub-item"><a href="chart-peity.html" class="nav-sub-link">Peity</a></li>
                  </ul>
                </div>
                <div>
                  <ul class="nav">
                    <li><span>Maps</span></li>
                    <li class="nav-sub-item"><a href="map-google.html" class="nav-sub-link">Google Maps</a></li>
                    <li class="nav-sub-item"><a href="map-leaflet.html" class="nav-sub-link">Leaflet</a></li>
                    <li class="nav-sub-item"><a href="map-vector.html" class="nav-sub-link">Vector Maps</a></li>
                    <li><span>Tables</span></li>
                    <li class="nav-sub-item"><a href="table-basic.html" class="nav-sub-link">Basic Tables</a></li>
                    <li class="nav-sub-item"><a href="table-data.html" class="nav-sub-link">Data Tables</a></li>
                  </nav>
                </div>
              </div><!-- container -->
            </div><!-- nav-sub -->
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Utilities</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="util-background.html" class="nav-sub-link">Background</a></li>
              <li class="nav-sub-item"><a href="util-border.html" class="nav-sub-link">Border</a></li>
              <li class="nav-sub-item"><a href="util-display.html" class="nav-sub-link">Display</a></li>
              <li class="nav-sub-item"><a href="util-flex.html" class="nav-sub-link">Flex</a></li>
              <li class="nav-sub-item"><a href="util-height.html" class="nav-sub-link">Height</a></li>
              <li class="nav-sub-item"><a href="util-margin.html" class="nav-sub-link">Margin</a></li>
              <li class="nav-sub-item"><a href="util-padding.html" class="nav-sub-link">Padding</a></li>
              <li class="nav-sub-item"><a href="util-position.html" class="nav-sub-link">Position</a></li>
              <li class="nav-sub-item"><a href="util-typography.html" class="nav-sub-link">Typography</a></li>
              <li class="nav-sub-item"><a href="util-width.html" class="nav-sub-link">Width</a></li>
              <li class="nav-sub-item"><a href="util-extras.html" class="nav-sub-link">Extras</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
                <a  href="/evenmt" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Create Event</a>
                <ul class="nav-sub">
                  {{-- <li class="nav-sub-item"><a href="util-background.html" class="nav-sub-link">Background</a></li>
                  <li class="nav-sub-item"><a href="util-border.html" class="nav-sub-link">Border</a></li>
                  <li class="nav-sub-item"><a href="util-display.html" class="nav-sub-link">Display</a></li>
                  <li class="nav-sub-item"><a href="util-flex.html" class="nav-sub-link">Flex</a></li>
                  <li class="nav-sub-item"><a href="util-height.html" class="nav-sub-link">Height</a></li>
                  <li class="nav-sub-item"><a href="util-margin.html" class="nav-sub-link">Margin</a></li>
                  <li class="nav-sub-item"><a href="util-padding.html" class="nav-sub-link">Padding</a></li>
                  <li class="nav-sub-item"><a href="util-position.html" class="nav-sub-link">Position</a></li>
                  <li class="nav-sub-item"><a href="util-typography.html" class="nav-sub-link">Typography</a></li>
                  <li class="nav-sub-item"><a href="util-width.html" class="nav-sub-link">Width</a></li> --}}
                  <li class="nav-sub-item"><a href="{{ route('evenmt.create') }}" class="nav-sub-link">Creer une evenement</a></li>
                  <li class="nav-sub-item"><a href="/evenmt" class="nav-sub-link">list Event</a></li>

                  {{-- <a href="/evenmt"> list Event</a> --}}

                  {{-- <a class="nav-sub-link" href="{{ route('evenmt.create') }}"> Creer une evenement</a> --}}
                </ul>
              </li><!-- nav-item -->

        </ul><!-- nav -->
      </div><!-- container-fluid -->
    </div><!-- az-navbar -->

    <div class="az-content az-content-dashboard-four">
      <div class="media media-dashboard">
        <div class="media-body">
          <div class="az-content-header">

                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- sales-overview -->
            </div><!-- card-header -->
            <div class="card-body">
                <section class="events-area section-gap" id="create_event">
                    <div class="container">
                            <div class="container">
                                    @yield('content1')
                                </div>
                    </div>
                    
                </section>
            
         
            </div><!-- card-body -->

      
    <div class="az-footer ht-40">
      <div class="container-fluid pd-t-0-f ht-100p">
        <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
      </div><!-- container -->
    </div><!-- az-footer -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.pie.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../lib/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="../js/azia.js"></script>
    <script src="../js/chart.flot.sampledata.js"></script>
    <script>
      $(function(){
        'use strict'

        // Datepicker found in left sidebar of the page
        var highlightedDays = ['2018-5-10','2018-5-11','2018-5-12','2018-5-13','2018-5-14','2018-5-15','2018-5-16'];
        var date = new Date();

        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          dateFormat: 'yy-mm-dd',
          beforeShowDay: function(date) {
            var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
            for (var i = 0; i < highlightedDays.length; i++) {
              if($.inArray(y + '-' + (m+1) + '-' + d,highlightedDays) != -1) {
                return [true, 'ui-date-highlighted', ''];
              }
            }
            return [true];
          }
        });

        var plot1 = $.plot('#flotChart', [{
            data: flotSampleData5,
            color: '#6610f2'
          },{
            data: flotSampleData3,
            color: '#00cccc'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            borderColor: '#969dab',
            labelMargin: 5,
            markings: [{
              xaxis: { from: 10, to: 20 },
              color: '#f7f7f7'
            }]
          },
    			yaxis: {
            show: false,
            color: '#ced4da',
            tickLength: 10,
            min: 0,
            max: 110,
            font: {
              size: 11,
              color: '#969dab'
            },
            tickFormatter: function formatter(val, axis) {
              return val + 'k';
            }
          },
    			xaxis: {
            show: false,
            position: 'top',
            color: 'rgba(0,0,0,0.1)'
          }
    		});

        var mqSM = window.matchMedia('(min-width: 576px)');
        var mqSMMD = window.matchMedia('(min-width: 576px) and (max-width: 991px)');
        var mqLG = window.matchMedia('(min-width: 992px)');

        function screenCheck() {
          if (mqSM.matches) {
            plot1.getAxes().yaxis.options.show = true;
            plot1.getAxes().xaxis.options.show = true;
          } else {
            plot1.getAxes().yaxis.options.show = false;
            plot1.getAxes().xaxis.options.show = false;
          }

          if (mqSMMD.matches) {
            var tick = [
              [0, '<span>Oct</span><span>10</span>'],
              [20, '<span>Oct</span><span>12</span>'],
              [40, '<span>Oct</span><span>14</span>'],
              [60, '<span>Oct</span><span>16</span>'],
              [80, '<span>Oct</span><span>18</span>'],
              [100, '<span>Oct</span><span>19</span>'],
              [120, '<span>Oct</span><span>20</span>'],
              [140, '<span>Oct</span><span>23</span>']
            ];

            plot1.getAxes().xaxis.options.ticks = tick;
          }

          if (mqLG.matches) {
            var tick = [
              [10, '<span>Oct</span><span>10</span>'],
              [20, '<span>Oct</span><span>11</span>'],
              [30, '<span>Oct</span><span>12</span>'],
              [40, '<span>Oct</span><span>13</span>'],
              [50, '<span>Oct</span><span>14</span>'],
              [60, '<span>Oct</span><span>15</span>'],
              [70, '<span>Oct</span><span>16</span>'],
              [80, '<span>Oct</span><span>17</span>'],
              [90, '<span>Oct</span><span>18</span>'],
              [100, '<span>Oct</span><span>19</span>'],
              [110, '<span>Oct</span><span>20</span>'],
              [120, '<span>Oct</span><span>21</span>'],
              [130, '<span>Oct</span><span>22</span>'],
              [140, '<span>Oct</span><span>23</span>']
            ];

            plot1.getAxes().xaxis.options.ticks = tick;
          }
        }

        screenCheck();
        mqSM.addListener(screenCheck);
        mqSMMD.addListener(screenCheck);
        mqLG.addListener(screenCheck);

        plot1.setupGrid();
        plot1.draw();

        $.plot('#flotPie', [
          { label: 'Interested', data: [[1,25]], color: '#6f42c1'},
          { label: 'Going', data: [[1,38]], color: '#007bff'},
          { label: 'Maybe', data: [[1,20]], color: '#00cccc'},
          { label: 'Not Going', data: [[1,15]], color: '#969dab'}
        ], {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 3/4,
                formatter: labelFormatter
              }
            }
          },
          legend: { show: false }
        });

        function labelFormatter(label, series) {
          return '<div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">' + Math.round(series.percent) + '%</div>';
        }


        $('#sparkline').sparkline([15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15], {
          type: 'bar',
          height: 100,
          barWidth: 7,
          barColor: '#e9ecef',
          barSpacing: 5,
          chartRangeMin: 0,
          chartRangeMax: 15,
          disableTooltips: true,
          disableHighlight: true
        });

        $('#sparkline').sparkline([1,2,4,4,7,5,9,10,6,4,4,7,5,9,10,5,9,10,6,4,4,7,5,9,10,9,10,6,4,4,7,5,6,4,3,4], {
          composite: true,
          type: 'bar',
          barWidth: 7,
          barSpacing: 5,
          height: 100,
          barColor: '#6f42c1',
          chartRangeMin: 0,
          chartRangeMax: 15,
          disableTooltips: true,
          disableHighlight: true
        });


      });
    </script>
            
  </body>

<!-- Mirrored from www.bootstrapdash.com/demo/azia/v1.0.0/template/dashboard-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2019 10:24:03 GMT -->
</html>

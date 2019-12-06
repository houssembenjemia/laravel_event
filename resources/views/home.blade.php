@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!houssem

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @extends('welcome')

@section('core')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in {{ Auth::user()->name }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/azia/v1.0.0/template/app-contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2019 10:24:08 GMT -->
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
  <body>

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.html" class="az-logo"><span></span> azia</a>
          <a href="#" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
          <a href="#" id="azContentBodyHide" class="az-header-arrow d-md-none"><i class="icon ion-md-arrow-back"></i></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span> azia</a>
            <a href="#" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
              <div class="az-menu-sub">
                <nav class="nav">
                  <a href="dashboard-one.html" class="nav-link">Web Analytics</a>
                  <a href="dashboard-two.html" class="nav-link">Sales Monitoring</a>
                  <a href="dashboard-three.html" class="nav-link">Ad Campaign</a>
                  <a href="dashboard-four.html" class="nav-link">Event Management</a>
                  <a href="dashboard-five.html" class="nav-link">Helpdesk Management</a>
                  <a href="dashboard-six.html" class="nav-link">Finance Monitoring</a>
                  <a href="dashboard-seven.html" class="nav-link">Cryptocurrency</a>
                  <a href="dashboard-eight.html" class="nav-link">Executive / SaaS</a>
                  <a href="dashboard-nine.html" class="nav-link">Campaign Monitoring</a>
                  <a href="dashboard-ten.html" class="nav-link">Product Management</a>
                </nav>
              </div><!-- az-menu-sub -->
            </li>
            <li class="nav-item active show">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-folder"></i> Apps</a>
              <nav class="az-menu-sub">
                <a href="app-mail.html" class="nav-link">Mailbox</a>
                <a href="app-chat.html" class="nav-link">Chat</a>
                <a href="app-calendar.html" class="nav-link">Calendar</a>
                <a href="app-contacts.html" class="nav-link active">Contacts</a>
              </nav>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-document"></i> Pages</a>
              <nav class="az-menu-sub">
                <a href="page-profile.html" class="nav-link">Profile</a>
                <a href="page-invoice.html" class="nav-link">Invoice</a>
                <a href="page-signin.html" class="nav-link">Sign In</a>
                <a href="page-signup.html" class="nav-link">Sign Up</a>
                <a href="page-404.html" class="nav-link">Page 404</a>
              </nav>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i> Components</a>
              <div class="az-menu-sub az-menu-sub-mega">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <span>UI Elements</span>
                      <a href="elem-accordion.html" class="nav-link">Accordion</a>
                      <a href="elem-alerts.html" class="nav-link">Alerts</a>
                      <a href="elem-avatar.html" class="nav-link">Avatar</a>
                      <a href="elem-badge.html" class="nav-link">Badge</a>
                      <a href="elem-breadcrumbs.html" class="nav-link">Breadcrumbs</a>
                      <a href="elem-buttons.html" class="nav-link">Buttons</a>
                      <a href="elem-cards.html" class="nav-link">Cards</a>
                      <a href="elem-carousel.html" class="nav-link">Carousel</a>
                    </nav>
                    <nav class="nav">
                      <a href="elem-collapse.html" class="nav-link">Collapse</a>
                      <a href="elem-dropdown.html" class="nav-link">Dropdown</a>
                      <a href="elem-icons.html" class="nav-link">Icons</a>
                      <a href="elem-images.html" class="nav-link">Images</a>
                      <a href="elem-list-group.html" class="nav-link">List Group</a>
                      <a href="elem-media-object.html" class="nav-link">Media Object</a>
                      <a href="elem-modals.html" class="nav-link">Modals</a>
                      <a href="elem-navigation.html" class="nav-link">Navigation</a>
                    </nav>
                    <nav class="nav">
                      <a href="elem-pagination.html" class="nav-link">Pagination</a>
                      <a href="elem-popover.html" class="nav-link">Popover</a>
                      <a href="elem-progress.html" class="nav-link">Progress</a>
                      <a href="elem-spinners.html" class="nav-link">Spinners</a>
                      <a href="elem-toast.html" class="nav-link">Toast</a>
                      <a href="elem-tooltip.html" class="nav-link">Tooltip</a>
                    </nav>
                  </div>
                  <div>
                    <nav class="nav">
                      <span>Forms</span>
                      <a href="form-elements.html" class="nav-link">Form Elements</a>
                      <a href="form-layouts.html" class="nav-link">Form Layouts</a>
                      <a href="form-validation.html" class="nav-link">Form Validation</a>
                      <a href="form-wizards.html" class="nav-link">Form Wizards</a>
                      <a href="form-editor.html" class="nav-link">WYSIWYG Editor</a>
                    </nav>
                  </div>
                  <div>
                    <nav class="nav">
                      <span>Charts</span>
                      <a href="chart-morris.html" class="nav-link">Morris Charts</a>
                      <a href="chart-flot.html" class="nav-link">Flot Charts</a>
                      <a href="chart-chartjs.html" class="nav-link">ChartJS</a>
                      <a href="chart-sparkline.html" class="nav-link">Sparkline</a>
                      <a href="chart-peity.html" class="nav-link">Peity</a>
                    </nav>
                  </div>
                  <div>
                    <nav class="nav">
                      <span>Maps</span>
                      <a href="map-google.html" class="nav-link">Google Maps</a>
                      <a href="map-leaflet.html" class="nav-link">Leaflet</a>
                      <a href="map-vector.html" class="nav-link">Vector Maps</a>
                      <span>Tables</span>
                      <a href="table-basic.html" class="nav-link">Basic Tables</a>
                      <a href="table-data.html" class="nav-link">Data Tables</a>
                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i> Utilities</a>
              <nav class="az-menu-sub">
                <a href="util-background.html" class="nav-link">Background</a>
                <a href="util-border.html" class="nav-link">Border</a>
                <a href="util-display.html" class="nav-link">Display</a>
                <a href="util-flex.html" class="nav-link">Flex</a>
                <a href="util-height.html" class="nav-link">Height</a>
                <a href="util-margin.html" class="nav-link">Margin</a>
                <a href="util-padding.html" class="nav-link">Padding</a>
                <a href="util-position.html" class="nav-link">Position</a>
                <a href="util-typography.html" class="nav-link">Typography</a>
                <a href="util-width.html" class="nav-link">Width</a>
                <a href="util-extras.html" class="nav-link">Extras</a>
              </nav>
            </li>
          </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
          <a href="#" class="az-header-search-link"><i class="fas fa-search"></i></a>
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
              <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content az-content-app az-content-contacts pd-b-0">
      <div class="container">
        <div class="az-content-left az-content-left-contacts">

          <div class="az-content-breadcrumb lh-1 mg-b-10">
            <span>Apps &amp; Pages</span>
            <span>Contacts</span>
          </div>
          <h2 class="az-content-title tx-24 mg-b-30">My Contacts</h2>

          <nav class="nav az-nav-line az-nav-line-chat">
            <a href="#" data-toggle="tab" class="nav-link active">All Contacts</a>
            <a href="#" data-toggle="tab" class="nav-link">Groups</a>
          </nav>

          <div id="azContactList" class="az-contacts-list">
            <div class="az-contact-label">A</div>
            <div class="az-contact-item selected">
              <div class="az-img-user online"><img src="../img/img20.jpg" alt=""></div>
              <div class="az-contact-body">
                <h6>Abigail Johnson</h6>
                <span class="phone">+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star active"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-item">
              <div class="az-img-user"><img src="../img/img9.jpg" alt=""></div>
              <div class="az-contact-body">
                <h6>Archie Cantones</h6>
                <span>archie@cantones.com</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-item">
              <div class="az-avatar bg-gray-600 online">A</div>
              <div class="az-contact-body">
                <h6>Allan Rey Palban</h6>
                <span>allanr@palban.com</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-item">
              <div class="az-avatar bg-gray-700">A</div>
              <div class="az-contact-body">
                <h6>Aileen Mante</h6>
                <span>+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-label">B</div>
            <div class="az-contact-item">
              <div class="az-img-user"><img src="../img/img5.jpg" alt=""></div>
              <div class="az-contact-body">
                <h6>Brandon Dilao</h6>
                <span>+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-item">
              <div class="az-img-user online"><img src="../img/img21.jpg" alt=""></div>
              <div class="az-contact-body">
                <h6>Britney Labares</h6>
                <span>+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-item">
              <div class="az-avatar bg-gray-700">B</div>
              <div class="az-contact-body">
                <h6>Brateyley Cruz</h6>
                <span>+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-label">C</div>
            <div class="az-contact-item">
              <div class="az-img-user"><img src="../img/img18.jpg" alt=""></div>
              <div class="az-contact-body">
                <h6>Camille Audrey</h6>
                <span>+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-item">
              <div class="az-img-user online"><img src="../img/img16.jpg" alt=""></div>
              <div class="az-contact-body">
                <h6>Christian Lerio</h6>
                <span>+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-item">
              <div class="az-img-user online"><img src="../img/img17.jpg" alt=""></div>
              <div class="az-contact-body">
                <h6>Christopher Segovia</h6>
                <span>+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-label">D</div>
            <div class="az-contact-item">
              <div class="az-img-user online"><img src="../img/img3.jpg" alt=""></div>
              <div class="az-contact-body">
                <h6>Darius Clayton</h6>
                <span>+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-item">
              <div class="az-img-user"><img src="../img/img2.jpg" alt=""></div>
              <div class="az-contact-body">
                <h6>Dyanne Aceron</h6>
                <span>+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
            <div class="az-contact-item">
              <div class="az-img-user online"><img src="../img/img22.jpg" alt=""></div>
              <div class="az-contact-body">
                <h6>Divina Gracia</h6>
                <span>+1-234-567-890</span>
              </div><!-- az-contact-body -->
              <a href="#" class="az-contact-star"><i class="typcn typcn-star"></i></a>
            </div><!-- az-contact-item -->
          </div><!-- az-contacts-list -->

        </div><!-- az-content-left -->
        <div class="az-content-body az-content-body-contacts">
          <div class="az-contact-info-header">
            <div class="media">
              <div class="az-img-user">
                <img src="../img/img20.jpg" alt="">
                <a href="#"><i class="typcn typcn-camera-outline"></i></a>
              </div>
              <div class="media-body">
                <h4>Abigail Johnson</h4>
                <p>Product Designer</p>
                <nav class="nav">
                  <a href="#" class="nav-link"><i class="typcn typcn-device-phone"></i> Call</a>
                  <a href="#" class="nav-link"><i class="typcn typcn-messages"></i> Message</a>
                  <a href="#" class="nav-link"><i class="typcn typcn-user-add-outline"></i> Add to Group</a>
                  <a href="#" class="nav-link"><i class="typcn typcn-cancel"></i> Block</a>
                </nav>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="az-contact-action">
              <a href="#"><i class="typcn typcn-edit"></i> Edit Contact</a>
              <a href="#"><i class="typcn typcn-trash"></i> Delete Contact</a>
            </div><!-- az-contact-action -->

          </div><!-- az-contact-info-header -->
          <div class="az-contact-info-body">
            <div class="media-list">
              <div class="media">
                <div class="media-icon"><i class="fas fa-mobile-alt"></i></div>
                <div class="media-body">
                  <div>
                    <label>Work</label>
                    <span class="tx-medium">+1 (234) 567 8901</span>
                  </div>
                  <div>
                    <label>Personal</label>
                    <span class="tx-medium">+1 (498) 021 0090</span>
                  </div>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-icon align-self-start"><i class="far fa-envelope"></i></div>
                <div class="media-body">
                  <div>
                    <label>Gmail Account</label>
                    <span class="tx-medium">abigail.johnson@gmail.com</span>
                  </div>
                  <div>
                    <label>Other Account</label>
                    <span class="tx-medium">me@bootstrapdash.me</span>
                  </div>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-icon"><i class="far fa-map"></i></div>
                <div class="media-body">
                  <div>
                    <label>Current Address</label>
                    <span class="tx-medium">012 Dashboard Apartments, San Francisco, California 13245</span>
                  </div>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-icon"><i class="far fa-clock"></i></div>
                <div class="media-body">
                  <div>
                    <label>Call History</label>
                    <a href="#" class="tx-13">Duration of last call: 2m 32sec</a>
                  </div>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- media-list -->
          </div><!-- az-contact-info-body -->
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

    <div class="az-footer ht-40">
      <div class="container ht-100p pd-t-0-f">
        <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
      </div><!-- container -->
    </div><!-- az-footer -->


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="../js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

        new PerfectScrollbar('#azContactList', {
          suppressScrollX: true
        });

        new PerfectScrollbar('.az-contact-info-body', {
          suppressScrollX: true
        });

        $('.az-contact-item').on('click touch', function() {
          $(this).addClass('selected');
          $(this).siblings().removeClass('selected');

          $('body').addClass('az-content-body-show');
        })

      });
    </script>
  </body>

<!-- Mirrored from www.bootstrapdash.com/demo/azia/v1.0.0/template/app-contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2019 10:24:08 GMT -->
</html>

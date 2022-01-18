<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Learning Management</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('../node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('../node_modules/rickshaw/rickshaw.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('../bower_components/chartist/dist/chartist.min.css') }}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('../images/favicon.html') }}" />

</head>
<body>
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    <div class="tab-content" id="setting-content">
      <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
        <div class="color-tiles">
          <div class="tiles primary" id="primary-theme"></div>
          <div class="tiles success" id="success-theme"></div>
          <div class="tiles warning" id="warning-theme"></div>
          <div class="tiles danger" id="danger-theme"></div>
          <div class="tiles pink" id="pink-theme"></div>
          <div class="tiles info" id="info-theme"></div>
          <div class="tiles dark" id="dark-theme"></div>
          <div class="tiles light" id="light-theme"></div>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle btn-block mb-4" type="button" id="sidebar-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sidebar Mode
          </button>
          <div class="dropdown-menu" aria-labelledby="sidebar-color">
            <a class="dropdown-item" href="#" id="side-theme-light">Light</a>
            <a class="dropdown-item" href="#" id="side-theme-dark">Dark</a>
          </div>
        </div>
        <div class="dropdown d-none d-md-block">
          <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layouts
          </button>
          <div class="dropdown-menu" aria-labelledby="Layouts-type">
            <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
            <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
            <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
            <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
            <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
            <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
          </div>
        </div>
      </div>
      <!-- layout section tabends -->
      <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
        <ul class="chat-list">
          <li class="list active">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="ofline"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>

        </ul>
      </div>
      <!-- chat section tabends -->
    </div>
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{ URL::to('admin/adminDashboard') }}"><img src="{{ asset('images/salt_logo.svg') }}" alt="Logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <li>
          <a class="log-out-btn text-danger" href="{{URL::to('logout')}}">Logout</a>
          </li>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item dropdown">
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{ URL::to('admin/view') }}">
                <div class="sender-img">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">View Profile</p>

                </div>
              </a>
              <a class="dropdown-item" href="{{ URL::to('admin/setting') }}">
                <div class="sender-img">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Setting</p>
                </div>
              </a>
                <a class="dropdown-item" href="{{ URL::to('/admin/logout') }}">
                <div class="sender-img">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper sidebar-dark">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">Mahim</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/teacher_list') }}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Teacher List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/course_list') }}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Course List</span>
              </a>
            </li>

            <!--main pages end-->
            <!--sample pages start-->
            <!-- ui end -->
            <!-- data rep start-->
            <!--data rep end-->
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->

        <div class="content-wrapper">
          <div class="row">
            @yield('content')
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer" style=" position: fixed;bottom: 0px;right: 0px; ">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Learn Here</a> &copy; 2021
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->

    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('../node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('../node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ ('../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- endinject -->
  <!-- Data table -->
  <script src="../../node_modules/datatables.net/js/jquery.dataTables.js"></script>
  <script src="../../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- End data table-->
  <link rel="stylesheet" href="../../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" />
  <!-- Plugin js for this page-->
  <script src="{{ asset('../node_modules/flot/jquery.flot.js') }}"></script>
  <script src="{{ ('../node_modules/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('../node_modules/flot/jquery.flot.categories.js') }}"></script>
  <script src="{{ asset('../node_modules/flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ ('../node_modules/rickshaw/vendor/d3.v3.js') }}"></script>
  <script src="{{ asset('../node_modules/rickshaw/rickshaw.min.js') }}"></script>
  <script src="{{ asset('../bower_components/chartist/dist/chartist.min.js') }}"></script>
  <script src="{{ asset('../node_modules/chartist-plugin-legend/chartist-plugin-legend.js') }}"></script>
  <script src="{{ asset('../node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('../node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('../js/off-canvas.js') }}"></script>
  <script src="{{ asset('../js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('../js/misc.js') }}"></script>
  <script src="{{ asset('../js/settings.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('../js/dashboard_1.js') }}"></script>
  <!-- End custom js for this page-->
  <script src="{{ asset('../../node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('../../node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('../../node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('../../node_modules/datatables.net/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('../../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('../../js/off-canvas.js') }}"></script>
  <script src="{{ asset('../../js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('../../js/misc.js') }}"></script>
  <script src="{{ asset('../../js/settings.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('../../js/data-table.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js.map') }}"></script>
  <script>
     $(document).on('click', '#delete',function(e){
        e.preventDefault();
        var link=$(this).httr("href");
        bootbox.confirm('Are you want to delete', function(confirmed){
              if(confirmed){
                 window.location.href=link;
              };
        });
     });
  </script>
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>

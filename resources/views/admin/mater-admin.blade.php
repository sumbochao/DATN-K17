<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('img/logo/logo2.jpg') }}">
    <!-- Plugins css-->
    <link href="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/imgpage.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link href="{{asset('admin/assets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/libs/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    @yield('header')
    <style>
        .navbar-custom {
            background-image: url('img/background/backgrounduser.png');
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" href="#" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="pro-user-name ml-1">
                            Admin :
                        </span>
                        <img src="{{asset('img/logo/logo2.jpg')}}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            {{Session::get('email')}} <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <a href="{{url('/admin/profile')}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Thông tin</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <!-- item-->
                        <a href="{{'/admin/logout'}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Đăng xuất</span>
                        </a>
                    </div>
                </li>
            </ul>
            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('img/logo/logo.jpg')}}" alt="" height="18">
                        <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">V</span> -->
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                </a>
                <a href="#" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('img/logo/logo.jpg')}}" alt="" height="90">
                        <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">V</span> -->
                        <img src="{{asset('img/logo/logo.jpg')}}" alt="" height="30">
                    </span>
                </a>
            </div>
            <!-- LOGO -->
            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 309px;">
                <div class="slimscroll-menu" style="overflow: hidden; width: auto; height: 309px;">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="mm-active">
                        <ul class="metismenu mm-show" id="side-menu">
                            <li class="menu-title" id="clockDiv"></li>
                            <li>
                                <a href="{{url('/admin/dashboard')}}" class="waves-effect ">
                                    <i class="ion-md-speedometer font-20"></i>
                                    <span> Trang chủ </span>
                                </a>
                            </li>
                            <li class="menu-title">Bài viết</li>
                            <li>
                                <a href="{{url('/list-news')}}" class="waves-effect ">
                                    <i class="ion ion-ios-create font-20"></i>
                                    <span>Quản lí bài viết </span>
                                </a>
                                <!-- <a href="{{url('/list-news/add')}}" class="waves-effect ">
                                    <i class="ion ion-ios-create"></i>
                                    <span>Thêm bài viết </span>
                                </a> -->
                            </li>
                            <li class="menu-title">SẢN PHẨM</li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class=" ion ion-ios-list font-20"></i>
                                    <span>Quản lí sản phẩm</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false">
                                    <li><a href="{{url('/list-product')}}">Sản phẩm</a></li>
                                    <li><a href="{{url('/list-typeproduct')}}">Loại sản phẩm</a></li>
                                </ul>
                            </li>
                            <li class="menu-title">Đơn hàng</li>
                            <li>
                                <a href="{{url('/list-order')}}" class="waves-effect ">
                                    <i class="ion-md-cart font-20"></i>
                                    <span>Quản lý đơn hàng</span>
                                </a>
                            </li>
                            <li class="menu-title">QUẢN LÍ USER</li>
                            <li class="mm-active">
                                <a href="{{url('/list-user')}}" class="waves-effect ">
                                    <i class="ion-md-contacts font-20 "></i>
                                    <span>Người dùng</span>
                                </a>
                            </li>
                            <li class="mm-active">
                                <a href="{{url('/list-member')}}" class="waves-effect ">
                                    <i class="ion ion-md-people font-20"></i>
                                    <span>Thành viên</span>
                                </a>
                            </li>
                            <li class="menu-title">Admin</li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class=" ion ion-ios-finger-print font-20"></i>
                                    <span>Admin</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false">
                                    <li><a href="{{url('/admin/profile')}}">Thông tin</a></li>
                                    <li><a href="components-portlets.html">admin</a></li>
                                </ul>
                            </li>
                            <li class="menu-title">CẤU HÌNH</li>
                            <li class="mm-active">
                                <a href="javascript: void(0);" class="waves-effect ">
                                    <i class="fa fa-cogs font-20"></i>
                                    <span>Cài dặt</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 158.081px;"></div>
                <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================= -->
        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    <hr>
                    <!-- end page title -->
                    @yield('main-conten')
                    <!-- end container-fluid -->
                </div>
            </div>
            <!-- end content -->
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            2020 © cao thắng by <a href="">cdth17pma</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <!-- END wrapper -->
        <!-- /Right-bar -->
        <!-- Right bar overlay-->
        <!-- Vendor js -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="{{asset('admin/assets/js/vendor.min.js') }}"></script>

        <script src="{{asset('admin/assets/libs/moment/moment.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/jquery-scrollto/jquery.scrollTo.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

        <script src="{{ asset('admin/assets/js/pages/sweet-alerts.init.js') }}"></script>
        <!-- Chat app -->
        <script src="{{asset('admin/assets/js/pages/jquery.chat.js') }}"></script>

        <!-- Todo app -->
        <script src="{{asset('admin/assets/js/pages/jquery.todo.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{asset('admin/assets/libs/morris-js/morris.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/raphael/raphael.min.js') }}"></script>

        <!-- Sparkline charts -->
        <script src="{{asset('admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Dashboard init JS -->
        <script src="{{asset('admin/assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.min.js') }}"></script>
        @yield('script')
        <script src="{{asset('admin/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('admin/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{asset('admin/assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/datatables/buttons.print.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{asset('admin/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

        <script src="{{asset('admin/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/datatables/dataTables.select.min.js') }}"></script>

        <script src="{{asset('admin/assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{asset('admin/assets/libs/datatables/mycreate.js') }}"></script>

        <!-- Datatables init -->
        <script src="{{asset('admin/assets/js/pages/datatables.init.js') }}"></script>
        <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
        

</body>

</html>
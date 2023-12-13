<!-- OPEN HEADER-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">​

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('admin/js/toastr.min.js') }}"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"
        charset="utf-8" async defer></script>
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>




</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::to('/index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3" id="x">Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ URL::to('/index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tổng quan</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-laptop-house"></i>
                    <span>Website bán hàng</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
            Interface
        </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link nav-link-1 collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Quản lý danh mục</span>
                </a>
                <div id="collapseTwo" class="collapse nav-1" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="{{ URL::to('/all-brand') }}">Thương hiệu</a>
                        <a class="collapse-item" href="{{ URL::to('/all-category') }}">Loại sản phẩm</a>
                        @if (Auth::user()->RoleID == 1)
                            <a class="collapse-item" href="{{ URL::to('/all-employee') }}">Nhân viên</a>
                        @endif
                        <a class="collapse-item" href="{{ URL::to('/all-supplier') }}">Nhà cung cấp</a>
                        <a class="collapse-item" href="{{ URL::to('/all-customer') }}">Khách hàng</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link nav-link-2 collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Quản lý sản phẩm</span>
                </a>
                <div id="collapseUtilities" class="collapse nav-2" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="{{ URL::to('/attributes') }}">Danh sách loại sản phẩm</a>
                        <a class="collapse-item" href="{{ URL::to('/products') }}">Danh sách sản phẩm</a>
                        <a class="collapse-item" href="{{ URL::to('/show-attribute-product-all/1') }}">Quản lý thuộc tính</a>
                    </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/manager-order') }}">
                    <i class="fas fa-boxes"></i>
                    <span>Đơn hàng</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="../../img/undraw_rocket.svg" alt="...">
            <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
        </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    {{-- message here --}}
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to
                                            download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy
                                            with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="data:image/jpeg;base64,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" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                    Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    echo Auth::user()->UserName;
                                    ?>
                                </span>

                                <img class="img-profile rounded-circle" src="{{asset('admin/img/'.Auth::user()->Image)}}">

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#infUserModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hồ sơ
                                </a>
                                <a class="dropdown-item" data-toggle="modal" data-target="#changePassword">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đổi mật khẩu
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- CLOSE HEADER-->

                {{-- Phần content là phần chứa nội dung riêng --}}
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- OPEN FOOTER-->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; My Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('admin.modals.logout-modal')
    @include('admin.modals.password-modal')
    @include('admin.modals.profile-modal')
    {{-- Render script --}}
    @yield('scripts')

    <!-- Bootstrap core JavaScript-->

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    {{-- <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script> --}}

    <!-- Page level custom scripts -->


    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">

    <!-- Core plugin JavaScript-->

    <!-- Page level plugins -->

    <!-- Bootstrap core JavaScript-->
</body>

</html>
<!-- OPEN CLOSE-->

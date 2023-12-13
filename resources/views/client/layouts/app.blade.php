<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Website  - Trang chủ</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom-Files -->
    <link href="{{ asset('client/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap css -->
    <link href="{{ asset('client/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('client/css/fontawesome-all.css') }}">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="{{ asset('client/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up-box -->
    <link href="{{ asset('client/css/menu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- menu style -->
    <!-- //Custom-Files -->


    <!-- web fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //web fonts -->
    <link href="{{ asset('admin/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"
        charset="utf-8" async defer></script>
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>

</head>

<body>
    <!-- top-header -->
    <div class="agile-main-top">
        <div class="container-fluid" style="padding: 0px">
            <div class="row main-top-w3l py-2">
                <div class="col-lg-4 header-most-top">
                    <p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
                        <i class="fas fa-shopping-cart ml-1"></i>
                    </p>
                </div>
                <div class="col-lg-8 header-right mt-lg-0 mt-2">
                    <!-- header lists -->
                    <ul>
                        <li class="text-center border-right text-white">
                            <a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
                                <i class="fas fa-map-marker mr-2"></i>Select Location</a>
                        </li>
                        <li class="text-center border-right text-white">
                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                <i class="fas fa-truck mr-2"></i>Track Order</a>
                        </li>
                        <li class="text-center border-right text-white">
                            <i class="fas fa-phone mr-2"></i> 001 234 5678
                        </li>

                        {{-- Nếu đã đăng nhập thì show --}}
                        @if (Auth::check() && Auth::user()->RoleID == 4)
                            <li class="nav-item dropdown no-arrow text-center">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-white">
                                        {{ Auth::user()->UserName }}
                                    </span>
                                    <img height="30rem" width="30rem" class="img-profile rounded-circle"
                                        src="{{ asset('admin/img/' . Auth::user()->Image) }}">

                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <span class="drop-account"></span>
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#infUserModal">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Thông tin cá nhân
                                    </a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#changePassword">
                                        <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Đổi mật khẩu
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a href="{{URL::to('/view-history/'.Auth::user()->UserID)}}" class="dropdown-item">
                                        <i class="fas fa-check-circle fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Lịch sử mua hàng
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a style="color: #d60404" class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Đăng xuất
                                    </a>
                                </div>
                            </li>
                        @endif

                        {{-- Chưa đăng nhập thì show btn đăng nhập đăng kí --}}
                        @if (!Auth::check() || Auth::user()->RoleID != 4)
                            <li class="text-center border-right text-white" id="log-hidden">
                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                    <i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
                            </li>
                            <li class="text-center text-white" id="log-hidden">
                                <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Đăng kí </a>
                            </li>
                        @endif
                    </ul>
                    <!-- //header lists -->
                </div>
            </div>
        </div>
    </div>

    @include('client.modals.logout-modal')
    @include('client.modals.button-modals')
    <!-- modals -->
    @include('client.modals.login')
    @include('client.modals.register')

    @include('client.modals.password-modal')
    @include('client.modals.profile-modal')
    <!-- //modal -->
    <!-- //top-header -->

    <!-- header-bottom-->
    <div class="header-bot">
        <div class="container">
            <div class="row header-bot_inner_wthreeinfo_header_mid">
                <!-- logo -->
                <div class="col-md-3 logo_agile">
                    <h1 class="text-center">
                        <a href="index.html" class="font-weight-bold font-italic">
                            <img src="https://theme.hstatic.net/200000557447/1000907631/14/share_fb_home.png?v=26" alt=" "
                                class="img-fluid">Nông Sản Việt
                        </a>
                    </h1>
                </div>
                <!-- //logo -->
                <!-- header-bot -->
                <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                    <div class="row">
                        <!-- search -->
                        <div class="col-10 agileits_search">
                            <form class="form-inline" action="{{URL::to('/search-products')}}" method="get">
                                @csrf
                                <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên sản phẩm cần tìm..."
                                    aria-label="Tìm kiếm" name="keywords_submit" required>
                                <button name="search_items" class="btn my-2 my-sm-0" type="submit">Tìm kiếm</button>
                            </form>
                        </div>
                        <!-- //search -->
                        <!-- cart details -->

                        <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                            <div class="wthreecartaits wthreecartaits2 cart cart box_1 dropdown">
                                <form action="{{URL::to('/show-cart')}}" method="GET">
                                    {{-- <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1"> --}}

                                    <button onclick="redirectCart()" class="btn w3view-cart  drop-no-after dropdown-toggle" type="submit" value=""  data-toggle="dropdown">
                                        <i class="fas fa-cart-arrow-down"></i>
                                        <span class="btn-cart"></span>
                                    </button>
                                </form>
                                <div class="dropdown-menu1 dropdown-menu">
                                    <div class="agile_inner_drop_nav_info p-4">
                                        <?php
                                            $content = Cart::content();
                                        ?>
                                        <h5 class="mb-3">Sản phẩm mới thêm (<span style="color: #d60404">{{Cart::count()}}</span>)</h5>
                                        <div class="row">
                                            <div class="col-sm-9 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <table class="table-cart table-borderless table-striped">
                                                        @foreach ($content as $product_info)
                                                            <tr class="rem1">
                                                                <td width="30%" class="invert-image1">
                                                                    <a href="../productdetail/{{ $product_info->id }}">
                                                                        <img src="{{asset('imgProduct/'.$product_info->options->image)}}" alt=" " class="img-responsive">
                                                                    </a>
                                                                </td>
                                                                <td class="invert">{{$product_info->name}}</td>
                                                                <td style="padding-left: 20px" class="invert"><span style="color: #d60404 !important">{{ number_format($product_info->price, 0, ',', '.') }} VNĐ<span></td>
                                                                </a>
                                                            </tr>
                                                        @endforeach
                                                </table>
                                                </ul>
                                            </div>
                                        </div>
                                        <a class="btn btn-danger btn-sm" href="{{URL::to('/delete-all-cart')}}">Xóa hết giỏi hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //cart details -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop locator (popup) -->
    <!-- //header-bottom -->

    <!-- navigation -->
    @include('client.layouts.navigation')
    <!-- //navigation -->

    {{-- main content --}}
    @yield('content')


    <!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

    <!-- footer -->
    <footer>
        <div class="footer-top-first">
            <div class="container py-md-5 py-sm-4 py-3">
                <!-- footer first section -->
                <h2 class="footer-top-head-w3l font-weight-bold mb-2"></h2>
                <p class="footer-main mb-4">
                    </p>
                <!-- //footer first section -->
                <!-- footer second section -->
                <div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
                    <div class="col-md-4 offer-footer">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="fas fa-dolly"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Free Shipping</h3>
                                <p>on orders over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offer-footer my-md-0 my-4">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Fast Delivery</h3>
                                <p>World Wide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offer-footer">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="far fa-thumbs-up"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Big Choice</h3>
                                <p>of Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //footer second section -->
            </div>
        </div>
        <!-- footer third section -->
        <div class="w3l-middlefooter-sec">
            <div class="container py-md-5 py-sm-4 py-3">
                <div class="row footer-info w3-agileits-info">
                    <!-- footer categories -->
                    <div class="col-md-3 col-sm-6 footer-grids">
                        <h3 class="text-white font-weight-bold mb-3">Categories</h3>
                        <ul>
                        <li class="mb-3">
                                <a href="product.html">Rau Củ </a>
                            </li>
                            <li class="mb-3">
                                <a href="product.html">Hoa Quả</a>
                            </li>
                            <li class="mb-3">
                                <a href="product.html">Thịt các loại</a>
                            </li>
                            <li class="mb-3">
                                <a href="product2.html">Thủy Hải Sản</a>
                            </li>
                            <li class="mb-3">
                                <a href="product.html">Trứng sữa</a>
                            </li>
                            <li>
                                <a href="product2.html">Lúa Gạo</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- //footer categories -->
                    <!-- quick links -->
                    <div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
                        <h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
                        <ul>
                            <li class="mb-3">
                                <a href="about.html">About Us</a>
                            </li>
                            <li class="mb-3">
                                <a href="contact.html">Contact Us</a>
                            </li>
                            <li class="mb-3">
                                <a href="help.html">Help</a>
                            </li>
                            <li class="mb-3">
                                <a href="faqs.html">Faqs</a>
                            </li>
                            <li class="mb-3">
                                <a href="terms.html">Terms of use</a>
                            </li>
                            <li>
                                <a href="privacy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
                        <h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
                        <ul>
                            <li class="mb-3">
                                <i class="fas fa-map-marker"></i> Cầu Giấy-Hà Nội.
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-mobile"></i> 333 222 3333
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone"></i> +84 78397929
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:example@mail.com"> mail 1@example.com</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:example@mail.com"> mail 2@example.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
                        <!-- newsletter -->
                        <h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
                        <p class="mb-3">Free Delivery on your first order!</p>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                    required="">
                                <input type="submit" value="Go">
                            </div>
                        </form>
                        <!-- //newsletter -->
                        <!-- social icons -->
                        <div class="footer-grids  w3l-socialmk mt-3">
                            <h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a class="icon fb" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon tw" href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon gp" href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- //social icons -->
                    </div>
                </div>
                <!-- //quick links -->
            </div>
        </div>
        <!-- //footer third section -->

        <!-- footer fourth section -->
       
        <!-- //footer fourth section (text) -->
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy-right py-3">
        <div class="container">
            <p class="text-center text-white"> All rights reserved | Design by
                <a href="http://Trần Đức Khải KTDT&THCN1.com"> Trần Đức Khải KTDT&THCN1.</a>
            </p>
        </div>
    </div>
    <!-- //copyright -->

    <!-- js-files -->
    <!-- jquery -->

    <!-- //jquery -->

    <!-- nav smooth scroll -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //nav smooth scroll -->

    <!-- popup modal (for location)-->
    <script src="{{ asset('client/js/jquery.magnific-popup.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- //popup modal (for location)-->

    {{-- button-click-cart --}}
    <script>
        function redirectCart() {
            window.location.href = "{{URL::to('/show-cart')}}";
        }
    </script>
    <!-- password-script -->
    {{-- <script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script> --}}
    <!-- //password-script -->

    <!-- scroll seller -->
    <script src="{{ asset('client/js/scroll.js') }}"></script>
    <!-- //scroll seller -->

    <!-- smoothscroll -->
    <script src="{{ asset('client/js/SmoothScroll.min.js') }}"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="{{ asset('client/js/move-top.js') }}"></script>
    <script src="{{ asset('client/js/easing.js') }}"></script>
    {{-- Update profile js --}}

    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear'
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    @yield('scripts')

    <!-- //smooth-scrolling-of-move-up -->
    <!-- for bootstrap working -->
    <script src="{{ asset('client/js/bootstrap.js') }}"></script>
    <script src="{{ asset('client/js/minicart.js') }}"></script>
    <!-- //for bootstrap working -->
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">
    <!-- //js-files -->
</body>

</html>

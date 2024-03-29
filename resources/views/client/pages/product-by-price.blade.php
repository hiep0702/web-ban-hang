@extends('client.layouts.app')

@section('content')
    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->

    <!-- //page -->

    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                Danh sách Sản Phẩm
            </h3>
            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <div class="row">
                                @foreach ($get_productByPrice as $product)
                                    <div class="col-md-4 product-men mt-5">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item text-center">
                                                <img src="{{ asset('/imgProduct/' . $product->Image) }}" alt=""
                                                    style="width:200px;height:200px;object-fit:cover;">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="../productdetail/{{ $product->ProductID }}"
                                                            class="link-product-add-cart">Xem Chi Tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info-product text-center border-top mt-4">
                                                <h4 class="pt-1">
                                                    <a href="single.html">{{ $product->ProductName }}</a>
                                                </h4>
                                                <div class="info-product-price my-2">
                                                    <span
                                                        class="item_price">{{ number_format($product->Price, 0, ',', '.') }}VNĐ</span>
                                                    <del>
                                                        {{ number_format($product->Price * 0.1 + $product->Price, 0, ',', '.') }}VNĐ</del>
                                                </div>
                                                <div
                                                    class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart" />
                                                            <input type="hidden" name="add" value="1" />
                                                            <input type="hidden" name="business" value=" " />
                                                            <input type="hidden" name="item_name"
                                                                value="{{ $product->ProductName }}" />
                                                            <input type="hidden" name="amount"
                                                                value="{{ $product->Price }}VNĐ" />
                                                            <input type="hidden" name="discount_amount" value="1.00" />
                                                            <input type="hidden" name="currency_code" value="VNĐ" />
                                                            <input type="hidden" name="return" value=" " />
                                                            <input type="hidden" name="cancel_return" value=" " />
                                                            @if ($product->Amount === 0)
                                                                <input data-id="{{ $product->ProductID }}" type="button"
                                                                    isabled value="Cháy hàng rồi"
                                                                    class="button btn btn-add-cart"
                                                                    style="background-color:red;" />
                                                            @elseif($product->Amount > 0)
                                                                <input data-id="{{ $product->ProductID }}" type="button"
                                                                    value="Thêm vào giỏ" class="button btn btn-add-cart" />
                                                            @endif
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- //first section -->
                    </div>
                </div>
                <!-- //product left -->
                <!-- product right -->
                <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                    <div class="side-bar p-sm-4 p-3">
                        <div class="search-hotel border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Tìm Kiếm</h3>
                            <form action="{{ URL::to('/list-product/filter') }}">
                                @csrf
                                <input type="search" placeholder="Product name..." name="keywords_submit" required="">
                                <input type="submit" value=" " name="search_items">
                            </form>
                        </div>
                        <form action="{{ route('filter-for-price-and-brand') }}" method="post">
                            @csrf
                            @method('Post')
                            <div class="search-hotel border-bottom py-2">
                                <h3 class="agileits-sear-head mb-3">Thương Hiệu</h3>
                                <div class="left-side py-2">
                                    <ul>
                                        @foreach ($all_brand as $brand)
                                            <li>
                                                {{-- <input type="checkbox" {{(request("brand")[$brand->BrandID]??'')=='on'?'checked':''}} id="bc-{{$brand->BrandID}}" name="brand[{{$brand->BrandID}}]" class="checked " onchange="this.form.submit();" > --}}
                                                {{-- <span class="span">{{$brand->BrandName}}</span> --}}
                                                <input id="BrandIDTag{{ $brand->BrandID }}" type="checkbox"
                                                    name="Brand-Check[]" class="checked " value="{{ $brand->BrandID }}">
                                                <label
                                                    for="BrandIDTag{{ $brand->BrandID }}">{{ $brand->BrandName }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="range border-bottom py-2">
                                <h3 class="agileits-sear-head mb-3">Giá</h3>
                                <div class="w3l-range">
                                    <ul>
                                        <li>
                                            <input id="PriceIDTag1" type="radio" name="PriceCheck" class="checked "
                                                value="1">
                                            <label for="PriceIDTag1">Dưới 100.000VNĐ</label>
                                        </li>
                                        <li>
                                            <input id="PriceIDTag2" type="radio" name="PriceCheck" class="checked "
                                                value="2">
                                            <label for="PriceIDTag2">100.000 - 500.000VNĐ</label>
                                        </li>
                                        <li>
                                            <input id="PriceIDTag3" type="radio" name="PriceCheck" class="checked "
                                                value="3">
                                            <label for="PriceIDTag3">500.000 - 1000.000VNĐ</label>
                                        </li>
                                        <li>
                                            <input id="PriceIDTag4" type="radio" name="PriceCheck" class="checked "
                                                value="4">
                                            <label for="PriceIDTag4">1000.000 - 1.500.000VNĐ</label>
                                        </li>
                                        <li>
                                            <input id="PriceIDTag6" type="radio" name="PriceCheck" class="checked "
                                                value="6">
                                            <label for="PriceIDTag6">Trên 1.500.000VNĐ</label>
                                        </li>

                                    </ul>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Lọc</button>
                        </form>


                        <!-- //product right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- //top products -->

        <!-- middle section -->
        <div class="join-w3l1 py-sm-5 py-4">
            <div class="container py-xl-4 py-lg-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="join-agile text-left p-4">
                            <div class="row">
                                <div class="col-sm-7 offer-name">
                                    <h6>Smooth, Rich & Loud Audio</h6>
                                    <h4 class="mt-2 mb-3">Branded Headphones</h4>
                                    <p>Sale up to 25% off all in store</p>
                                </div>
                                <div class="col-sm-5 offerimg-w3l">
                                    <img src="images/off1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5">
                        <div class="join-agile text-left p-4">
                            <div class="row ">
                                <div class="col-sm-7 offer-name">
                                    <h6>A Bigger Phone</h6>
                                    <h4 class="mt-2 mb-3">Smart Phones 5</h4>
                                    <p>Free shipping order over $100</p>
                                </div>
                                <div class="col-sm-5 offerimg-w3l">
                                    <img src="images/off2.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
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
                <p class="text-center text-white">All rights reserved | Design by
                    <a href="http://Trần Đức Khải KTDT&THCN1.com"> Trần Đức Khải KTDT&THCN1.</a>
                </p>
            </div>
        </div>
        <!-- //copyright -->

        <!-- js-files -->
        <!-- jquery -->
        <script src="js/jquery-2.2.3.min.js"></script>
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
        <script src="js/jquery.magnific-popup.js"></script>
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

        <!-- cart-js -->
        <script src="js/minicart.js"></script>
        <script>
            paypals.minicarts
                .render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

            paypals.minicarts.cart.on('checkout', function(evt) {
                var items = this.items(),
                    len = items.length,
                    total = 0,
                    i;

                // Count the number of each item in the cart
                for (i = 0; i < len; i++) {
                    total += items[i].get('quantity');
                }

                if (total < 3) {
                    alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                    evt.preventDefault();
                }
            });
        </script>
        <!-- //cart-js -->

        <!-- password-script -->
        <script>
            window.onload = function() {
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
        </script>
        <!-- //password-script -->

        <!-- smoothscroll -->
        <script src="js/SmoothScroll.min.js"></script>
        <!-- //smoothscroll -->

        <!-- start-smooth-scrolling -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
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
        <!-- //smooth-scrolling-of-move-up -->

        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- //js-files -->
    @endsection

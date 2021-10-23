<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>{{ $content->company_name }} | Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="{{ asset('website/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- helper class css -->
    <link href="{{ asset('website/css/helper.min.css') }}" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{ asset('website/css/plugins.css') }}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/skin-default.css') }}" rel="stylesheet" id="galio-skin">
</head>

<body>

    <!-- color switcher start -->
    
    <!-- color switcher end -->

    <div class="wrapper">

        <!-- header area start -->
      
        @include('partials.website_header')
        <!-- header area end -->

        <!-- hero slider start -->
     
        <!-- hero slider end -->

       @yield('website-content')
        <!-- brand area end -->

        <!-- footer area start -->

        @include('partials.website_footer')
       
        <!-- footer area end -->

    </div>


    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider slick-arrow-style_2 mb-20">
                                    <div class="pro-large-img">
                                        <img src="{{asset('website/img/product/product-details-img1.jpg')}}" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{asset('website/img/product/product-details-img2.jpg')}}" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{asset('website/img/product/product-details-img3.jpg')}}" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{asset('website/img/product/product-details-img4.jpg')}}" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{asset('website/img/product/product-details-img5.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                    <div class="pro-nav-thumb"><img src="{{asset('website/img/product/product-details-img1.jpg')}}"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{asset('website/img/product/product-details-img2.jpg')}}"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{asset('website/img/product/product-details-img3.jpg')}}"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{asset('website/img/product/product-details-img4.jpg')}}"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{asset('website/img/product/product-details-img5.jpg')}}"
                                            alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des mt-md-34 mt-sm-34">
                                    <h3><a href="product-details.html">external product 12</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="availability mt-10">
                                        <h5>Availability:</h5>
                                        <span>1 in stock</span>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$160.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                        Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea
                                        dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris
                                        consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mt-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="action_link">
                                            <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->
    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="{{ asset('website/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <!-- Jquery Min Js -->
    <script src="{{ asset('website/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Popper Min Js -->
    <script src="{{ asset('website/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap Min Js -->
    <script src="{{ asset('website/js/vendor/bootstrap.min.js') }}"></script>
    <!-- Plugins Js-->
    <script src="{{ asset('website/js/plugins.js') }}"></script>
    <!-- Ajax Mail Js -->
    <script src="{{ asset('website/js/ajax-mail.js') }}"></script>
    <!-- Active Js -->
    <script src="{{ asset('website/js/main.js') }}"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="{{ asset('website/js/switcher.js') }}"></script>
</body>



</html>
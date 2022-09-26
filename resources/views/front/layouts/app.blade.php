<!doctype html>
<html class="no-js" lang="zxx">

    <!-- Mirrored from htmldemo.net/neha/neha/index-electronics.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 17:46:55 GMT -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $content->name }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/front/img/favicon.png">

        <!-- all css here -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/animate.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/slinky.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/meanmenu.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/slick.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/bundle.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/style.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/responsive.css">
        <script src="{{ asset('/') }}assets/front/js/vendor/modernizr-3.11.7.min.js"></script>
    </head>

    <body>
        <div class="wrapper pl-155 pr-155">
            @include('front.inc.header')
            @include('front.inc.sidebar')


            @if (request()->is('cart*','checkout*'))
            @else
            @include('front.inc.cart')
            @endif

            @yield('content')

            @include('front.inc.footer')

        </div>



        <!-- all js here -->
        <script src="{{ asset('/') }}assets/front/js/vendor/jquery-v1.12.4.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/popper.js"></script>
        <script src="{{ asset('/') }}assets/front/js/bootstrap.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/isotope.pkgd.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/jquery.counterup.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/waypoints.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/slinky.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/ajax-mail.js"></script>
        <script src="{{ asset('/') }}assets/front/js/owl.carousel.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/plugins.js"></script>
        <script type="text/javascript">
            var myElement = document.querySelector(".intelligent-header");
            var headroom  = new Headroom(myElement);
            headroom.init();
            $('.owl-details').owlCarousel({
    margin:10,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
        </script>
        <script src="{{ asset('/') }}assets/front/js/cart.js"></script>
        <script src="{{ asset('/') }}assets/front/js/main.js"></script>
        @stack('script')
        <script>
            function renderCart(items) {
            const cart = document.querySelector(".cart");
            const count = document.querySelector(".itemstotal");
            const countt = document.querySelector(".itemstotalcart");
            if (localStorage.getItem('__cart')) {
            count.innerHTML = JSON.parse(localStorage.getItem('__cart')).length;

            } else {
            count.innerHTML = 0

            }

            cart.innerHTML = items.map((item) => `<li class="single-product-cart">
                <div class="cart-img">
                    <a href="#"><img src="{{ asset('/') }}assets/images/product/${item.image}" alt=""></a>
                </div>
                <div class="cart-title">
                    <h3><a href="#"> ${item.name}</a></h3>
                    <span>${item.quantity} x BDT ${item.price}</span>
                </div>
                <div class="cart-delete">
                    <a class="dltProduct" onClick="cartLS.remove(${item.id})"><i class="ion-ios-trash-outline"></i></a>
                </div>
            </li>`)

            document.querySelector(".totali").innerHTML = cartLS.total()

            }
            renderCart(cartLS.list())
            cartLS.onChange(renderCart)

            $(document).ready(function(){
                $(".btn-cart").click(function(){
                    window.location = "{{ route('cart') }}";
                });
                $(".dltProduct").click(function(){
                    location.reload();
                });
            });

            // $count.innerHTML = JSON.parse(localStorage.getItem('__cart')).length;

        </script>

    </body>


</html>

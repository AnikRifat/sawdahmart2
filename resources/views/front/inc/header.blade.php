<header class="back-to-top intelligent-header intelligent-header-pd">
    <div class="header-area header-area-2">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="{{ route('index') }}"><img
                              src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-6 menu-none-block menu-center">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="{{ route('index') }}">home</a>
                                <li><a href="{{ route('shop') }}">Shop</a>
                                </li>
                                {{-- <li><a href="about-us.html">about us</a></li> --}}


                                {{-- <li><a href="#">Categories</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">blog </a></li>
                                        <li><a href="blog-2-col.html">blog 2 column</a></li>
                                        <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="#contact">contact</a></li>
                                @auth

                                <li><a href="{{ route('redirectTo') }}">Dashboard</a></li>
                                <li>
                                    <form id="logout" name="logout" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger rounded-0">logout</button>
                                    </form>


                                </li>
                                @else
                                <li><a href="{{ route('login') }}">Log in</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @endauth
                                {{-- <li><a href="{{ route('login') }}">login</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <script>
                    function logout(){
                        console.log('logout');
                        document.forms["logout"].submit();

                }
                </script>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="header-search-cart">
                        <div class="header-search common-style">
                            <button class="sidebar-trigger-search">
                                <span class="ion-ios-search-strong"></span>
                            </button>
                        </div>
                        @if (request()->is('cart*','checkout*'))
                        @else
                        <div class="header-cart common-style">
                            <button class="sidebar-trigger">
                                <span class="ion-bag"></span>
                            </button>
                        </div>
                        @endif

                    </div>
                </div>
                @include('front.inc.mobile')
            </div>
        </div>
    </div>
</header>
<!-- Newsletter Popup Start -->
<div class="popup_wrapper hidden-sm hidden-xs">

    <div class="test">
        <span class="popup_off">Close</span>
        <a href="{{ $content->slider_text }}">
            <img src="{{ asset('/') }}assets/images/{{ $content->slider }}" width="100%" height="100%" alt="">
        </a>
    </div>

</div>
<!-- Newsletter Popup End -->
<div class="header-space"></div>

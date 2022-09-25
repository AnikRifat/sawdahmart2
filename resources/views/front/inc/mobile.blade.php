<div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
    <div class="mobile-menu">
        <nav id="mobile-menu-active">
            <ul class="menu-overflow">
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

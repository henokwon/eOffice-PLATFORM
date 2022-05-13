<header
    class="site-header site-header--menu-center dark-mode-texts landing-17-menu  site-header--absolute site-header--sticky">
    <div class="container">
        <nav class="navbar site-navbar">
            <!-- Brand Logo-->
            <div class="brand-logo">
                <a href="#">

                    <!-- light version logo (logo must be black)-->
                    {{-- <img src="images/logo/white.png" alt="" class="light-version-logo"> --}}

                    <!-- Dark version logo (logo must be White)-->
                    {{-- <img src="images/logo/whie.png" alt="" class="dark-version-logo"> --}}
                    {{-- <div class="text-bg">
                        <h1>eOffice</h1>
                    </div> --}}

                </a>
            </div>
            <div class="menu-block-wrapper">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">
                        <li class="nav-item">
                            <a href="/" class="nav-link-item">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="nav-link-item">Services</a>
                        </li>
                        {{-- <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Pages <i class="fas fa-angle-down"></i>
                            </a> --}}
                            {{-- <ul class="sub-menu" id="submenu-9">
                                <li class="sub-menu--item">
                                    <a href="#">Contact us</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Service</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="#">Another Link</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="#">View New Events</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="#">Another Link</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="#">Another Link</a>
                                </li>
                                {{-- <li class="sub-menu--item">
                                    <a class="nav-link" style="cursor: pointer"  data-bs-toggle="modal"
                                        data-bs-target="#loginModal">{{ __('Login') }}</a>
                                </li> --}}
                                <li>

                                </li>
                            {{-- </ul> --}}
                        {{-- </li> --}}

                        <li class="nav-item">
                            <a href="{{ route('posts') }}" class="nav-link-item">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link-item">Support</a>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">More <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="sub-menu" id="submenu-9">
                                <li class="sub-menu--item">
                                    <a href="#">Contact us</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="#">View New Events</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="#">About eOffice</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">FAQ</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="#">Terms and Policy</a>
                                </li>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-btns  header-btn-l-17 ms-auto  d-xs-inline-flex align-items-center">

                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="btn sign-in-btn focus-reset" >Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="start-trail-btn btn focus-reset">Register</a>
                @endif
                @endauth
                @endif

                {{-- @if (Route::has('service'))
                @auth
                <a href="{{ url('/service') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Service</a>
                @else
                <a href="{{ route('service') }}" class="btn sign-in-btn focus-reset">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="start-trail-btn btn focus-reset">Register</a>
                @endif
                @endauth
                @endif --}}
            </div>
            <!-- mobile menu trigger -->
            <div class="mobile-menu-trigger">
                <span></span>
            </div>
            <!--/.Mobile Menu Hamburger Ends-->
        </nav>
    </div>
</header>
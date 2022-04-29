<header class="site-header site-header--menu-center dark-mode-texts landing-17-menu  site-header--absolute site-header--sticky">
    <div class="container">
      <nav class="navbar site-navbar">
        <!-- Brand Logo-->
        <div class="brand-logo">
          <a href="#">
            <!-- light version logo (logo must be black)-->
            <img src="images/logo/logo-black.png" alt="" class="light-version-logo">
        
            <!-- Dark version logo (logo must be White)-->
            <img src="images/logo/logo-white.png" alt="" class="dark-version-logo">
         
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
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger">Pages <i class="fas fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-9">
                  <li class="sub-menu--item">
                    <a href="#">Contact us</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="#">Service</a>
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
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link-item">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://uxtheme.net/product-support/" class="nav-link-item">Support</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header-btns  header-btn-l-17 ms-auto d-none d-xs-inline-flex align-items-center">
            
      @if (Route::has('login'))
          @auth
          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
          @else
          <a href="{{ route('login') }}" class="btn sign-in-btn focus-reset">Log in</a>

          @if (Route::has('register'))
          <a href="{{ route('register') }}"
              class="start-trail-btn btn focus-reset">Register</a>
          @endif
          @endauth
      @endif
        </div>
        <!-- mobile menu trigger -->
        <div class="mobile-menu-trigger">
          <span></span>
        </div>
        <!--/.Mobile Menu Hamburger Ends-->
      </nav>
    </div>
  </header>
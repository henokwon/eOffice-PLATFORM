<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eoffice Platform </title>
  <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="./csss/bootstrap.css">
  <link rel="stylesheet" href="./fontss/icon-font/css/style.css">
  <link rel="stylesheet" href="./fontss/typography-font/typo.css">
  <link rel="stylesheet" href="./fontss/fontawesome-5/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="./pluginss/aos/aos.min.css">
  <link rel="stylesheet" href="./pluginss/fancybox/jquery.fancybox.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="./csss/main.css">
  <!-- Custom stylesheet -->






  {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
      /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
      html {
          line-height: 1.15;
          -webkit-text-size-adjust: 100%
      }

      body {
          margin: 0
      }

      a {
          background-color: transparent
      }

      [hidden] {
          display: none
      }

      html {
          font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
          line-height: 1.5
      }

      *,
      :after,
      :before {
          box-sizing: border-box;
          border: 0 solid #e2e8f0
      }

      a {
          color: inherit;
          text-decoration: inherit
      }

      svg,
      video {
          display: block;
          vertical-align: middle
      }

      video {
          max-width: 100%;
          height: auto
      }

      .bg-white {
          --bg-opacity: 1;
          background-color: #fff;
          background-color: rgba(255, 255, 255, var(--bg-opacity))
      }

      .bg-gray-100 {
          --bg-opacity: 1;
          background-color: #f7fafc;
          background-color: rgba(247, 250, 252, var(--bg-opacity))
      }

      .border-gray-200 {
          --border-opacity: 1;
          border-color: #edf2f7;
          border-color: rgba(237, 242, 247, var(--border-opacity))
      }

      .border-t {
          border-top-width: 1px
      }

      .flex {
          display: flex
      }

      .grid {
          display: grid
      }

      .hidden {
          display: none
      }

      .items-center {
          align-items: center
      }

      .justify-center {
          justify-content: center
      }

      .font-semibold {
          font-weight: 600
      }

      .h-5 {
          height: 1.25rem
      }

      .h-8 {
          height: 2rem
      }

      .h-16 {
          height: 4rem
      }

      .text-sm {
          font-size: .875rem
      }

      .text-lg {
          font-size: 1.125rem
      }

      .leading-7 {
          line-height: 1.75rem
      }

      .mx-auto {
          margin-left: auto;
          margin-right: auto
      }

      .ml-1 {
          margin-left: .25rem
      }

      .mt-2 {
          margin-top: .5rem
      }

      .mr-2 {
          margin-right: .5rem
      }

      .ml-2 {
          margin-left: .5rem
      }

      .mt-4 {
          margin-top: 1rem
      }

      .ml-4 {
          margin-left: 1rem
      }

      .mt-8 {
          margin-top: 2rem
      }

      .ml-12 {
          margin-left: 3rem
      }

      .-mt-px {
          margin-top: -1px
      }

      .max-w-6xl {
          max-width: 72rem
      }

      .min-h-screen {
          min-height: 100vh
      }

      .overflow-hidden {
          overflow: hidden
      }

      .p-6 {
          padding: 1.5rem
      }

      .py-4 {
          padding-top: 1rem;
          padding-bottom: 1rem
      }

      .px-6 {
          padding-left: 1.5rem;
          padding-right: 1.5rem
      }

      .pt-8 {
          padding-top: 2rem
      }

      .fixed {
          position: fixed
      }

      .relative {
          position: relative
      }

      .top-0 {
          top: 0
      }

      .right-0 {
          right: 0
      }

      .shadow {
          box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
      }

      .text-center {
          text-align: center
      }

      .text-gray-200 {
          --text-opacity: 1;
          color: #edf2f7;
          color: rgba(237, 242, 247, var(--text-opacity))
      }

      .text-gray-300 {
          --text-opacity: 1;
          color: #e2e8f0;
          color: rgba(226, 232, 240, var(--text-opacity))
      }

      .text-gray-400 {
          --text-opacity: 1;
          color: #cbd5e0;
          color: rgba(203, 213, 224, var(--text-opacity))
      }

      .text-gray-500 {
          --text-opacity: 1;
          color: #a0aec0;
          color: rgba(160, 174, 192, var(--text-opacity))
      }

      .text-gray-600 {
          --text-opacity: 1;
          color: #718096;
          color: rgba(113, 128, 150, var(--text-opacity))
      }

      .text-gray-700 {
          --text-opacity: 1;
          color: #4a5568;
          color: rgba(74, 85, 104, var(--text-opacity))
      }

      .text-gray-900 {
          --text-opacity: 1;
          color: #1a202c;
          color: rgba(26, 32, 44, var(--text-opacity))
      }

      .underline {
          text-decoration: underline
      }

      .antialiased {
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale
      }

      .w-5 {
          width: 1.25rem
      }

      .w-8 {
          width: 2rem
      }

      .w-auto {
          width: auto
      }

      .grid-cols-1 {
          grid-template-columns: repeat(1, minmax(0, 1fr))
      }

      @media (min-width:640px) {
          .sm\:rounded-lg {
              border-radius: .5rem
          }

          .sm\:block {
              display: block
          }

          .sm\:items-center {
              align-items: center
          }

          .sm\:justify-start {
              justify-content: flex-start
          }

          .sm\:justify-between {
              justify-content: space-between
          }

          .sm\:h-20 {
              height: 5rem
          }

          .sm\:ml-0 {
              margin-left: 0
          }

          .sm\:px-6 {
              padding-left: 1.5rem;
              padding-right: 1.5rem
          }

          .sm\:pt-0 {
              padding-top: 0
          }

          .sm\:text-left {
              text-align: left
          }

          .sm\:text-right {
              text-align: right
          }
      }

      @media (min-width:768px) {
          .md\:border-t-0 {
              border-top-width: 0
          }

          .md\:border-l {
              border-left-width: 1px
          }

          .md\:grid-cols-2 {
              grid-template-columns: repeat(2, minmax(0, 1fr))
          }
      }

      @media (min-width:1024px) {
          .lg\:px-8 {
              padding-left: 2rem;
              padding-right: 2rem
          }
      }

      @media (prefers-color-scheme:dark) {
          .dark\:bg-gray-800 {
              --bg-opacity: 1;
              background-color: #2d3748;
              background-color: rgba(45, 55, 72, var(--bg-opacity))
          }

          .dark\:bg-gray-900 {
              --bg-opacity: 1;
              background-color: #1a202c;
              background-color: rgba(26, 32, 44, var(--bg-opacity))
          }

          .dark\:border-gray-700 {
              --border-opacity: 1;
              border-color: #4a5568;
              border-color: rgba(74, 85, 104, var(--border-opacity))
          }

          .dark\:text-white {
              --text-opacity: 1;
              color: #fff;
              color: rgba(255, 255, 255, var(--text-opacity))
          }

          .dark\:text-gray-400 {
              --text-opacity: 1;
              color: #cbd5e0;
              color: rgba(203, 213, 224, var(--text-opacity))
          }

          .dark\:text-gray-500 {
              --tw-text-opacity: 1;
              color: #6b7280;
              color: rgba(107, 114, 128, var(--tw-text-opacity))
          }
      }
  </style>

  <style>
      body {
          font-family: 'Nunito', sans-serif;
      }
  </style>

  {{-- Import js and tailwindcss file --}}

  {{-- <link rel="stylesheet" href="../css/app.css"> --}}
  {{--
  <link href="{{mix('css/app.css')}}"> --}}
  {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}} 




</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader.gif" alt="preloader">
   </div>
   </div>    -->
    <!--Site Header Area -->
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
    <!-- navbar- -->
    <!-- Hero Area -->
    <div class="hero-area-l-17 position-relative">
      <div class="container">
        <div class="row position-relative justify-content-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11 order-lg-1 order-1" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="content text-center">
              <h1>Atmosphere to grow!</h1>
              <p>Good office and great leaders make a perfect match.</p>
              <a href="#" class="btn">Start free 14 days trial</a>
              {{-- <span>No credit card required</span> --}}
            </div>
          </div>
          <div class="col-xl-8 col-lg-9 order-lg-1 order-0">
            <div class="hero-area-image">
              <img src="image/l8/hero-img.png" alt="" class="w-100">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Feature Area -->
    <div class="feature-area-l-17 position-relative">
      <div class="container">
        <div class="row feature-area-l-17-items justify-content-center text-center">
          <div class="col-lg-4 col-md-6 col-sm-9">
            <div class="single-features single-border position-relative">
              <div class="circle-dot-1">
                <i class="fas fa-circle"></i>
              </div>
              <h4>Single Platform</h4>
              <p>Create custom landing pages with
                Shade that convert more visitors than any website.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-9">
            <div class="single-features single-border position-relative">
              <div class="circle-dot-2">
                <i class="fas fa-circle"></i>
              </div>
              <h4>Faster Communication</h4>
              <p>Create custom landing pages with
                Shade that convert more visitors than any website.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-9">
            <div class="single-features">
              <div class="circle-dot-3">
                <i class="fas fa-circle"></i>
              </div>
              <h4>Everything in One Place</h4>
              <p>Create custom landing pages with
                Shade that convert more visitors than any website.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Content Area 1-->
    <div class="content-area-l-17-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-10 col-lg-12">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                <div class="content-img position-relative">
                  <div class="image-1">
                    <img src="image/l8/content-image-1.png" alt="">
                  </div>
                  <div class="image-2">
                    <img src="image/l8/content-image-2.png" alt="">
                  </div>
                </div>
              </div>
              <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-6 col-md-8" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                <div class="content section-heading-11">
                  <h2> Manage everything faster in single place.</h2>
                  <p>Create custom landing pages with
                    Shade that convert more visitors than any website. With lots of unique blocks, you can easily build a
                    page without coding.</p>
                  <a href="#" class="btn focus-reset">Start free 14 days trial</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Content Area 2-->
    <div class="content-area-l-17-2">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-10 col-lg-12">
            <div class="row align-items-center justify-content-center">
              <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 order-lg-1 order-1" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                <div class="content section-heading-11">
                  <h2> Manage everything faster in single place.</h2>
                  <p>Create custom landing pages with
                    Shade that convert more visitors than any website. With lots of unique blocks, you can easily build a
                    page without coding.</p>
                  <a href="#" class="btn focus-reset">Start free 14 days trial</a>
                </div>
              </div>
              <div class="offset-xxl-1 col-xxl-6 col-xl-6 col-lg-6 col-md-8 order-lg-1 order-0" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                <div class="content-img position-relative">
                  <div class="image-1">
                    <img src="image/l8/content-image-3.png" alt="">
                  </div>
                  <div class="image-2">
                    <img src="image/l8/content-image-4.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Video Area-->
    <div class="video-area-l-17">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-12">
            <div class="video-content text-center">
              <a data-fancybox="" href="https://www.youtube.com/embed/9yc1lfFZX-I"><i
              class="fas fa-play font-size-7"></i></a>
              <h2>We help you to be successful</h2>
              <p>Create custom landing pages with
                Shade that convert more visitors than any website. With lots of unique blocks, you can easily build a page
                without coding.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Pricing Area-->
    <div class="pricing-area-l-17 position-relative overflow-hidden">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 text-center" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
            <div class="content section-heading-11">
              <h2>Choose a plan to start</h2>
              <p>Wireframes are generally created by business analysts, user experience designers, developers, visual
                designers, and by those with expertise</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center" id="table-price-value" data-pricing-dynamic data-value-active="monthly">
          <div class="col-md-12 pricing-main-area-l-17 text-center">
            <div class="toggle-btn d-inline-block  justify-content-center">
              <a class="btn-toggle btn-toggle-2 d-flex price-deck-trigger" data-pricing-trigger data-target="#table-price-value" href="javascript:">
                <span class="round"></span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
            <div class="single-price" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
              <div class="price-top justify-content-between">
                <span>Basic</span>
              </div>
              <div class="main-price">
                <div class="price d-flex position-relative ">
                  <span class="d-inline-block dynamic-value">$</span>
                  <h2 class="d-inline-block dynamic-value" data-active="15" data-monthly="19" data-yearly="199"><span
                  class="dynamic-value" data-active="/ month" data-monthly="/ month" data-yearly="/year"></span></h2>
                </div>
              </div>
              <p>Good for small business launching their products less then once a year</p>
              <div class="price-body pt-8">
                <ul class="pricing-list list-unstyled">
                  <li> <i class="icon icon-check-2-2"></i> Unlimited Blocks</li>
                  <li> <i class="icon icon-check-2-2"></i> 5GB Clould Storages</li>
                  <li><del> <i class="icon icon-check-2-2"></i> Custom Domain Names</del></li>
                  <li><del> <i class="icon icon-check-2-2"></i>Unlimited Emails</del></li>
                </ul>
              </div>
              <div class="price-btn">
                <a class="btn" href="#">Start free 14 days trial</a>
                <p>No credit card required</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
            <div class="single-price popular-pricing popular-pricing-3 position-relative" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
              <div class="price-top justify-content-between">
                <span>Pro</span>
              </div>
              <div class="main-price">
                <div class="price d-flex position-relative">
                  <span class="d-inline-block dynamic-value ">$</span>
                  <h2 class="d-inline-block dynamic-value" data-active="15" data-monthly="29" data-yearly="299"> <span
                  class="dynamic-value" data-active="/  month" data-monthly="/ month" data-yearly="/year"></span></h2>
                </div>
              </div>
              <p>Good for small business launching their products less then once a year</p>
              <div class="price-body">
                <ul class="pricing-list list-unstyled">
                  <li> <i class="icon icon-check-2-2"></i> Unlimited Blocks</li>
                  <li> <i class="icon icon-check-2-2"></i> 5GB Clould Storages</li>
                  <li> <i class="icon icon-check-2-2"></i> Custom Domain Names</li>
                  <li> <i class="icon icon-check-2-2"></i>Unlimited Emails</li>
                </ul>
              </div>
              <div class="price-btn">
                <a class="btn" href="#">Start free 14 days trial</a>
                <p>No credit card required</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Brand Area-->
    <div class="brand-area-l-17">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-9 col-lg-11 col-md-12">
            <div class="content text-center">
              <p>We are proud to have some big brands as our customer</p>
            </div>
            <div class="brand-area-l-17-items d-flex justify-content-center justify-content-xl-between align-items-center flex-wrap ">
              <div class="single-brand " data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                <img src="image/l8/brand-logo-1.svg" alt="">
              </div>
              <div class="single-brand " data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
                <img src="image/l8/brand-logo-2.svg" alt="">
              </div>
              <div class="single-brand " data-aos="fade-right" data-aos-duration="900" data-aos-once="true">
                <img src="image/l8/brand-logo-3.svg" alt="">
              </div>
              <div class="single-brand " data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                <img src="image/l8/brand-logo-4.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Testimonial Area-->
    <div class="testimonial-area-l-17">
      <div class="container">
        <div class="row justify-content-center no-gutters border-collapse-1">
          <div class="col-lg-4 col-md-6 col-sm-9 p-0">
            <div class="testimonial-card border h-100">
              <img src="image/l8/quote.png" alt="">
              <p>
                “You made it so simple. My new site is so much faster and
                easier to work with than my old site. I just choose the page, make the change and click save. ”
              </p>
              <div class="d-flex align-items-center">
                <div class="customer-img mr-4">
                  <img src="image/l8/client-img-1.png" alt="">
                </div>
                <div class="user-identity">
                  <h5>Sallie Lawson</h5>
                  <span>Founder of Crips</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-9 p-0">
            <div class="testimonial-card border h-100">
              <img src="image/l8/quote.png" alt="" class="mb-12">
              <p>
                “Simply the best. Better than all the rest. I’d recommend this product to beginners and advanced users.”
              </p>
              <div class="d-flex align-items-center">
                <div class="customer-img">
                  <img src="image/l8/client-img-2.png" alt="">
                </div>
                <div class="user-identity">
                  <h5>Sallie Lawson</h5>
                  <span>Founder of Crips</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-9 p-0">
            <div class="testimonial-card border h-100">
              <img src="image/l8/quote.png" alt="" class="mb-12">
              <p>
                “This is a top quality product. No need to think twice before purchasing, you simply could not go wrong”
              </p>
              <div class="d-flex align-items-center">
                <div class="customer-img mr-4">
                  <img src="image/l8/client-img-3.png" alt="">
                </div>
                <div class="user-identity">
                  <h5>Sallie Lawson</h5>
                  <span>Founder of Crips</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--CTA Area-->
    <div class="cta-area-l-17">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="d-md-flex justify-content-between text-align-lg-start text-center align-items-center">
              <h2>Manage your team in one place</h2>
              <a href="#" class="btn">Start free 14 days trial</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Footer Area-->
    <footer class="footer-area-l-17 position-relative">
      <div class="footer-shape">
        <img src="image/l8/footer-shape.svg" alt="">
      </div>
      <div class="container pt-lg-23 pt-15 pb-12">
        <div class="row footer-area-l-17-items justify-content-between" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
          <div class="col">
            <div class="footer-widget widget2">
              <p class="widget-title">Store</p>
              <ul class="widget-links pl-0 list-unstyled ">
                <li><a href="">Catalog</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">F.a.q.</a></li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="footer-widget widget3">
              <p class="widget-title">About</p>
              <ul class="widget-links pl-0 list-unstyled ">
                <li><a href="">Catalog</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Features</a></li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="footer-widget widget4">
              <p class="widget-title">Policy</p>
              <ul class="widget-links pl-0 list-unstyled ">
                <li><a href="">Catalog</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Features</a></li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="footer-widget widget4">
              <p class="widget-title">Team</p>
              <ul class="widget-links pl-0 list-unstyled ">
                <li><a href="">Catalog</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Features</a></li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="footer-widget widget4">
              <p class="widget-title">Support</p>
              <ul class="widget-links pl-0 list-unstyled ">
                <li><a href="">Catalog</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Features</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-bottom start -->
      <div class="copyright-area-l-17 text-center text-md-start">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 col-md-4">
              <div class="copyright">
                <p> &copy; Grayic 2020 All right reserved. </p>
              </div>
            </div>
            <div class="col-lg-5 col-md-6">
              <div class="footer-menu">
                <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                  <li><a href="#">Privacy Policy</a></li>
                  <li> <a href="#features">Terms & Conditions</a> </li>
                  <li><a href="#features"> Site map</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-2">
              <div class="social-icons text-md-end">
                <ul class="pl-0 list-unstyled">
                  <li class="d-inline-block"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="d-inline-block"><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li class="d-inline-block"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Vendor Scripts -->
  <script src="jss/vendor.min.js"></script>
  <!-- Plugin's Scripts -->
  <script src="./pluginss/fancybox/jquery.fancybox.min.js"></script>
  <script src="./pluginss/aos/aos.min.js"></script>
  <script src="./pluginss/menu/menu.js"></script>
  <!-- Activation Script -->
  <script src="jss/custom.js"></script>
</body>

</html>
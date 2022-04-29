<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eoffice Platform </title>
  <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  @include('landingPageComponent.style')

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
    @include('landingPageComponent.header')
    <!-- Hero Area -->
    @include('landingPageComponent.hero')
    <!--Feature Area -->
    @include('landingPageComponent.feature')
    
    <!--Content Area 1-->
    @include('landingPageComponent.content1')
   
    <!--Content Area 2-->
    @include('landingPageComponent.content2')
    <!--Video Area-->

    @include('landingPageComponent.videoArea')
    <!--Pricing Area-->
    @include('landingPageComponent.princing')
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
                <img src="images/l8/brand-logo-1.svg" alt="">
              </div>
              <div class="single-brand " data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
                <img src="images/l8/brand-logo-2.svg" alt="">
              </div>
              <div class="single-brand " data-aos="fade-right" data-aos-duration="900" data-aos-once="true">
                <img src="images/l8/brand-logo-3.svg" alt="">
              </div>
              <div class="single-brand " data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                <img src="images/l8/brand-logo-4.svg" alt="">
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
    @include('landingPageComponent.CTA')
    <!--Footer Area-->
    @include('landingPageComponent.footer')
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
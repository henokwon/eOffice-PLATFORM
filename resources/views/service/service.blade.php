<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eOffice Platform</title>
    @include('landingPageComponent.style')
</head>
<body  data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
    <div class="site-wrapper overflow-hidden position-relative">
    @include('landingPageComponent.header')
    {{-- @include('landingPageComponent.hero') --}}

    <div class="hero-area-l-17 position-relative">
        <div class="container">
          <div class="row position-relative justify-content-center">
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11 order-lg-1 order-1" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
              <div class="content text-center">
              </div>
            </div>
            <div class="col-xl-8 col-lg-9 order-lg-1 order-0">
              <div class="hero-area-image" >
                {{-- <img src="images/l8/hero-img.png" alt="" class="w-100"> --}}
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class=" m-7 p-6">
        <h1 class=" text-center text-3xl">Available Service</h1>
    </div>
    @include('landingPageComponent.feature')
    @include('landingPageComponent.footer')
      @include('modal.login')
    @include('modal.register')
  
</div>
</div>
<script src="jss/vendor.min.js"></script>
<!-- Plugin's Scripts -->
<script src="./pluginss/fancybox/jquery.fancybox.min.js"></script>
<script src="./pluginss/aos/aos.min.js"></script>
<script src="./pluginss/menu/menu.js"></script>
<!-- Activation Script -->
<script src="jss/custom.js"></script>
</body>
</html>
<div>
    





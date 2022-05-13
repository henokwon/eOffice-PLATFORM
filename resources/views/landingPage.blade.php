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
    {{-- <div id="loading">
      <div class="preloader">

        <img src="./images/loading.gif" alt="preloader" width="380px;">
      </div>
    </div> --}}
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
    @include('landingPageComponent.brand')
    @include('landingPageComponent.testimonia')
   

    <!--CTA Area-->
    @include('landingPageComponent.CTA')
    <!--Footer Area-->
    @include('landingPageComponent.footer')

    {{-- login and register blade --}}
    @include('modal.login')
    @include('modal.register')
  </div>
  {{-- <script type="text/javascript" src="{{asset('js/auth.js')}}" defer></script> --}}
  {{-- @yield('scripts') --}}
  <!-- Vendor Scripts -->
  {{-- <script type="text/javascript">
    window.baseUrl="{{URL::to('/')}}";
    @if(session('success'))
    toastr.success('{{session("success")}}', 'Success', {timeOut: 5000});
    @endif
    @if(session('error'))
    toastr.error('{{session("error")}}', 'Error', {timeOut: 5000});
    @endif
  </script> --}}
  <script src="jss/vendor.min.js"></script>
  <!-- Plugin's Scripts -->
  <script src="./pluginss/fancybox/jquery.fancybox.min.js"></script>
  <script src="./pluginss/aos/aos.min.js"></script>
  <script src="./pluginss/menu/menu.js"></script>
  <!-- Activation Script -->
  <script src="jss/custom.js"></script>
</body>

</html>
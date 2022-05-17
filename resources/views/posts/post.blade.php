<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>eOffice platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords"
        content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!-- Facebook and Twitter integration -->
    @include('posts.style')
    @include('landingPageComponent.style')

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>


</head>

<body>

    <div id="loading">
        <div class="preloader">

            {{-- <img src="./image/loader.gif" alt="preloader" width="380px;"> --}}
        </div>
    </div>
    @if(!Auth::id())
    <div id="page">
        @include('landingPageComponent.header')
        <div class="hero-area-l-17 position-relative">
            <div class="container">
                <div class="row position-relative justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11 order-lg-1 order-1" data-aos="fade-right"
                        data-aos-duration="800" data-aos-once="true">
                        <div class="content text-center">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 order-lg-1 order-0">
                        <div class="hero-area-image">
                            {{-- <img src="images/l8/hero-img.png" alt="" class="w-100"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-wrap">

            <div id="fh5co-blog">
                <div class="row">
                    {{-- Elemnt container - --}}
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="blog-bg" style="background-image: url(blog/images/blog-1.jpg);"></a>
                            <div class="blog-text">
                                <span class="posted_on">Feb. 15th 2022</span>
                                <h3><a href="#">Photoshoot On The Street</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <ul class="stuff">
                                    {{-- <li><i class="icon-heart3"></i>249</li>
                                    <li><i class="icon-eye2"></i>1,308</li> --}}
                                    <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="blog-bg" style="background-image: url(blog/images/blog-2.jpg);"></a>
                            <div class="blog-text">
                                <span class="posted_on">Feb. 15th 2022</span>
                                <h3><a href="#">Surfing at Philippines</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <ul class="stuff">
                                    <li><i class="icon-heart3"></i>249</li>
                                    <li><i class="icon-eye2"></i>1,308</li>
                                    <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="blog-bg" style="background-image: url(blog/images/blog-3.jpg);"></a>
                            <div class="blog-text">
                                <span class="posted_on">Feb. 15th 2022</span>
                                <h3><a href="#">Focus On Uderwater</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <ul class="stuff">
                                    <li><i class="icon-heart3"></i>249</li>
                                    <li><i class="icon-eye2"></i>1,308</li>
                                    <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="blog-bg" style="background-image: url(blog/images/blog-1.jpg);"></a>
                            <div class="blog-text">
                                <span class="posted_on">Feb. 15th 2022</span>
                                <h3><a href="#">Photoshoot On The Street</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <ul class="stuff">
                                    <li><i class="icon-heart3"></i>249</li>
                                    <li><i class="icon-eye2"></i>1,308</li>
                                    <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="blog-bg" style="background-image: url(blog/images/blog-2.jpg);"></a>
                            <div class="blog-text">
                                <span class="posted_on">Feb. 15th 2022</span>
                                <h3><a href="#">Surfing at Philippines</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <ul class="stuff">
                                    <li><i class="icon-heart3"></i>249</li>
                                    <li><i class="icon-eye2"></i>1,308</li>
                                    <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="blog-bg" style="background-image: url(blog/images/blog-3.jpg);"></a>
                            <div class="blog-text">
                                <span class="posted_on">Feb. 15th 2022</span>
                                <h3><a href="#">Focus On Uderwater</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <ul class="stuff">
                                    <li><i class="icon-heart3"></i>249</li>
                                    <li><i class="icon-eye2"></i>1,308</li>
                                    <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END container-wrap -->

        @include('landingPageComponent.footer')
        @include('modal.login')
        @include('modal.register')
    </div>
     @else
     @include('landingPageComponent.header')
     @include('posts.manage1')
     @endif

    {{-- Header style js for interactive --}}
    <script src="jss/vendor.min.js"></script>
    <!-- Plugin's Scripts -->
    <script src="./pluginss/fancybox/jquery.fancybox.min.js"></script>
    <script src="./pluginss/aos/aos.min.js"></script>
    <script src="./pluginss/menu/menu.js"></script>
    <!-- Activation Script -->
    <script src="jss/custom.js"></script>
    {{-- end header --}}



    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="blog/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="blog/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="blog/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="blog/js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="blog/js/jquery.flexslider-min.js"></script>
    <!-- Magnific Popup -->
    <script src="blog/js/jquery.magnific-popup.min.js"></script>
    <script src="blog/js/magnific-popup-options.js"></script>
    <!-- Counters -->
    <script src="blog/js/jquery.countTo.js"></script>
    <!-- Main -->
    <script src="blog/js/main.js"></script>

</body>

</html>
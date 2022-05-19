<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Eoffice Platform</title>
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @include('posts.style')
    @include('landingPageComponent.style')

    <style type="text/css">
    /* readmore button style  */ 
           .read-more-show {
            cursor: pointer;
            color: #ed8323;
        }

        .read-more-hide {
            cursor: pointer;
            color: #ed8323;
        }

        .hide_content {
            display: none;
            background-color: blueviolet;
        }

        .hide_content {
            display: none;
        }

    </style>
</head>

<body>
    @include('landingPageComponent.header')
    <div class="hero-area-l-17 position-relative">
        <div class="container">
            <div class="row position-relative justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11 order-lg-1 order-1" data-aos="fade-right"
                    data-aos-duration="800" data-aos-once="true">
                    <div class="content text-center ">
                        <div class=" text-center py-8">
                            <h2 class=" text-white text-4xl">Manage Your Blogs</h2>
                            <hr>
                        </div>

                        <div class=" justify-center grid gap-4 grid-cols-2">
                            <div class="mb-3 xl:w-96">
                                <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                                    <a href="/blog/create/post"
                                        class=" cursor-pointer text-2xl py-2.5 px-5 mr-2 mb-2  font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        Post Blogs
                                    </a>
                                </div>

                            </div>
                            <div class="mb-3 xl:w-96">
                                <form action="{{ url('/search') }}" method="GET" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                                        <input type="search" name="search"
                                            class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            placeholder="Search" aria-label="Search" aria-describedby="button-addon2"
                                            required>
                                        <button
                                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out  items-center"
                                            type="submit" id="button-addon2">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="search" class="w-4" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
    <div class=" text-center w-auto p-10">
        <div class="">

            @if (\Session::has('message'))
                <div class="alert alert-success">
                    <ul>
                        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
                            role="alert">
                            <span class="font-medium text-2xl">Success!</span>
                            <ul>
                                <li class=" text-2xl font-medium">{!! \Session::get('message') !!}</li>
                            </ul>
                        </div>
                    </ul>
                </div>
            @endif
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="container-wrap">

                    <div id="fh5co-blog">
                        <div class="row">
                            {{-- Elemnt container - --}}
                            @if ($data->isNotEmpty())
                                @foreach ($data as $item)
                                    <div class="col-md-4">
                                        <div class="fh5co-blog animate-box">
                                            <a href="#" class="blog-bg"
                                                style="background-image: url('assets/{{ $item->photo }}');"></a>
                                            <div class="blog-text">
                                                <span class="posted_on">Posted on
                                                    {{ $item->created_at->diffForHumans() }}</span>
                                                <h3><a href="#">{{ $item->title }}</a></h3>
                                                <p class="ArticleBody">
                                                <p class="ArticleBody">
                                                    {{ substr(strip_tags($item->body), 0, 50) }}
                                                    @if (strlen(strip_tags($item->body)) > 50)
                                                        <button class=" readmore">...Read More<i class="icon-arrow-right22"></i></button>
                                                    @endif
                                                </p>
                                                </p>

                                                {{-- @if (strlen($item->body) > 50)
                                                    {{ substr($item->body, 0, 50) }}
                                                    <span class=" read-more-show hide_content">More
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                    <span class="read-more-content">
                                                        {{ substr($item->body, 50, strlen($item->body)) }}
                                                        <span class="read-more-hide hide_content">Less
                                                            <i class="fa fa-angle-up"></i></span>
                                                    </span>
                                                @else
                                                    <p>{{ $item->body }}</p>
                                                    <h1 class=" hide_content">htrtdfjgdfgjdgjg</h1>
                                                @endif --}}
                                                <div class="d-flex align-items-center">
                                                    <div class="customer-img mr-4">
                                                      <img src="{{ URL::asset('images/l8/client-img-1.png')}}" alt="">
                                                    </div>
                                                    <div class="user-identity">
                                                      <h5>Sallie Lawson</h5>
                                                      <span>Founder of Crips</span>
                                                    </div>
                                                  </div>
                                                <ul class="stuff">
                                                    <li><a href="delete/{{ $item->id }}"
                                                            class="bg-gray-200 hover:bg-gray-100 border-b-4 border-gray-400 hover:border-gray-200 text-black text-center py-2 px-4 rounded">
                                                            Remove
                                                        </a></li>
                                                    <li><a href="{{ url('edit-post/' . $item->id) }}"
                                                            class="bg-gray-200 hover:bg-gray-100 border-b-4 border-gray-400 hover:border-gray-200 text-black text-center py-2 px-4 rounded">
                                                            Edit
                                                        </a></li>
                                                    {{-- <li><a type="button" class="ReadMor">Read More<i
                                                        class="icon-arrow-right22"></i></a></li> --}}

                                                </ul>

                                            </div>

                                        </div>

                                    </div>
                                @endforeach
                            @else
                                <div>
                                    <h2 class=" text-center text-xl text-red-500">No posts found</h2>
                                </div>
                            @endif
                            <div class="col-md-4">
                                <div class="fh5co-blog animate-box">
                                    <a href="#" class="blog-bg"
                                        style="background-image: url{{ URL::asset('blog/images/blog-1.jpg')}};"></a>
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
                                        <a href="#"
                                            class="bg-gray-200 hover:bg-gray-100 border-b-4 border-gray-400 hover:border-gray-200 text-black text-center py-2 px-4 rounded">
                                            Delete
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="fh5co-blog animate-box">
                                    <a href="#" class="blog-bg"
                                        style="background-image: url{{ URL::asset('blog/images/blog-2.jpg')}};"></a>
                                    <div class="blog-text">
                                        <span class="posted_on">Feb. 15th 2022</span>
                                        <h3><a href="#">Surfing at Philippines</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts.</p>
                                        <ul class="stuff">
                                            <li><a href="#"
                                                    class="bg-gray-200 hover:bg-gray-100 border-b-4 border-gray-400 hover:border-gray-200 text-black text-center py-2 px-4 rounded">
                                                    Remove
                                                </a></li>
                                            <li><a href="#"
                                                    class="bg-gray-200 hover:bg-gray-100 border-b-4 border-gray-400 hover:border-gray-200 text-black text-center py-2 px-4 rounded">
                                                    Edit
                                                </a></li>
                                            <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fh5co-blog animate-box">
                                    <a href="#" class="blog-bg"
                                        style="background-image: url{{ URL::asset('blog/images/blog-3.jpg')}};"></a>
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
                                    <a href="#" class="blog-bg"
                                        style="background-image: url{{ URL::asset('blog/images/blog-1.jpg')}};"></a>
                                    <div class="blog-text">
                                        <span class="posted_on">Feb. 15th 2022</span>
                                        <h3><a href="#">Photoshoot On The Street</a></h3>
                                        <p id="test">Far far away, behind the word mountains, far from the countries
                                            Vokalia and
                                            Consonantia, there live the blind texts.</p>
                                        <ul class="stuff">
                                            <li><i class="icon-heart3"></i>249</li>
                                            <li><i class="icon-eye2"></i>1,308</li>
                                            <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="fh5co-blog animate-box">
                                    <a href="#" class="blog-bg"
                                        style="background-image: blog/images/blog-2.jpg);"></a>
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
                                    <a href="#" class="blog-bg"
                                        style="background-image: url(blog/images/blog-3.jpg);"></a>
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button>Click me</button>
    <h1 id="tests">Hello ,y mom</h1>

    {{-- Header style js for interactive --}}
    <script src="{{ URL::asset('jss/vendor.min.js')}}"></script>
    <!-- Plugin's Scripts -->
    <script src="{{ URL::asset('./pluginss/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{ URL::asset('./pluginss/aos/aos.min.js')}}"></script>
    <script src="{{ URL::asset('./pluginss/menu/menu.js')}}"></script>
    <!-- Activation Script -->
    <script src="{{ URL::asset('jss/custom.js')}}"></script>
    {{-- end header --}}
    @include('posts.script')
    <script>
        $(document).ready(function() {
            //  $(".ReadMor").click(function(){
            // alert("You try to load more!");
            // $('p').toggle();
            //#endregion
            // $(this).parent().toggleClass('showContent');
            //   });
            $('.read-more-content').addClass('hide_content')
            $('.read-more-show, .read-more-hide').removeClass('hide_content')

            // Set up the toggle effect:
            $('.read-more-show').on('click', function(e) {
                $(this).next('.read-more-content').removeClass('hide_content');
                $(this).addClass('hide_content');
                console.log('Hi')
                e.preventDefault();
            });

            // Changes contributed by @diego-rzg
            $('.read-more-hide').on('click', function(e) {
                var p = $(this).parent('.read-more-content');
                p.addClass('hide_content');
                p.prev('.read-more-show').removeClass(
                    'hide_content'); // Hide only the preceding "Read More"
                e.preventDefault();
            });
        });
    </script>
</body>

</html>

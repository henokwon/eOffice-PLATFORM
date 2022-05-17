<!doctype html>
<html>
<head>
   {{-- @include('includes.head') --}}
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <title>Eoffice Platform</title>
   <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
   <header class="row">
       {{-- @include('includes.header') --}}
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
       {{-- @include('includes.footer') --}}
   </footer>
</div>
</body>
</html>
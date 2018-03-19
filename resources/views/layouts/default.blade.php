<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample') -laravel 入門教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>@include("layouts._header")
    <div id="main" class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
    <script src="/js/app.js"></script>
  </body>
</html>
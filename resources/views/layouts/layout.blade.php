<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ URL::asset('css/main.css'); }}" rel="stylesheet" type="text/css">
  <title>@yield('title')</title>
</head>
<body>
  <div class="outer_background">
    <div class="global_container">
      @include('layouts.nav')
      @yield('content')
      @include('layouts.footer')
    </div>
  </div>
  <div class="side_menu_container hiden" id="side_menu_container">
    @include('layouts.side_menu')
  </div>
</body>
<script src="js/index.js"></script>
</html>
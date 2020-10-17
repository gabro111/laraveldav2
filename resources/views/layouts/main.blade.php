<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body{color: @yield('textColor');}
  </style>
  <title>@yield('title')</title>
</head>
<body>
<header>
  @include('menu')
  </header>
  @include('logo')
  @yield('content')
</body>

<footer>
@yield('footer')
</footer>
</html>
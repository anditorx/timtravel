<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
   <!-- style -->
   @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
</head>
<body>

  <!-- navbar -->
  @include('includes.navbar-alternate')
  <!-- header or hero section -->
  @yield('content')

  <!-- section footer -->
  @include('includes.footer')
  
  <!-- section script -->
  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')
</body>
</html>
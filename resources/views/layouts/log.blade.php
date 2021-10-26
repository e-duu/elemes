<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('/images/trend.svg') }}" type="image/gif" sizes="16x16"> 
  @include('includes.admin.style')
  <title>@yield('title')</title>
</head>
<body>
  
  {{-- Page Content --}}
  @yield('content')

  {{-- Script --}}
  @stack('prepend-script')
  @include('includes.admin.script')
  @stack('addon-script')
</body>
</html>
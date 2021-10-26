<!DOCTYPE html>
<html lang="en" style="background-color: #f7f9fd;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('/images/trend.svg') }}" type="image/gif" sizes="16x16"> 
  @include('includes.style')
  <title>@yield('title')</title>
</head>
<body class="overflow-x-hidden" style="font-family: 'Poppins', sans-serif;">
  {{-- Navbar --}}
  @include('includes.navbar')
  
  {{-- Page Content --}}
  @yield('content')

  {{-- Script --}}
  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')
</body>
</html>
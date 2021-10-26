<!DOCTYPE html>
<html lang="en" style="background-color: #fbf7fd;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('/images/trend.svg') }}" type="image/gif" sizes="16x16"> 
  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
  <title>@yield('title')</title>
</head>
<body class="overflow-x-hidden" style="font-family: 'Poppins', sans-serif;">
  <div class="grid grid-cols-12 gap-32">
    <div class="col-span-3">
      {{-- Sidebar --}}
      @include('includes.sidebar')
    </div>
    <div class="col-span-9">
      {{-- Page Content --}}
      @yield('content')
    </div>

  {{-- Script --}}
  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')
</body>
</html>
<!DOCTYPE html>
<html lang="en" style="background-color: #fbf7fd;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('/images/trend.svg') }}" type="image/gif" sizes="16x16">
  @stack('prepend-style')
  @include('includes.admin.style')
  @stack('addon-style')
  <title>@yield('title')</title>
</head>
<body class="overflow-x-hidden" style="font-family: 'Poppins', sans-serif;">
  <div id="wrapper">
    {{-- Sidebar --}}
    @include('includes.admin.sidebar')
    <!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				@include('includes.admin.navbar')
				<!-- End of Topbar -->
				<!-- Begin Page Content -->
				<div class="container-fluid">
          <!-- Page Heading -->
          <div class="mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('sub-title')</h1>
          </div>
          {{-- Page Content --}}
          @yield('content')
        </div>
      </div>
      <!-- /.container-fluid -->
      <!-- Footer -->
      @include('includes.admin.footer')
      <!-- End of Footer -->
    </div>
    <!-- End of Main Content -->
    <!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
		</a>
		<!-- Logout Modal-->
    @include('includes.admin.modal')

  {{-- Script --}}
  @stack('prepend-script')
  @include('includes.admin.script')
  @stack('addon-script')
</body>
</html>
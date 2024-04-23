<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>link feeq</title>
  <link rel="stylesheet" href="{{ asset('assets/admin/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
         Link fee
        </div>
        <!-- Sidebar navigation-->
        @include('admin.layouts.partials.sidebar')
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
        @include('admin.layouts.partials.header')
      <!--  Header End -->
      <div class="container-fluid">
        @yield('content')
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Mas Thomas dihati</p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/admin/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
</body>

</html>
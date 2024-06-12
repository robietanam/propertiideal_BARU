<!DOCTYPE html>
<html lang="en">

<head>
  @include('components.master-dashboard.header')
</head>

<body class="g-sidenav-show  bg-gray-200">
  @include('components.master-dashboard.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('components.master-dashboard.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      
      @yield('content')
      @include('components.master-dashboard.footer')
    </div>
  </main>
  <!--   Core JS Files   -->
  @include('components.master-dashboard.script')
</body>

</html>
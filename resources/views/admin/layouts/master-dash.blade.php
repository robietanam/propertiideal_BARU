<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.components.header')
</head>

<body class="g-sidenav-show  bg-gray-200">
  @include('admin.components.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('admin.components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      
      @yield('content')
      @include('admin.components.footer')
    </div>
  </main>
  <!--   Core JS Files   -->
  @include('admin.components.script')
</body>

</html>
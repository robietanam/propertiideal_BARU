<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-light" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="{{asset('/img')}}/icons/properti-ideal-logo-text.png" class="navbar-brand-img" alt="main_logo">
      {{-- <span class="ms-1 font-weight-bold text-dark">Admin</span> --}}
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Beranda</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark @if(Request::segment(1) == 'admin' && Request::segment(2) == 'dashboard') active bg-gradient-primary @endif" href="/admin/dashboard">
          <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark @if(Request::segment(1) == 'admin' && Request::segment(2) == 'profile') active bg-gradient-primary @endif" href="/admin/profile">
          <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">apartment</i>
          </div>
          <span class="nav-link-text ms-1">Profile Perusahaan</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Properti Ideal</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark @if(Request::segment(1) == 'admin' && Request::segment(2) == 'partner') active bg-gradient-primary @endif" href="/admin/partner">
          <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">recent_actors</i>
          </div>
          <span class="nav-link-text ms-1">Partner Terdaftar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="../pages/dashboard.html">
          <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">shopping_cart_checkout</i>
          </div>
          <span class="nav-link-text ms-1">Jual Properti</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="../pages/dashboard.html">
          <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">sell</i>
          </div>
          <span class="nav-link-text ms-1">Sewa Properti</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Properti Solution</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="/kategori-solution">
          <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">view_list</i>
          </div>
          <span class="nav-link-text ms-1">Kategori Solution</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="../pages/dashboard.html">
          <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">view_kanban</i>
          </div>
          <span class="nav-link-text ms-1">Solusi Properti</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

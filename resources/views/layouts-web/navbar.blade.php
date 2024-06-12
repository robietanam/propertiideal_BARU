<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">propertiideal@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 8534 2343 233</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="img/logo.png" alt=""> -->
          <img src="img/icons/properti-ideal-logo-text.png" alt="" data-aos="fade-in">
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/" class="active">Beranda<br></a></li>
            <li class="dropdown"><a href="{{ route('pages.services') }}"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Properti Ideal</a></li>
                <li><a href="#">Properti Solutions</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Semua Layanan</a></li>
              </ul>
            </li>
            <li><a href="{{ route('pages.sell') }}">Jual</a></li>
            <li><a href="{{ route('pages.buy') }}">Beli</a></li>
            <li><a href="{{ route('pages.rental') }}">Sewa</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li><a href="#contact">Tentang</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="#appointment">Mulai</a>

      </div>

    </div>

  </header>
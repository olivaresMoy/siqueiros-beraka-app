<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
<div class="d-flex flex-column">
    <div class="profile">
    <img src="{{ asset('/assets') }}/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
    <h1 class="text-light"><a href="index.html">SiqueirosBeraka</a></h1>
    <div class="social-links mt-3 text-center">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    </div>
    @auth
    <nav id="navbar" class="nav-menu navbar">
    <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
    </ul>
    </nav>
    <!-- .nav-menu -->
    @else
    <div class="d-flex align-items-center container text-center mt-3 p-4" style="height:50vh;">
        <div class="text-white">
            <h5>Panel de Control</h5>
            <h6>App</h6>
            <p class="text-muted">Permite a los usuarios autorizados ver ajustes y controles básicos del sistema ademas de otorgar aceso y asignar roles a los usuarios de la app.</p>
        </div>
    </div>
    @endguest
</div>
</header><!-- End Header -->
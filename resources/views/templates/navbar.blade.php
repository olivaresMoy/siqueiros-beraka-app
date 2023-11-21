<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
<div class="d-flex flex-column">
    <div class="profile">
        <a href="{{ route('inicio') }}">
            <img src="{{ asset('/assets') }}/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        </a>
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
        <li><a href="#collapseItems2" class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapseItems2" role="button" aria-expanded="false" aria-controls="collapseItems"><i class="bx bx-carousel"></i> <span>Data App</span></a>
            <ul class="collapse" id="collapseItems2">
                <li class="ms-4"><a href="#" class="nav-link"><i class="bx bx-user"></i> <span>Asistencias</span></a></li>
                <li class="ms-4"><a href="#" class="nav-link"><i class="bx bx-file-blank"></i> <span>Calificaciones</span></a></li>
                <li class="ms-4"><a href="#" class="nav-link"><i class="bx bx-book-content"></i> <span>Reportes</span></a></li>
                <li class="ms-4"><a href="#" class="nav-link"><i class="bx bx-server"></i> <span>Tareas</span></a></li>
                <li class="ms-4"><a href="#" class="nav-link"><i class="bx bx-message"></i> <span>Notificaciones</span></a></li>
            </ul>
        </li>
        <li><a href="#collapseItems3" class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapseItems3" role="button" aria-expanded="false" aria-controls="collapseItems"><i class="bx bx-archive"></i> <span>Configurar</span></a>
            <ul class="collapse" id="collapseItems3">
                <li class="ms-4"><a href="{{ route('instituto') }}" class="nav-link"><i class="bx bxs-institution"></i> <span>Institución</span></a></li>
                <li class="ms-4"><a href="#" class="nav-link"><i class="bx bx-layer"></i> <span>Niveles</span></a></li>
                <li class="ms-4"><a href="#" class="nav-link"><i class="bx bx-group"></i> <span>Grupos</span></a></li>
                <li class="ms-4"><a href="#" class="nav-link"><i class="bx bx-news"></i> <span>Asignaturas</span></a></li>
            </ul>
        </li>
        <li><a href="#collapseItems" class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapseItems" role="button" aria-expanded="false" aria-controls="collapseItems"><i class="bx bx-group"></i> <span>Usuarios</span></a>
            <ul class="collapse" id="collapseItems">
                <li class="ms-4"><a href="#" class="nav-link"><i class="bx bx-user-pin"></i> <span>Administradores</span></a></li>
                <li class="ms-4"><a href="#" class="nav-link"><i class="bx bx-user-circle"></i> <span>Tutores</span></a></li>
                <li class="ms-4"><a href="#" class="nav-link"><i class='bx bxs-graduation'></i> <span>Alumnos</span></a></li>
                <li class="ms-4"><a href="#" class="nav-link"><i class='bx bx-book-bookmark'></i> <span>Docentes</span></a></li>
            </ul>
        </li>
        <li><a href="#" onClick="javascript: document.logout.submit();" class="nav-link scrollto"><i class="bx bx-power-off"></i> <span>Salir</span></a></li>
        <form name="logout" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
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
    @endauth
</div>
</header><!-- End Header -->
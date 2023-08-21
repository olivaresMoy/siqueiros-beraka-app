<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>@yield('seccionpagina')</h2>
      <ol>
        <li><a href="#" onClick="javascript: document.logout.submit();" class="nav-link scrollto"><i class="bx bx-power-off"></i></a></li>
        <li>Hola <b>{{ auth()->user()->name }}</b></li>
      </ol>
    </div>

  </div>
</section>
<!-- End Breadcrumbs -->
@extends('templates.master')
@section('titulo','Entrar')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Inicio')
  @include('templates.breadcrumbs')

    <section class="inner-page">
      <div class="container-fluid text-center">
          <div class="row">
            <div class="col">
              <div class="card" style="width: 100%;">
                <div class="card-body">
                <img src="{{ asset('/') }}assets/img/apps.jpg" class="card-img-top img-fluid" alt="..." style="height: 250px; object-fit: cover;">
                  <h3 class="card-title mt-4">Bienvenidos</h3>
                  <h6 class="card-subtitle mb-2 text-muted">Panel de Control</h6>
                  <p class="card-text">Aquí encontrarás recursos para la administración de la App Siqueiros-Beraka disponible<br>para los sistemas Android e iOS que podrás descargar en los vínculos que se muestran abajo.</p>
                  <a href="#" class="card-link">Android</a>
                  <a href="#" class="card-link">iOS</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

  @stop

  </main>
  <!-- End #main -->
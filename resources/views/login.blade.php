@extends('templates.master')
@section('titulo','Acceso')
@section('assets-links')
@section('container')
	@parent

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-row justify-content-end align-items-center">
    <div class="hero-container me-4" data-aos="fade-in">
        <h1>Gestiona</h1>
        <p><span class="typed" data-typed-items="Asistencias., Calificaciones., Reportes., Tareas., Notificaciones."></span></p>
    </div>

    <div class="card me-4 bg-secondary" style="width: 28rem; position: relative; z-index: 999">
      <ul class="my-3  list-group list-group-flush">
        <li class="list-group-item bg-secondary">
          <div class="m-3 mt-lg-0 bg-secondary text-white">
            <div class="d-flex justify-content-center my-1">
              <img src="https://www.shareicon.net/data/128x128/2016/07/11/794381_people_512x512.png" class="bd-placeholder-img rounded-circle" width="90" height="90" preserveAspectRatio="xMidYMid slice" focusable="false">
            </div>
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email">
              </div>
              @error('email')
              <div class="alert alert-info" role="alert">
                {{ $message }}
              </div>
              @enderror
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" value="{{ old('password') }}" name="password" id="password">
              </div>
              @error('password')
              <div class="alert alert-info" role="alert">
                {{ $message }}
              </div>
              @enderror
              <div class="d-flex justify-content-center mt-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Recordarme
                  </label>
                </div>
              </div>
              <div class="d-flex justify-content-center mb-3">
                  <label for="name">Recupera tu contraseña</label>
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-dark" type="submit">Entrar</button>
              </div>
            </form>
          </div>
        </li>
      </ul>
    </div>

    </section>
    <!-- End Hero -->

    @stop
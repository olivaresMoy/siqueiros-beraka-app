@extends('templates.master')
@section('titulo','Notificaciones')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Notificaciones')
  @include('templates.breadcrumbs')
  <section class="inner-page">
    <div class="container-fluid text-center">
      <div class="row">
            <div class="mb-4 text-left">
              <h4 class="bg-light rounded py-3">API endpoint: <a href="{{ $request->root(); }}/api/notificaciones" target="_blank">{{ $request->root(); }}/api/notificaciones</a></h4>
            </div>
            <div class="col">
              <div class="card" style="width: 100%;">
                <div class="card-body">


                <table class="table table-striped table-hover" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Dirigido</th>
                        <th scope="col">Creado</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($notificaciones != "[]")
                      @foreach($notificaciones as $notificacion)
                      <tr>
                        <th scope="row">{{ $notificacion->id }}</th>
                        <td>{{ $notificacion->titulo }}</td>
                        <td>{{ $notificacion->descripcion }}</td>
                        <td>{{ $notificacion->Role->name }}</td>
                        <td>{{ $notificacion->created_at }}</td>
                      </tr>
                      @endforeach
                    @else
                      <tr>
                        <td></td><td></td><td></td><td></td><td></td>
                      </tr>
                    @endif
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

  @stop

  </main>
  <!-- End #main -->
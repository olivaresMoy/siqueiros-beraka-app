@extends('templates.master')
@section('titulo','Calificaciones')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Calificaciones')
  @include('templates.breadcrumbs')
  <section class="inner-page">
    <div class="container-fluid text-center">
      <div class="row">
            <div class="mb-4 text-left">
              <h4 class="bg-light rounded py-3">API endpoint: <a href="{{ $request->root(); }}/api/calificaciones" target="_blank">{{ $request->root(); }}/api/calificaciones</a></h4>
            </div>
            <div class="col">
              <div class="card" style="width: 100%;">
                <div class="card-body">


                <table class="table table-striped table-hover" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th>Asignatura</th>
                        <th>Alumno</th>
                        <th>Calificación</th>
                        <th>Bloque</th>
                        <th>Observaciones</th>
                        <th>Enterado</th>
                        <th>creado</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($calificaciones != "[]")
                      @foreach($calificaciones as $calificacion)
                      <tr>
                        <th scope="row">{{ $calificacion->id }}</th>
                        <td>{{ $calificacion->Asignatura->nombre }}<br>{{ $calificacion->Asignatura->Docente->User->Perfile->nombre }} {{ $calificacion->Asignatura->Docente->User->Perfile->apaterno }} {{ $calificacion->Asignatura->Docente->User->Perfile->amaterno }}</td>
                        <td>{{ $calificacion->User->Perfile->nombre }} {{ $calificacion->User->Perfile->apaterno }} {{ $calificacion->User->Perfile->amaterno }}</td>
                        <td>{{ $calificacion->calificacion }}</td>
                        <td>Bl.{{ $calificacion->bloque }}</td>
                        <td>{{ $calificacion->observaciones }}</td>
                        <td>{{ $calificacion->enterado }}</td>
                        <td>{{ $calificacion->created_at }}</td>
                      </tr>
                      @endforeach
                    @else
                      <tr>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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
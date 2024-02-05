@extends('templates.master')
@section('titulo','Asistencias')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Asistencias')
  @include('templates.breadcrumbs')
  <section class="inner-page">
    <div class="container-fluid text-center">
      <div class="row">
            <div class="mb-4 text-left">
              <h4 class="bg-light rounded py-3">API endpoint: <a href="{{ $request->root(); }}/api/asistencias" target="_blank">{{ $request->root(); }}/api/asistencias</a></h4>
            </div>
            <div class="col">
              <div class="card" style="width: 100%;">
                <div class="card-body">


                <table class="table table-striped table-hover" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Asignatura</th>
                        <th scope="col">Alumno</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">creado</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($asistencias != "[]")
                      @foreach($asistencias as $asistencia)
                      <tr>
                        <th scope="row">{{ $asistencia->id }}</th>
                        <td>{{ $asistencia->Asignatura->nombre }}<br>{{ $asistencia->Asignatura->Docente->User->Perfile->nombre }} {{ $asistencia->Asignatura->Docente->User->Perfile->apaterno }} {{ $asistencia->Asignatura->Docente->User->Perfile->amaterno }}</td>
                        <td>{{ $asistencia->User->Perfile->nombre }} {{ $asistencia->User->Perfile->apaterno }} {{ $asistencia->User->Perfile->amaterno }}</td>
                        <td>{{ $asistencia->estatus }}</td>
                        <td>{{ $asistencia->created_at }}</td>
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
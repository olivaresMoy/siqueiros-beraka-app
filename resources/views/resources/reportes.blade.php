@extends('templates.master')
@section('titulo','Reportes')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Reportes')
  @include('templates.breadcrumbs')
  <section class="inner-page">
    <div class="container-fluid text-center">
      <div class="row">
            <div class="mb-4 text-left">
              <h4 class="bg-light rounded py-3">API endpoint: <a href="{{ $request->root(); }}/api/reportes" target="_blank">{{ $request->root(); }}/api/reportes</a></h4>
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
                        <th>Cumplió</th>
                        <th>Observaciones</th>
                        <th>Enterado</th>
                        <th>creado</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($reportes != "[]")
                      @foreach($reportes as $reporte)
                      <tr>
                        <th scope="row">{{ $reporte->id }}</th>
                        <td>{{ $reporte->Asignatura->nombre }}<br>{{ $reporte->Asignatura->Docente->User->Perfile->nombre }} {{ $reporte->Asignatura->Docente->User->Perfile->apaterno }} {{ $reporte->Asignatura->Docente->User->Perfile->amaterno }}</td>
                        <td>{{ $reporte->User->Perfile->nombre }} {{ $reporte->User->Perfile->apaterno }} {{ $reporte->User->Perfile->amaterno }}</td>
                        <td>
                            Temario:{{ $reporte->cumplio_temario }}<br>
                            Tareas:{{ $reporte->cumplio_tareas }}<br>
                            Conducta:{{ $reporte->cumplio_conducta }}<br>
                            Higiene:{{ $reporte->cumplio_higiene }}<br>
                            Útiles:{{ $reporte->cumplio_utiles }}<br>
                            Apuntes:{{ $reporte->cumplio_apuntes }}<br>
                        </td>
                        <td>{{ $reporte->observaciones }}</td>
                        <td>{{ $reporte->enterado }}</td>
                        <td>{{ $reporte->created_at }}</td>
                      </tr>
                      @endforeach
                    @else
                      <tr>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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
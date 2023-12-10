@extends('templates.master')
@section('titulo','Tareas')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Tareas')
  @include('templates.breadcrumbs')
  <section class="inner-page">
    <div class="container-fluid text-center">
      <div class="row">
            <div class="mb-4 text-left">
              <h4 class="bg-light rounded py-3">API endpoint: <a href="{{ $request->root(); }}/api/tareas" target="_blank">{{ $request->root(); }}/api/tareas</a></h4>
            </div>
            <div class="col">
              <div class="card" style="width: 100%;">
                <div class="card-body">


                <table class="table table-striped table-hover" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Asignatura</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Entrega</th>
                        <th scope="col">Enterado</th>
                        <th scope="col">creado</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($tareas != "[]")
                      @foreach($tareas as $tarea)
                      <tr>
                        <th scope="row">{{ $tarea->id }}</th>
                        <td>{{ $tarea->Asignatura->nombre }}<br>{{ $tarea->Asignatura->Docente->User->Perfile->nombre }} {{ $tarea->Asignatura->Docente->User->Perfile->apaterno }} {{ $tarea->Asignatura->Docente->User->Perfile->amaterno }}</td>
                        <td>{{ $tarea->descripcion }}</td>
                        <td>{{ $tarea->entrega }}</td>
                        <td>{{ $tarea->enterado }}</td>
                        <td>{{ $tarea->created_at }}</td>
                      </tr>
                      @endforeach
                    @else
                      <tr>
                        <td></td><td></td><td></td><td></td><td></td><td></td>
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
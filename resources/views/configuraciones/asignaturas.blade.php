@extends('templates.master')
@section('titulo','Configura asignaturas')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Asignaturas')
  @include('templates.breadcrumbs')
    <section class="inner-page">
      <div class="container-fluid text-center">
          <div class="row">
            <div class="col">
              <div class="card" style="width: 100%;">
                <div class="card-body">


  @if($errors->any())
  <div class="alert alert-warning" role="alert">
    @foreach ($errors->all() as $error)
		<i class="bx bxs-error"></i>{{ $error }}
	  @endforeach
  </div>
  @endif
                  
                  <div class="d-grid gap-2 mx-auto mb-3">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalAsignaturaCreate" class="btn btn-primary btn-xl modal-open" type="button"><i class="bx bxs-plus-circle"></i> Nueva</a>
                  </div>

                  <table class="table table-striped table-hover" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Asignatura</th>
                        <th scope="col">En grupos</th>
                        <th scope="col">Docente</th>
                        <th scope="col"><i class="bx bxs-cog"></i> Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($asignaturas != "[]")
                      @foreach($asignaturas as $asignatura)
                      <tr>
                        <th scope="row">{{ $asignatura->id }}</th>
                        <td>{{ $asignatura->nombre }}</td>
                        <td>
                        @if($asignatura->Grupos != "[]")
                          @foreach($asignatura->Grupos as $grupo)
                          {{ $grupo->grado }} {{ $grupo->grupo }} - {{ $grupo->nivele->nombre }}  - {{ $grupo->nivele->Institucione->nombre }}.<br>
                          @endforeach
                        @endif
                        </td>
                        @if($asignatura->Docente != NULL)
                          <td>{{ $asignatura->Docente->User->Perfile->nombre }} {{ $asignatura->Docente->User->Perfile->apaterno }} {{ $asignatura->Docente->User->Perfile->amaterno }}</td>
                        @else
                          <td></td>
                        @endif
                        <td>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalAsignaturaUpdate" class="modal-open"  id="openModalUpdate-{{$asignatura->id}}" data-item-asignaturaUpdate-{{ $asignatura->id }}="{{ $asignatura->nombre }}" data-item-idDocente-{{ $asignatura->id }}="<?php if($asignatura->Docente != NULL){$asignatura->Docente->id;} ?>" data-item-idAsignatura-{{ $asignatura->id }}="{{ $asignatura->id }}"><i class="bx bxs-edit"></i></a>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalAlertDelete" class="modal-open" id="openModalDel-{{$asignatura->id}}" data-item-id-{{ $asignatura->id }}="{{ $asignatura->id }}"><i class="bx bxs-trash text-danger"></i></a>
                        </td>
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

<script>
  @isset($asignaturas)
    @foreach($asignaturas as $asignatura)

      $(document).on("click", "#openModalDel-{{$asignatura->id}}", function () {
        
        var idDelete = $(this).attr('data-item-id-{{$asignatura->id}}');
        var rutaDelete = "{{route('asignatura-delete',$asignatura->id)}}";
        $("#idDelete").attr('href', rutaDelete );
        $("#elementoDelete").html('la asignatura {{ $asignatura->nombre }},<br><b>aún cuando esto ocasione una desvinculación en asistencias, tareas, reportes y calificaciones</b>');

      });
      $(document).on("click", "#openModalUpdate-{{$asignatura->id}}", function () {
        
        var nombreUpdate= $(this).attr('data-item-asignaturaUpdate-{{$asignatura->id}}');
        var idDocente= $(this).attr('data-item-IdDocente-{{$asignatura->id}}');
        var idAsignatura= $(this).attr('data-item-IdAsignatura-{{$asignatura->id}}');
        $("#asignaturaUpdate1").html(nombreUpdate);
        $("#idAsignatura").val(idAsignatura);
        $("#asignaturaUpdate2").val(nombreUpdate);
        $("#idDocente").val(idDocente);

      });

    @endforeach
  @endisset
  </script>

  @stop

  </main>
  <!-- End #main -->
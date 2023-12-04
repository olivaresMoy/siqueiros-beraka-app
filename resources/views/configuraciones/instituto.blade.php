@extends('templates.master')
@section('titulo','Configura instituciones')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Instituciones')
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
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalInstitucioneCreate" class="btn btn-primary btn-xl modal-open" type="button"><i class="bx bxs-plus-circle"></i> Nueva</a>
                  </div>

                  <table class="table table-striped table-hover" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Director</th>
                        <th scope="col">Ciclo</th>
                        <th scope="col"><i class="bx bxs-cog"></i> Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($instituciones != "[]")
                      @foreach($instituciones as $institucione)
                      <tr>
                        <th scope="row">{{ $institucione->id }}</th>
                        <td>{{ $institucione->nombre }}</td>
                        <td>{{ $institucione->director }}</td>
                        <td>{{ $institucione->ciclo }}</td>
                        <td>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalInstitucioneVer" class="modal-open"  id="openModalVer-{{$institucione->id}}" data-item-nombre-{{ $institucione->id }}="{{ $institucione->nombre }}" data-item-cct-{{ $institucione->id }}="{{ $institucione->cct }}" data-item-zona-{{ $institucione->id }}="{{ $institucione->zona }}" data-item-telefono-{{ $institucione->id }}="{{ $institucione->telefono }}" data-item-direccion-{{ $institucione->id }}="{{ $institucione->direccion }}" data-item-director-{{ $institucione->id }}="{{ $institucione->director }}" data-item-ciclo-{{ $institucione->id }}="{{ $institucione->ciclo }}"><i class="bx bxs-show"></i></a>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalInstitucioneUpdate" class="modal-open"  id="openModalUpdate-{{$institucione->id}}" data-item-nombreUpdate-{{ $institucione->id }}="{{ $institucione->nombre }}" data-item-cctUpdate-{{ $institucione->id }}="{{ $institucione->cct }}" data-item-zonaUpdate-{{ $institucione->id }}="{{ $institucione->zona }}" data-item-telefonoUpdate-{{ $institucione->id }}="{{ $institucione->telefono }}" data-item-direccionUpdate-{{ $institucione->id }}="{{ $institucione->direccion }}" data-item-directorUpdate-{{ $institucione->id }}="{{ $institucione->director }}" data-item-cicloUpdate-{{ $institucione->id }}="{{ $institucione->ciclo }}"><i class="bx bxs-edit"></i></a>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalAlertDelete" class="modal-open" id="openModalDel-{{$institucione->id}}" data-item-id-{{ $institucione->id }}="{{ $institucione->id }}"><i class="bx bxs-trash text-danger"></i></a>

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
  @isset($instituciones)
    @foreach($instituciones as $institucione)

      $(document).on("click", "#openModalDel-{{$institucione->id}}", function () {
        
        var idDelete = $(this).attr('data-item-id-{{$institucione->id}}');
        var rutaDelete = "{{route('instituto-delete',$institucione->id)}}";
        $("#idDelete").attr('href', rutaDelete );
        $("#elementoDelete").html('la institución {{ $institucione->nombre }}');

      });
      $(document).on("click", "#openModalVer-{{$institucione->id}}", function () {
        
        var nombre= $(this).attr('data-item-nombre-{{$institucione->id}}');
        var cct= $(this).attr('data-item-cct-{{$institucione->id}}');
        var zona= $(this).attr('data-item-zona-{{$institucione->id}}');
        var telefono= $(this).attr('data-item-telefono-{{$institucione->id}}');
        var direccion= $(this).attr('data-item-direccion-{{$institucione->id}}');
        var director= $(this).attr('data-item-director-{{$institucione->id}}');
        var ciclo= $(this).attr('data-item-ciclo-{{$institucione->id}}');
        $("#nameInstituto").html(nombre);
        $("#cct").html(cct);
        $("#zona").html(zona);
        $("#telefono").html(telefono);
        $("#direccion").html(direccion);
        $("#director").html(director);
        $("#ciclo").html(ciclo);

      });
      $(document).on("click", "#openModalUpdate-{{$institucione->id}}", function () {
        
        var nombreUpdate= $(this).attr('data-item-nombreUpdate-{{$institucione->id}}');
        var cctUpdate= $(this).attr('data-item-cctUpdate-{{$institucione->id}}');
        var zonaUpdate= $(this).attr('data-item-zonaUpdate-{{$institucione->id}}');
        var telefonoUpdate= $(this).attr('data-item-telefonoUpdate-{{$institucione->id}}');
        var direccionUpdate= $(this).attr('data-item-direccionUpdate-{{$institucione->id}}');
        var directorUpdate= $(this).attr('data-item-directorUpdate-{{$institucione->id}}');
        var cicloUpdate= $(this).attr('data-item-cicloUpdate-{{$institucione->id}}');
        $("#nameInstitutoUpdate").html(nombreUpdate);
        $("#id").val('{{$institucione->id}}');
        $("#nombreUpdate").val(nombreUpdate);
        $("#cctUpdate").val(cctUpdate);
        $("#zonaUpdate").val(zonaUpdate);
        $("#telefonoUpdate").val(telefonoUpdate);
        $("#direccionUpdate").val(direccionUpdate);
        $("#directorUpdate").val(directorUpdate);
        $("#cicloUpdate").val(cicloUpdate);

      });

    @endforeach
  @endisset
  </script>

  @stop

  </main>
  <!-- End #main -->

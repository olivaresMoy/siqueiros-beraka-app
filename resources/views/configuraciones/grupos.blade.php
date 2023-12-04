@extends('templates.master')
@section('titulo','Configura grupos')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Grupos')
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
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalGrupoCreate" class="btn btn-primary btn-xl modal-open" type="button"><i class="bx bxs-plus-circle"></i> Nuevo</a>
                  </div>

                  <table class="table table-striped table-hover" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gdo/Gpo</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Institución</th>
                        <th scope="col"><i class="bx bxs-cog"></i> Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($grupos != "[]")
                      @foreach($grupos as $grupo)
                      <tr>
                        <th scope="row">{{ $grupo->id }}</th>
                        <td>{{ $grupo->grado }} / {{ $grupo->grupo }}</td>
                        <td>{{ $grupo->Nivele->nombre }}</td>
                        <td>{{ $grupo->Nivele->Institucione->nombre }}</td>
                        <td>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalGrupoUpdate" class="modal-open"  id="openModalUpdate-{{$grupo->id}}" data-item-gradoUpdate-{{ $grupo->id }}="{{ $grupo->grado }}" data-item-grupoUpdate-{{ $grupo->id }}="{{ $grupo->grupo }}" data-item-nivelIdUpdate-{{ $grupo->id }}="{{ $grupo->nivele_id }}"><i class="bx bxs-edit"></i></a>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalAlertDelete" class="modal-open" id="openModalDel-{{$grupo->id}}" data-item-id-{{ $grupo->id }}="{{ $grupo->id }}"><i class="bx bxs-trash text-danger"></i></a>
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
  @isset($grupos)
    @foreach($grupos as $grupo)

      $(document).on("click", "#openModalDel-{{$grupo->id}}", function () {
        
        var idDelete = $(this).attr('data-item-id-{{$grupo->id}}');
        var rutaDelete = "{{route('grupo-delete',$grupo->id)}}";
        $("#idDelete").attr('href', rutaDelete );
        $("#elementoDelete").html('el grupo {{ $grupo->grado }} {{ $grupo->grupo }} del nivel {{ $grupo->Nivele->nombre }} en la institución {{ $grupo->Nivele->institucione->nombre }}');

      });
      $(document).on("click", "#openModalUpdate-{{$grupo->id}}", function () {
        
        var gradoUpdate= $(this).attr('data-item-gradoUpdate-{{$grupo->id}}');
        var grupoUpdate= $(this).attr('data-item-grupoUpdate-{{$grupo->id}}');
        var nivelIdUpdate= $(this).attr('data-item-nivelIdUpdate-{{$grupo->id}}');
        $("#GrupoUpdate").html(gradoUpdate + " " + grupoUpdate);
        $("#idGrupoUpdate").val('{{$grupo->id}}');
        $("#gradoUpdate").val(gradoUpdate);
        $("#grupoUpdate").val(grupoUpdate);
        $("#idNivelUpdate").val(nivelIdUpdate);

      });
    @endforeach
  @endisset
  </script>

  @stop

  </main>
  <!-- End #main -->
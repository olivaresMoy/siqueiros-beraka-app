@extends('templates.master')
@section('titulo','Configura niveles')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Niveles')
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
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalNiveleCreate" class="btn btn-primary btn-xl modal-open" type="button"><i class="bx bxs-plus-circle"></i> Nuevo</a>
                  </div>

                  <table class="table table-striped table-hover" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Institución</th>
                        <th scope="col"><i class="bx bxs-cog"></i> Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($niveles != "[]")
                      @foreach($niveles as $nivele)
                      <tr>
                        <th scope="row">{{ $nivele->id }}</th>
                        <td>{{ $nivele->nombre }}</td>
                        <td>{{ $nivele->Institucione->nombre }}</td>
                        <td>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalNiveleUpdate" class="modal-open"  id="openModalUpdate-{{$nivele->id}}" data-item-nombreNivelUpdate-{{ $nivele->id }}="{{ $nivele->nombre }}" data-item-institutoIdUpdate-{{ $nivele->id }}="{{ $nivele->Institucione->id }}"><i class="bx bxs-edit"></i></a>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalAlertDelete" class="modal-open" id="openModalDel-{{$nivele->id}}" data-item-id-{{ $nivele->id }}="{{ $nivele->id }}"><i class="bx bxs-trash text-danger"></i></a>
                        </td>
                      </tr>
                      @endforeach
                    @else
                      <tr>
                        <td></td><td></td><td></td><td></td>
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
  @isset($niveles)
    @foreach($niveles as $nivele)

      $(document).on("click", "#openModalDel-{{$nivele->id}}", function () {
        
        var idDelete = $(this).attr('data-item-id-{{$nivele->id}}');
        var rutaDelete = "{{route('nivel-delete',$nivele->id)}}";
        $("#idDelete").attr('href', rutaDelete );
        $("#elementoDelete").html('el nivel {{ $nivele->nombre }} en la institución {{ $nivele->institucione->nombre }}');

      });
      $(document).on("click", "#openModalUpdate-{{$nivele->id}}", function () {
        
        var nombreUpdate= $(this).attr('data-item-nombreNivelUpdate-{{$nivele->id}}');
        var institutoidUpdate= $(this).attr('data-item-institutoIdUpdate-{{$nivele->id}}');
        $("#nameNivelUpdate").html(nombreUpdate);
        $("#idUpdate").val('{{$nivele->id}}');
        $("#nivelUpdate").val(nombreUpdate);
        $("#idInstitutoUpdate").val(institutoidUpdate);

      });

    @endforeach
  @endisset
  </script>

  @stop

  </main>
  <!-- End #main -->
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



                  @if($errors->any())
                  <div class="alert alert-warning" role="alert">
                    @foreach ($errors->all() as $error)
                    <i class="bx bxs-error"></i>{{ $error }}
                    @endforeach
                  </div>
                  @endif
                  
                  <div class="d-grid gap-2 mx-auto mb-3">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalNotificacionCreate" class="btn btn-primary btn-xl modal-open" type="button"><i class="bx bxs-plus-circle"></i> Nueva Notificación</a>
                  </div>

                <table class="table table-striped table-hover" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Dirigido</th>
                        <th scope="col">Creado</th>
                        <th scope="col"><i class="bx bxs-cog"></i> Acciones</th>
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
                        <td>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalNotificacionUpdate" class="modal-open"  id="openModalUpdate-{{$notificacion->id}}" data-item-notificacionUpdate-{{ $notificacion->id }}="{{ $notificacion->id }}" data-item-idNotificacion-{{ $notificacion->id }}="{{ $notificacion->id }}"><i class="bx bxs-edit"></i></a>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalAlertDelete" class="modal-open" id="openModalDel-{{$notificacion->id}}" data-item-id-{{ $notificacion->id }}="{{ $notificacion->id }}"><i class="bx bxs-trash text-danger"></i></a>
                        </td>
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

    <script>
  @isset($notificaciones)
    @foreach($notificaciones as $notificacion)

      $(document).on("click", "#openModalDel-{{$notificacion->id}}", function () {
        
        var idDelete = "{{$notificacion->id}}";
        var rutaDelete = "{{route('notificacion-delete',$notificacion->id)}}";
        $("#idDelete").attr('href', rutaDelete );
        $("#elementoDelete").html('la notificación <b># {{ $notificacion->id }}</b>');

      });
      $(document).on("click", "#openModalUpdate-{{$notificacion->id}}", function () {
        
        var tituloUpdate = "{{ $notificacion->titulo }}";
        var descripcionUpdate = "{{ $notificacion->descripcion }}";
        var idRoleUpdate = "{{ $notificacion->role_id }}";
        $("#idNotificacionUpdate").val({{ $notificacion->id }});
        $("#tituloUpdate").val(tituloUpdate);
        $("#descripcionUpdate").val(descripcionUpdate);
        $("#idRoleUpdate").val(idRoleUpdate);

      });

    @endforeach
  @endisset
  </script>

  @stop

  </main>
  <!-- End #main -->

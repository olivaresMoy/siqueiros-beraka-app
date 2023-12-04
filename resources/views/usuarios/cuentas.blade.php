@extends('templates.master')
@section('titulo','Cuentas de usuarios')
@section('assets-links')
@section('container')
	@parent

  <!-- Main -->
  <main id="main">

  @section('seccionpagina','Cuentas')
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
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalUsuarioCreate" class="btn btn-primary btn-xl modal-open" type="button"><i class="bx bxs-plus-circle"></i> Nueva</a>
                  </div>

                  <table class="table table-striped table-hover" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre completo</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Rol</th>
                        <th scope="col"><i class="bx bxs-cog"></i> Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($usuarios != "[]")
                      @foreach($usuarios as $usuario)
                      <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <td>{{ $usuario->Perfile->nombre }} {{ $usuario->Perfile->apaterno }} {{ $usuario->Perfile->amaterno }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->Perfile->Role->name }}</td>
                        <td>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalUsuarioVer" class="modal-open"  id="openModalVer-{{$usuario->id}}" data-item-nombre-{{ $usuario->id }}="{{ $usuario->id }}"><i class="bx bxs-show"></i></a>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalUsuarioUpdate" class="modal-open"  id="openModalUpdate-{{$usuario->id}}" data-item-nombreNivelUpdate-{{ $usuario->id }}="{{ $usuario->id }}" data-item-institutoIdUpdate-{{ $usuario->id }}="{{ $usuario->Perfile->id }}"><i class="bx bxs-edit"></i></a>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalAlertDelete" class="modal-open" id="openModalDel-{{$usuario->id}}" data-item-id-{{ $usuario->id }}="{{ $usuario->id }}"><i class="bx bxs-trash text-danger"></i></a>
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
  $(document).on('change', '#idRoleCreate', function(event) {
    var rol = $(this).find("option:selected").text();
    switch (rol) {
      case 'Admin':
        $("#containerCamposDinamicos").hide();
        $("#colCampoTutor").hide();
        Break;
      case 'Tutor':
        $("#containerCamposDinamicos").hide();
        Break;
      case 'Alumno':
        $("#containerCamposDinamicos").show();
        $("#colCampoTutor").show();
        $("#grupoAsignado").html("Grupo");
        Break;
      case 'Docente':
        $("#containerCamposDinamicos").show();
        $("#colCampoTutor").hide();
        $("#grupoAsignado").html("Grupo a cargo");
        Break;
      default:
        $("#containerCamposDinamicos").hide();
        $("#colCampoTutor").hide();
        Break;
    }
  });
  @isset($usuarios)
    @foreach($usuarios as $usuario)

      $(document).on("click", "#openModalDel-{{$usuario->id}}", function () {
        
        var idDelete = $(this).attr('data-item-id-{{$usuario->id}}');
        var rutaDelete = "{{route('usuario-delete',$usuario->id)}}";
        $("#idDelete").attr('href', rutaDelete );
        $("#elementoDelete").html('el usuario <b>{{ $usuario->name }}</b>');

      });
      $(document).on("click", "#openModalUpdate-{{$usuario->id}}", function () {
        /*
        $("#containerTutoreGrupoUpt").hide();
        $("#containerCamposDinamicosUpt").hide();
        */
        $("#idUserUpt").val("{{ $usuario->id }}");
        $("#idRoleUpt").val("{{ $usuario->Perfile->Role->id }}");
        $("#roleUpt").val("{{ $usuario->Perfile->Role->name }}");
        $("#roleUpt").attr('readonly', true);
        $("#nombreCompletoUsuarioUpt").html("{{$usuario->Perfile->nombre}} {{$usuario->Perfile->apaterno}} {{$usuario->Perfile->amaterno}}");
        $("#nombreUsuarioUpt").val("{{$usuario->Perfile->nombre}}");
        $("#usuarioUpt").val("{{ $usuario->name }}");
        $("#usuarioUpt").attr('readonly', true);
        $("#nombreUsuarioUpt").val("{{ $usuario->Perfile->nombre }}");
        $("#apaternoUsuarioUpt").val("{{ $usuario->Perfile->apaterno }}");
        $("#amaternoUsuarioUpt").val("{{ $usuario->Perfile->amaterno }}");
        $("#emailUpt").val("{{ $usuario->email }}");
        $("#celularUpt").val("{{ $usuario->Perfile->celular }}");
        $("#generoUpt").val("{{ $usuario->Perfile->sexo }}");

        var rol = "{{ $usuario->Perfile->Role->name }}";
        @if($usuario->Alumno != NULL)
        if(rol == 'Alumno'){
          $("#idGrupoUpt").val("{{ $usuario->Alumno->Grupo->id }}");
          $("#idTutoreUpt").val("{{ $usuario->Alumno->Tutore->id }}");
        }
        @endif
        @if($usuario->Docente != NULL)
        if(rol == 'Docente'){
          $("#idGrupoUpt").val("{{ $usuario->Docente->Grupo->id }}");
        }
        @endif

      });
      $(document).on("click", "#openModalVer-{{$usuario->id}}", function () {
        $("#nombreUsuario").html("{{$usuario->Perfile->nombre}} {{$usuario->Perfile->apaterno}} {{$usuario->Perfile->amaterno}}");
        $("#registro").html("{{ $usuario->created_at }}");
        $("#usuario").html("{{ $usuario->name }}");
        $("#email").html("{{ $usuario->email }}");
        $("#celular").html("{{ $usuario->Perfile->celular }}");
        $("#genero").html("{{ $usuario->Perfile->sexo }}");
        $("#rol").html("{{ $usuario->Perfile->Role->name }}");
        var rol = "{{ $usuario->Perfile->Role->name }}";
        switch(rol){
          case "Tutor":
            @if(isset($usuario->Tutore->Alumnos))
              @if($usuario->Tutore->Alumnos != "[]")
              var listarAlumnos = "<br><hr>";
                @foreach($usuario->Tutore->Alumnos as $alumn)
                  listarAlumnos += "De alumno(s):<br><b>{{ $alumn->User->Perfile->nombre }} {{ $alumn->User->Perfile->apaterno }} {{ $alumn->User->Perfile->amaterno }}</b><br>";
                @endforeach
              @endif
            @endif
            $("#detalle").html(listarAlumnos);
            Break;
          case "Docente":
            @if(isset($usuario->Docente))

              @if($usuario->Docente->Grupo != "[]" and $usuario->Docente->Grupo != NULL)
                var grupo = "<br><hr>Responsable de grupo: <b>{{ $usuario->Docente->Grupo->grado }}{{ $usuario->Docente->Grupo->grupo }}</b><br>";
              @else
                var grupo = "";
              @endif

              @if($usuario->Docente->Asignaturas != "[]" and $usuario->Docente->Asignaturas != NULL)
                var asignaturas = "<br><hr>Asignaturas:<br><b>{{ $usuario->Docente->Asignaturas->pluck('nombre') }}</b><br>";
              @else
                var asignaturas = "";
              @endif

            @endif
            $("#detalle").html(grupo + asignaturas);
            Break;
          case "Alumno":
            @if(isset($usuario->Alumno))
              @if($usuario->Alumno->Grupo != "[]" and $usuario->Alumno->Grupo != NULL)
                var detalleAlumno = "<br><hr>Inscrito al grupo <b>{{ $usuario->Alumno->Grupo->grado }}{{ $usuario->Alumno->Grupo->grupo }}</b><br>Tutor: {{ $usuario->Alumno->Tutore->User->Perfile->nombre }} {{ $usuario->Alumno->Tutore->User->Perfile->apaterno }} {{ $usuario->Alumno->Tutore->User->Perfile->amaterno }}<br>";
              @else
                var detalleAlumno = "";
              @endif
            @endif
            $("#detalle").html(detalleAlumno);
            Break;
          default:
            $("#detalle").html("<hr>");
            Break;
        }
      });
    @endforeach
  @endisset
  </script>

  @stop

  </main>
  <!-- End #main -->
<!-- =====================ALERTAS================= -->
<div class="modal fade" tabindex="-1" id="modalAlertDelete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-start text-danger">
        <h4 class="modal-title"><i class="bx bxs-error"></h4><h5></i> Alerta!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Realmente desea eliminar <span id="elementoDelete">este elemento</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="" class="btn btn-danger" id="idDelete">Eliminar</a>
      </div>
    </div>
  </div>
</div>

<!-- ==============MODALES INSTITUCIONES========== -->
<!-- Modal para crear Institución -->
<div class="modal fade modal-lg" tabindex="-1" id="modalInstitucioneCreate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nameInstitutoCreate">Crear nueva institución</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="{{ route('instituto-save') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombreCreate" name="nombre" value="{{ old('nombre') }}"" placeholder="Nombre">
            <label for="nombre" class="form-label">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cctCreate" name="cct" value="{{ old('cct') }}" placeholder="CCT">
            <label for="cct" class="form-label">CCT</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="zonaCreate" name="zona" value="{{ old('zona') }}" placeholder="Zona">
            <label for="zona" class="form-label">Zona</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="telefonoCreate" name="telefono" value="{{ old('telefono') }}" placeholder="Teléfono">
            <label for="telefono" class="form-label">Teléfono <small>(10 dígitos)</small></label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="direccionCreate" name="direccion" value="{{ old('direccion') }}" placeholder="Dirección">
            <label for="direccion" class="form-label">Dirección</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="directorCreate" name="director" value="{{ old('director') }}" placeholder="Director">
            <label for="director" class="form-label">Director</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cicloCreate" name="ciclo" value="{{ old('ciclo') }}" placeholder="Ciclo">
            <label for="ciclo" class="form-label">Ciclo <small>(Formato: xxxx-xxxx)</small></label>
        </div>

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal para ver Institución -->
<div class="modal fade modal-lg" tabindex="-1" id="modalInstitucioneVer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nameInstituto">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><span style="font-weight: bold;">CCT</span> <span id="cct"></span></p>
        <p><span style="font-weight: bold;">Zona</span> <span id="zona"></span></p>
        <p><span style="font-weight: bold;">Teléfono</span> <span id="telefono"></span></p>
        <p><span style="font-weight: bold;">Dirección</span> <span id="direccion"></span></p>
        <p><span style="font-weight: bold;">Director</span> <span id="director"></span></p>
        <p><span style="font-weight: bold;">Ciclo</span> <span id="ciclo"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal para actualizar Institución -->
<div class="modal fade modal-lg" tabindex="-1" id="modalInstitucioneUpdate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nameInstitutoUpdate">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{ route('instituto-update') }}" method="POST">
        @csrf
        @method('patch')
        <input type="hidden" name="id" id="id" value="">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombreUpdate" name="nombre" value="" placeholder="Nombre">
            <label for="nombreUpdate" class="form-label">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cctUpdate" name="cct" value="" placeholder="CCT">
            <label for="cctUpdate" class="form-label">CCT</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="zonaUpdate" name="zona" value="" placeholder="Zona">
            <label for="zonaUpdate" class="form-label">Zona</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="telefonoUpdate" name="telefono" value="" placeholder="Teléfono">
            <label for="telefonoUpdate" class="form-label">Teléfono</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="direccionUpdate" name="direccion" value="" placeholder="Dirección">
            <label for="direccionUpdate" class="form-label">Dirección</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="directorUpdate" name="director" value="" placeholder="Director">
            <label for="directorUpdate" class="form-label">Director</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cicloUpdate" name="ciclo" value="" placeholder="Ciclo">
            <label for="cicloUpdate" class="form-label">Ciclo</label>
        </div>

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ===============MODALES NIVELES=============== -->
<!-- Modal para crear Nivel -->
<div class="modal fade modal-lg" tabindex="-1" id="modalNiveleCreate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crear nuevo nivel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{ route('nivel-save') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nivelCreate" name="nombre" value="{{ old('nombre') }}" placeholder="Nivel">
            <label for="nivelCreate" class="form-label">Nivel</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="idInstitutoCreate" name="institucione_id">
              <option selected value="">Selecciona un elemento</option>

              @if(isset($instituciones))
                @if($instituciones != "[]" and $instituciones != NULL)
                  @foreach($instituciones as $institucione)
                    <option value="{{ $institucione->id }}" selectOld('institucione_id', {{ $institucione->id }}, 'select')>{{ $institucione->nombre }}</option>
                  @endforeach
                @else
                    <option value=""><a href="{{ route('instituto') }}">Registra una institución</a></option>
                @endif
              @endif
            </select>
            <label for="idInstitutoCreate" class="form-label">Institución</label>
        </div>
          @if(isset($instituciones))
            @if($instituciones == "[]")
            <strong>Registra una <a href="{{ route('instituto') }}">Institución</a></strong>
            @endif
          @endif

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal para actualizar nivel -->
<div class="modal fade modal-lg" tabindex="-1" id="modalNiveleUpdate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nameNivelUpdate">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{ route('nivel-update') }}" method="POST">
        @csrf
        @method('patch')
        <input type="hidden" name="idUpdate" id="idUpdate" value="">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nivelUpdate" name="nombre" value="{{ old('nombre') }}" placeholder="Nivel">
            <label for="nivelUpdate" class="form-label">Nivel</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="idInstitutoUpdate" name="institucione_id">
              <option selected value="">Selecciona un elemento</option>
              @if(isset($instituciones))
                @if($instituciones != "[]" and $instituciones != NULL)
                  @foreach($instituciones as $institucione)
                    <option value="{{ $institucione->id }}" selectOld('institucione_id', {{ $institucione->id }}, 'select')>{{ $institucione->nombre }}</option>
                  @endforeach
                @else
                    <option value="">Sin registros</option>
                @endif
              @endif
            </select>
            <label for="idInstitutoUpdate" class="form-label">Institución</label>
        </div>

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ===============MODALES GRUPOS=============== -->
<!-- Modal para crear grupo -->
<div class="modal fade modal-lg" tabindex="-1" id="modalGrupoCreate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crear nuevo grupo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{ route('grupo-save') }}" method="POST">
        @csrf

        <div class="container text-center">
          <div class="row">
            <div class="col">
              <div class="form-floating mb-3">
                <select class="form-select" id="gradoCreate" name="grado">
                  <option selected value="">Selecciona un elemento</option>
                  <option value="1o">1o</option>
                  <option value="2o">2o</option>
                  <option value="3o">3o</option>
                  <option value="4o">4o</option>
                  <option value="5o">5o</option>
                  <option value="6o">6o</option>
                </select>
                <label for="gradoCreate" class="form-label">Grado</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <select class="form-select" id="grupoCreate" name="grupo">
                  <option selected value="">Selecciona un elemento</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                  <option value="F">F</options>
                </select>
                <label for="grupoCreate" class="form-label">Grupo</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="idNivelCreate" name="nivele_id">
              <option selected value="">Selecciona un elemento</option>

              @if(isset($niveles))
                @if($niveles != "[]" and $niveles != NULL )
                  @foreach($niveles as $nivele)
                    @if($nivele->Institucione != NULL)
                      <option value="{{ $nivele->id }}" selectOld('nivele_id', {{ $nivele->id }}, 'select')><b>{{ $nivele->nombre }}</b> - {{ $nivele->Institucione->nombre }}</option>
                    @endif
                    @endforeach
                @else
                    <option value="">Sin registros</option>
                @endif
              @endif
            </select>
            <label for="idNivelCreate" class="form-label">Nivel</label>
        </div>
          @if(isset($niveles))
            @if($niveles == "[]")
            <strong>Registra un <a href="{{ route('niveles') }}">Nivel</a></strong>
            @endif
          @endif

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal para actualizar grupo -->
<div class="modal fade modal-lg" tabindex="-1" id="modalGrupoUpdate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="GrupoUpdate">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{ route('grupo-update') }}" method="POST">
        @csrf
        @method('patch')
        <input type="hidden" name="idUpdate" id="idGrupoUpdate" value="">

        <div class="container text-center">
          <div class="row">
            <div class="col">
              <div class="form-floating mb-3">
                <select class="form-select" id="gradoUpdate" name="grado">
                  <option selected value="">Selecciona un elemento</option>
                  <option value="1o">1o</option>
                  <option value="2o">2o</option>
                  <option value="3o">3o</option>
                  <option value="4o">4o</option>
                  <option value="5o">5o</option>
                  <option value="6o">6o</option>
                </select>
                <label for="gradoUpdate" class="form-label">Grado</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <select class="form-select" id="grupoUpdate" name="grupo">
                  <option selected value="">Selecciona un elemento</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                  <option value="F">F</options>
                </select>
                <label for="grupoUpdate" class="form-label">Grupo</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="idNivelUpdate" name="nivele_id">
              <option selected value="">Selecciona un elemento</option>

              @if(isset($niveles))
                @if($niveles != "[]")
                  @foreach($niveles as $nivele)
                    @if($nivele->Institucione != NULL)
                      <option value="{{ $nivele->id }}" selectOld('nivele_id', {{ $nivele->id }}, 'select')><b>{{ $nivele->nombre }}</b> - {{ $nivele->Institucione->nombre }}</option>
                    @endif
                  @endforeach
                @else
                    <option value="">Sin registros</option>
                @endif
              @endif
            </select>
            <label for="idNivelUpdate" class="form-label">Nivel</label>
        </div>

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ===============MODALES ASIGNATURAS=============== -->
<!-- Modal para crear asignatura -->
<div class="modal fade modal-lg" tabindex="-1" id="modalAsignaturaCreate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crear nueva asignatura</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{ route('asignatura-save') }}" method="POST">
        @csrf


        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="asignaturaCreate" name="nombre" value="{{ old('nombre') }}" placeholder="Asignatura">
            <label for="asignaturaCreate" class="form-label">Asignatura</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="idDocenteCreate" name="docente_id">
              <option selected value="">Selecciona un elemento</option>

              @if(isset($docentes))
                @if($docentes != "[]")
                  @foreach($docentes as $docente)
                    <option value="{{ $docente->id }}" selectOld('docente_id', {{ $docente->id }}, 'select')>{{ $docente->User->Perfile->nombre }} {{ $docente->User->Perfile->apaterno }} {{ $docente->User->Perfile->amaterno }}</option>
                  @endforeach
                @else
                    <option value="">Sin registros</option>
                @endif
              @endif
            </select>
            <label for="idDocenteCreate" class="form-label">Docente</label>
          </div>
          @if(isset($docentes))
            @if($docentes == "[]")
            <strong>Registra un <a href="{{ route('cuentas') }}">Docente</a></strong>
            @endif
          @endif
        <div class="form-floating mb-3">
          <hr><h6>Vincula grupos a la asignatura:</h6>
          @if(isset($grupos))
            @if($grupos != "[]")
              @foreach($grupos as $grupo)
                <div class="form-check form-switch form-check-inline">
                  <input class="form-check-input" type="checkbox" role="switch" id="grupo_id-{{ $grupo->id }}" value="{{ $grupo->id }}" name="grupo_id[]">
                  <label class="form-check-label" for="grupo_id-{{ $grupo->id }}">{{ $grupo->grado }} {{ $grupo->grupo }} - {{ $grupo->nivele->nombre }}  - {{ $grupo->nivele->Institucione->nombre }}</label>
                </div>
              @endforeach
            @else
                <strong>Registra un <a href="{{ route('grupos') }}">Grupo</a></strong>
            @endif
          @endif
          <hr>
        </div>

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal para actualizar asignatura -->
<div class="modal fade modal-lg" tabindex="-1" id="modalAsignaturaUpdate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="asignaturaUpdate1">Actualizar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{ route('asignatura-update') }}" method="POST">
        @csrf
        @method('patch')

        <input type="hidden" id="idAsignatura" name="idAsignaturaUpdate">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="asignaturaUpdate2" name="nombre" value="{{ old('nombre') }}" placeholder="Asignatura">
            <label for="asignaturaUpdate2" class="form-label">Asignatura</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="idDocente" name="docente_id">
              <option selected value="">Selecciona un elemento</option>

              @if(isset($docentes))
                @if($docentes != "[]" and $docentes != NULL)
                  @foreach($docentes as $docente)
                    <option value="{{ $docente->id }}" selectOld('docente_id', {{ $docente->id }}, 'select')>{{ $docente->User->Perfile->nombre }} {{ $docente->User->Perfile->apaterno }} {{ $docente->User->Perfile->amaterno }}</option>
                  @endforeach
                @else
                  <strong>Registra un <a href="{{ route('cuentas') }}">Docente</a></strong>
                @endif
              @endif
            </select>
            <label for="idDocente" class="form-label">Docente</label>
        </div>
        <div class="form-floating mb-3">
          <hr><h6 class="text-danger">Esto vinculará nuevos grupos a la asignatura.</h6>
          @if(isset($grupos))
            @if($grupos != "[]")
              @foreach($grupos as $grupo)
                <div class="form-check form-switch form-check-inline">
                  <input class="form-check-input" type="checkbox" role="switch" id="grupo_id-{{ $grupo->id }}" value="{{ $grupo->id }}" name="grupo_id[]">
                  <label class="form-check-label" for="grupo_id-{{ $grupo->id }}">{{ $grupo->grado }} {{ $grupo->grupo }} - {{ $grupo->nivele->nombre }}  - {{ $grupo->nivele->Institucione->nombre }}</label>
                </div>
              @endforeach
            @else
              <strong>Registra un <a href="{{ route('grupos') }}">grupo</a></strong>
            @endif
          @endif
          <hr>
        </div>

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- MODALES USUARIOS -->
<!-- Modal para crear Usuario -->
<!-- Docente:Grupo,User,Perfile | Alumno:Grupo,Tutor,User,Perfile | Tutor:User,Perfile -->
<div class="modal fade modal-lg" tabindex="-1" id="modalUsuarioCreate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crear usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('usuario-save') }}" method="POST">
        @csrf
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="usuarioCreate" name="name" value="{{ old('name') }}"" placeholder="Usuario">
                  <label for="usuarioCreate" class="form-label">Nombre de usuario</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <select class="form-select" id="idRoleCreate" name="role_id">
                  <option selected value="">Selecciona un elemento</option>

                  @if(isset($roles))
                    @if($roles != "[]")
                      @foreach($roles as $rol)
                        <option value="{{ $rol->id }}" selectOld('role_id', {{ $rol->id }}, 'select')>{{ $rol->name }}</option>
                      @endforeach
                    @else
                        <option value="">Sin registros</option>
                    @endif
                  @endif
                </select>
                <label for="idRoleCreate" class="form-label">Rol</label>
              </div>
            </div>
          </div>
        </div>

        <!-- Campos dinámicos según rol -->
        <div class="container text-center" id="containerCamposDinamicos" style="display: none;">
          <div class="row">
            <div class="col" id="colCampoTutor">
              <div class="form-floating mb-3">
                <select class="form-select" id="idTutoreCreate" name="tutore_id">
                  <option selected value="">Selecciona un elemento</option>

                  @if(isset($tutores))
                    @if($tutores != "[]")
                      @foreach($tutores as $tutor)
                        <option value="{{ $tutor->id }}" selectOld('tutor_id', {{ $tutor->id }}, 'select')>{{ $tutor->User->Perfile->nombre }} {{ $tutor->User->Perfile->apaterno }} {{ $tutor->User->Perfile->amaterno }}</option>
                      @endforeach
                    @else
                        <option value="">Sin registros</option>
                    @endif
                  @endif
                </select>
                <label for="idTutoreCreate" class="form-label">Tutor</label>
                @if(isset($tutores))
                  @if($tutores == "[]")
                  <strong>Registra <a href="{{ route('cuentas') }}">Tutor</a></strong>
                  @endif
                @endif
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <select class="form-select" id="idGrupoCreate" name="grupo_id">
                  <option selected value="">Selecciona un elemento</option>

                  @if(isset($grupos))
                    @if($grupos != "[]")
                      @foreach($grupos as $grupo)
                        <option value="{{ $grupo->id }}" selectOld('grupo_id', {{ $grupo->id }}, 'select')>{{ $grupo->grado }} {{ $grupo->grupo }} - {{ $grupo->nivele->nombre }}  - {{ $grupo->nivele->Institucione->nombre }}</option>
                      @endforeach
                    @else
                        <option value="">Sin registros</option>
                    @endif
                  @endif
                </select>
                <label for="idGrupoCreate" class="form-label"><span id="grupoAsignado">Grupo</span></label>
                @if(isset($grupos))
                  @if($grupos == "[]")
                  <strong>Registra <a href="{{ route('grupos') }}">Grupo</a></strong>
                  @endif
                @endif
              </div>
            </div>
          </div>
        </div>
        <!-- Fin campos dinamicos segun rol -->

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombreUsuarioCreate" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre(s)">
            <label for="nombreUsuarioCreate" class="form-label">Nombre(s)</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="apaternoUsuarioCreate" name="apaterno" value="{{ old('apaterno') }}" placeholder="Apellido paterno">
            <label for="apaternoUsuarioCreate" class="form-label">Apellido paterno</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="amaternoUsuarioCreate" name="amaterno" value="{{ old('amaterno') }}" placeholder="Apellido materno">
            <label for="amaternoUsuarioCreate" class="form-label">Apellido paterno</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="emailCreate" name="email" value="{{ old('email') }}" placeholder="Email">
            <label for="email" class="form-label">Email</label>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="celularCreate" name="celular" value="{{ old('celular') }}"" placeholder="Celular">
                  <label for="celularCreate" class="form-label">Celular</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <select class="form-select" id="generoCreate" name="sexo">
                  <option selected value="">Selecciona un elemento</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                </select>
                <label for="generoCreate" class="form-label">Género</label>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal para ver Usuario -->
<div class="modal fade modal-lg" tabindex="-1" id="modalUsuarioVer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nombreUsuario">Nombre completo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><span style="font-weight: bold;">Registro</span> <span id="registro"></span></p>
        <p><span style="font-weight: bold;">Usuario</span> <span id="usuario"></span></p>
        <p><span style="font-weight: bold;">Email</span> <span id="email"></span></p>
        <p><span style="font-weight: bold;">Celular</span> <span id="celular"></span></p>
        <p><span style="font-weight: bold;">Género</span> <span id="genero"></span></p>
        <p><span style="font-weight: bold;">Rol</span> <span id="rol"></span><span id="detalle"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para actualizar usuario -->
<div class="modal fade modal-lg" tabindex="-1" id="modalUsuarioUpdate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nombreCompletoUsuarioUpt">Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('usuario-update') }}" method="POST">
        @csrf
        @method('patch')
        <input type="hidden" id="idUserUpt" name="idUserUpt" value="">
        <div class="container text-center" id="containerTutoreGrupoUpt">
          <div class="row">
            <div class="col">
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="usuarioUpt" name="name" value="{{ old('name') }}" placeholder="Usuario">
                  <label for="usuarioUpt" class="form-label">Nombre de usuario</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <input type="hidden" id="idRoleUpt" name="role_id" value="{{ old('role_id') }}">
              <input type="text" class="form-control" id="roleUpt" placeholder="Rol">
                <label for="roleUpt" class="form-label">Rol</label>
              </div>
            </div>
          </div>
        </div>

        <!-- Campos dinámicos según rol -->
        <div class="container text-center" id="containerCamposDinamicosUpt" style="display: none;">
          <div class="row">
            <div class="col" id="colCampoTutorUpt">
              <div class="form-floating mb-3">
                <select class="form-select" id="idTutoreUpt" name="tutore_id">
                  <option selected value="">Selecciona un elemento</option>

                  @if(isset($tutores))
                    @if($tutores != "[]")
                      @foreach($tutores as $tutor)
                        <option value="{{ $tutor->id }}" selectOld('tutor_id', {{ $tutor->id }}, 'select')>{{ $tutor->User->Perfile->nombre }} {{ $tutor->User->Perfile->apaterno }} {{ $tutor->User->Perfile->amaterno }}</option>
                      @endforeach
                    @else
                        <option value="">Sin registros</option>
                    @endif
                  @endif
                </select>
                <label for="idTutoreUpt" class="form-label">Tutor</label>
                @if(isset($tutores))
                  @if($tutores == "[]")
                  <strong>Registra <a href="{{ route('cuentas') }}">Tutor</a></strong>
                  @endif
                @endif
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <select class="form-select" id="idGrupoUpt" name="grupo_id">
                  <option selected value="">Selecciona un elemento</option>

                  @if(isset($grupos))
                    @if($grupos != "[]")
                      @foreach($grupos as $grupo)
                        <option value="{{ $grupo->id }}" selectOld('grupo_id', {{ $grupo->id }}, 'select')>{{ $grupo->grado }} {{ $grupo->grupo }} - {{ $grupo->nivele->nombre }}  - {{ $grupo->nivele->Institucione->nombre }}</option>
                      @endforeach
                    @else
                        <option value="">Sin registros</option>
                    @endif
                  @endif
                </select>
                <label for="idGrupoUpt" class="form-label"><span id="grupoAsignadoUpt">Grupo</span></label>
                @if(isset($grupos))
                  @if($grupos == "[]")
                  <strong>Registra <a href="{{ route('grupos') }}">Grupo</a></strong>
                  @endif
                @endif
              </div>
            </div>
          </div>
        </div>
        <!-- Fin campos dinamicos segun rol -->

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombreUsuarioUpt" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre(s)">
            <label for="nombreUsuarioUpt" class="form-label">Nombre(s)</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="apaternoUsuarioUpt" name="apaterno" value="{{ old('apaterno') }}" placeholder="Apellido paterno">
            <label for="apaternoUsuarioUpt" class="form-label">Apellido paterno</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="amaternoUsuarioUpt" name="amaterno" value="{{ old('amaterno') }}" placeholder="Apellido materno">
            <label for="amaternoUsuarioUpt" class="form-label">Apellido paterno</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="emailUpt" name="email" value="{{ old('email') }}" placeholder="Email">
            <label for="emailUpt" class="form-label">Email</label>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="celularUpt" name="celular" value="{{ old('celular') }}"" placeholder="Celular">
                  <label for="celularUpt" class="form-label">Celular</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <select class="form-select" id="generoUpt" name="sexo">
                  <option selected value="">Selecciona un elemento</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                </select>
                <label for="generoUpt" class="form-label">Género</label>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ===============MODALES NOTIFICACIONES=============== -->
<!-- Modal para crear notificación -->
<div class="modal fade modal-lg" tabindex="-1" id="modalNotificacionCreate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crear nueva notificación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{ route('notificacion-save') }}" method="POST">
        @csrf

        <div class="form-floating mb-3">
            <select class="form-select" id="idRole" name="role_id">
              <option selected value="">Selecciona un elemento</option>

              @if(isset($roles))
                @if($roles != "[]" and $roles != NULL )
                  @foreach($roles as $role)
                    @if($role->name != NULL and $role->name != 'Admin')
                      <option value="{{ $role->id }}" {{ selectOld('role_id', $role->id, 'select') }}><b>{{ $role->name }}</b></option>
                    @endif
                    @endforeach
                @else
                    <option value="">Sin registros</option>
                @endif
              @endif
            </select>
            <label for="idRole" class="form-label">Para:</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="tituloCreate" name="titulo" value="{{ old('titulo') }}" placeholder="Título">
            <label for="tituloCreate" class="form-label">Título</label>
        </div>

        <div class="form-floating mb-3">
          <textarea class="form-control" id="describeNotificacion" rows="3" name="descripcion">{{ old('descripcion') }}</textarea>
          <label for="describeNotificacion" class="form-label">Notificación</label>
        </div>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal para actualizar notificación -->
<div class="modal fade modal-lg" tabindex="-1" id="modalNotificacionUpdate">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="GrupoUpdate">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="{{ route('notificacion-update') }}" method="POST">
          @csrf
          @method('patch')

          <input type="hidden" id="idNotificacionUpdate" name="idNotificacionUpdate" value="">
          <div class="form-floating mb-3">
              <select class="form-select" id="idRoleUpdate" name="role_id">
                <option selected value="">Selecciona un elemento</option>

                @if(isset($roles))
                  @if($roles != "[]" and $roles != NULL )
                    @foreach($roles as $role)
                      @if($role->name != NULL and $role->name != 'Admin')
                        <option value="{{ $role->id }}" {{ selectOld('role_id', $role->id, 'select') }}><b>{{ $role->name }}</b></option>
                      @endif
                      @endforeach
                  @else
                      <option value="">Sin registros</option>
                  @endif
                @endif
              </select>
              <label for="idRoleUpdate" class="form-label">Para:</label>
          </div>

          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="tituloUpdate" name="titulo" value="{{ old('titulo') }}" placeholder="Título">
              <label for="tituloUpdate" class="form-label">Título</label>
          </div>

          <div class="form-floating mb-3">
            <textarea class="form-control" id="descripcionUpdate" rows="3" name="descripcion">{{ old('descripcion') }}</textarea>
            <label for="descripcionUpdate" class="form-label">Notificación</label>
          </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

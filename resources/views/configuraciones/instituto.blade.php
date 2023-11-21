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
                  

                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Director</th>
                        <th scope="col">ciclo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
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

  <!-- Vertically centered modal -->
<div class="modal-dialog modal-dialog-centered">
  Esta es una prueba
</div>
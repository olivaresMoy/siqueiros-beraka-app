<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('titulo')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @section('assets-links')
    <!-- Favicons -->
    <link href="{{ asset('/assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('/assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Datatables -->
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/b-2.4.2/b-print-2.4.2/r-2.5.0/sc-2.3.0/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/b-2.4.2/b-print-2.4.2/r-2.5.0/sc-2.3.0/datatables.min.js"></script>

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/assets') }}/css/style.css" rel="stylesheet">
  @show

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@section('navbar')

    @include('templates.navbar')

@show

@section('container')
@show


@section('footer')

    @include('templates.footer')

@show

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@section('js-links')
  <!-- Vendor JS Files -->
  <script src="{{ asset('/assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('/assets') }}/vendor/aos/aos.js"></script>
  <script src="{{ asset('/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('/assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('/assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('/assets') }}/vendor/typed.js/typed.min.js"></script>
  <script src="{{ asset('/assets') }}/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('/assets') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/assets') }}/js/main.js"></script>
@show

</body>
<script>
$(document).ready( function () {
    $('#myTable').DataTable({
      
      "language": {
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        "infoEmpty": "Mostrando _PAGE_ a _PAGE_ de _PAGES_",
        "infoFiltered": "(Filtrado de _MAX_ en total)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Resultados",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        }
      },
      "responsive": true, "lengthChange": true, "autoWidth": false,
    });
  });
</script>
@include('modales')
</html>
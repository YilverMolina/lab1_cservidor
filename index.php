<?php
  //@session_start();
  //$_SESSION['baseurl'] = "http://" . $_SERVER['SERVER_NAME'];// . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>MedicApp | Inicio</title>
    <link rel="shortcut icon" href="resources/img/logo.png" type="image/x-icon" />

  <link href="resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="resources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="resources/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="resources/css/sb-admin.css" rel="stylesheet">

  <!-- CSS DEL LOGO DE LA PÁGINA DE BIENVENIDA -->
  <style>
    .imagen{
      width: 100%;
    }
    .logo{
      width: 20%;
      margin: 5px auto;
    }
    .fondo{
      background-color: #FAFAFA;
    }
  </style>
</head>

<body class="fixed-nav sticky-footer fondo" id="page-top">
  <!-- VENTANA DE INICIO/BIENVENIDA -->
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Bienvenido a MedicApp</div>
      <div class="card-body">
        <center>
          <img src="resources/img/logo.png" class="logo" />
          <h1>MedicApp</h1>
          <h4>Aplicación para la gestión de médicos, pacientes y citas médicas.</h4>
          <hr/>

          <!-- BOTON -->
          <a href="views/general/" class="btn btn-primary">Ingresar al Sistema</a>
        </center>
      </div>
    </div>
  </div>

  <script src="resources/vendor/jquery/jquery.min.js"></script>
  <script src="resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="resources/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="resources/vendor/chart.js/Chart.min.js"></script>
  <script src="resources/vendor/datatables/jquery.dataTables.js"></script>
  <script src="resources/vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="resources/js/sb-admin.min.js"></script>
  <script src="resources/js/sb-admin-datatables.min.js"></script>
  <script src="resources/js/sb-admin-charts.min.js"></script>

</body>
</html>

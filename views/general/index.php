<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include_once "header.php";
    include_once("../../controllers/CitaController.php");

    //Obtenemos el número total de Pacientes, Citas y Médicos en la BD y lo almacenamos en $datos
    $citaController = new CitaController();
    $datos = $citaController->getEstadistica();
  ?>

  <title>Inicio</title>

  <!-- CSS DEL LOGO DE LA PAGINA DE INICIO -->
  <style>
    .imagen{
      width: 100%;
    }
    .logo{
      width: 20%;
      margin: 5px auto;
    }
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation (Menú Lateral)-->
  <?php
    include_once "navigation.php";
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">MedicApp</a>
        </li>
        <li class="breadcrumb-item active">Inicio</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-bar-chart"></i> Bienvenido a MedicApp</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  <center>
                    <img src="../../resources/img/logo.png" class="logo" />
                    <h1>MedicApp</h1>
                    <h4>Aplicación para la gestión de médicos, pacientes y citas médicas.</h4>
                  </center>
                </div>
                
                <!-- Usamos $datos para mostrar las estadísticas en la ventana principal-->
                <div class="col-sm-4 text-center my-auto">
                  <div class="h4 mb-0 text-primary"><?php echo $datos->Pacientes;?> Pacientes</div>
                  <a href="../paciente/ViewListarPaciente.php?accion=listar"><div class="small text-muted">Ver aquí</div></a>
                  <hr>
                  <div class="h4 mb-0 text-warning"><?php echo $datos->Medicos;?> Médicos</div>
                  <a href="../medico/consultar.php"><div class="small text-muted">Ver aquí</div></a>
                  <hr>
                  <div class="h4 mb-0 text-success"><?php echo $datos->Citas;?> Citas médicas</div>
                  <a href="../cita/consultar.php"><div class="small text-muted">Ver aquí</div></a>      
                  <hr>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Actualizado hace 5 segundos</div>
          </div>
        </div>
      </div>
    </div>
    <?php
      include_once "footer.php";
    ?>
  </div>
</body>
</html>

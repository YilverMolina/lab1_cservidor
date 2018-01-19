<?php 
  include_once("../../controllers/PacienteController.php");
  //AL DARLE AL BOTON DE VER, EN EL CONTROLADOR HACE UNA CONSULTA PARA CARGAR LA INFORMACION DE PACIENTE+PERSONA EN $paciente   
  if(!isset($paciente)){
    header("location: ViewListarPaciente.php?accion=listar");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistema de Citas Médicas</title>
  <?php
    include_once "../general/header.php";
  ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
    include_once "../general/navigation.php";
  ?>

  <div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="ViewListarPaciente.php?accion=listar">Pacientes</a>
        </li>
        <li class="breadcrumb-item active">Detalle de paciente <?php echo $paciente->nombres." ".$paciente->apellidos; ?></li>
      </ol>

    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registro de Pacientes</div>
      <div class="card-body">
        <!-- FORMULARIO DE VISUALIZACION DE PACIENTES -->
        <form action="../../controllers/PacienteController.php?accion=registrar" method="post">
        <div class="form-group">
        <div class="form-row">
        <!--IDENTIFICACION-->
        <div class="col-md-3">
            <label for="identificacion">Identificación</label>
            <input class="form-control" id="identificacion" name="identificacion" value="<?php echo $paciente->identificacion;?>" type="text" aria-describedby="emailHelp" placeholder="Identificación" required readonly>
          </div>
           <!--NUMERO SEGURO-->
          <div class="col-md-3">
            <label for="seguro">Número Seguro</label>
            <input class="form-control" id="seguro" name="seguro" type="text" value="<?php echo $paciente->num_seguro;?>" aria-describedby="emailHelp" placeholder="número seguro social" required  readonly>
          </div>
          <!--NOMBRES-->
          <div class="col-md-3">
                <label for="exampleInputName">Nombres</label>
                <input class="form-control" id="exampleInputName" name="nombres" value="<?php echo $paciente->nombres;?>" type="text" aria-describedby="nameHelp" placeholder="Nombres" required  readonly  readonly>
           </div>
           <!--APELLIDOS-->
              <div class="col-md-3">
                <label for="exampleInputLastName">Apellidos</label>
                <input class="form-control" id="exampleInputLastName" name="apellidos" value="<?php echo $paciente->apellidos;?>" type="text" aria-describedby="nameHelp" placeholder="Apellidos" required  readonly>
              </div>

            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
            <!--CORREO-->
              <div class="col-md-6">
                <label for="exampleInputEmail1">Correo</label>
                <input class="form-control" id="exampleInputEmail1" type="email" value="<?php echo $paciente->correo;?>" name="correo" aria-describedby="emailHelp" placeholder="Correo" required  readonly>
              </div>
              <!--TELEFONO-->
              <div class="col-md-6">
                <label for="telefono">Teléfono</label>
                <input class="form-control" id="telefono" type="tel" name="telefono" value="<?php echo $paciente->telefono;?>" aria-describedby="emailHelp" placeholder="Teléfono" required  readonly>
              </div>
           </div>
          </div>
         
          <div class="form-group">
            <div class="form-row">
              <!--PROVINCIA-->
              <div class="col-md-3">
                <label for="exampleInputName">Provincia</label>
                <input class="form-control" id="provincia" type="text" name="departamento" value="<?php echo $paciente->departamento;?>" aria-describedby="nameHelp" placeholder="Provincia" required  readonly>
              </div>
              <!--CIUDAD-->
              <div class="col-md-3">
                <label for="exampleInputLastName">Ciudad</label>
                <input class="form-control" id="ciudad" type="text" name="ciudad" aria-describedby="nameHelp" value="<?php echo $paciente->ciudad;?>" placeholder="Ciudad" required  readonly>
              </div>
              <!--DIRECCION-->
              <div class="col-md-6">
                <label for="direccion">Dirección</label>
                <input class="form-control" id="direccion" type="address" name="direccion" aria-describedby="emailHelp" value="<?php echo $paciente->direccion;?>"  placeholder="Dirección" required  readonly>
              </div>
            </div>
          </div>
         
          <div class="form-group">
          <div class="form-row">
              <!--FECHA NACIMIENTO-->
              <div class="col-md-6">
                <label for="direccion">Fecha nacimiento</label>
                <input class="form-control" id="f_nacimiento" type="date" value="<?php echo $paciente->f_nacimiento;?>" name="f_nacimiento" aria-describedby="emailHelp" placeholder="Fecha nacimiento" required  readonly>
              </div>
              <!--GENERO-->
              <div class="col-md-6">
                <label for="direccion">Sexo</label>
                <input class="form-control"  type ="text" value="<?php if($paciente->sexo =='M'){echo "Masculino";}else{ echo "Femenino";} ?>" readonly> 
              </div>
            </div>
            </div>
        </form>
      </div>
    </div>
<?php

include_once "../general/footer.php";
?>
</div>
</body>

</html>


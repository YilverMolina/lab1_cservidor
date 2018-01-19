<?php 
  include_once("../../controllers/medicoController.php");
  //AL DARLE AL BOTON DE EDITAR, EN EL CONTROLADOR HACE UNA CONSULTA PARA CARGAR LA INFORMACION DE MEDICO+PERSONA EN $medico
  if(!isset($medico)){
    header("location: consultar.php");
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
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="consultar.php">Medicos</a>
        </li>
        <li class="breadcrumb-item active">Detalle de Médico <?php echo $medico->nombres." ".$medico->apellidos; ?></li>
      </ol>

    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Detalle</div>
      <div class="card-body">
        <!-- FORMULARIO DE EDICION DE MEDICOS -->
        <form action="../../controllers/medicoController.php?accionm=modificar&id=<?php echo $medico->id;?>" method="post">

        <div class="form-group">
        <div class="form-row">
          <!--IDENTIFICACION-->
          <div class="col-md-3">
            <label for="identificacion">Identificación</label>
            <input class="form-control" id="identificacion" name="identificacion" value="<?php echo $medico->identificacion;?>" type="text" aria-describedby="emailHelp" placeholder="Identificación" pattern="[0-9]{7,11}" required>
          </div>
          <!--ESPECIALIDAD-->
          <div class="col-md-3">
            <label for="seguro">Especialidad</label>
            <input class="form-control" id="especialidad" name="especialidad" type="text" value="<?php echo $medico->especialidad;?>" aria-describedby="emailHelp" placeholder="especialidad" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" required>
          </div>
          <!--NOMBRES-->
          <div class="col-md-3">
                <label for="exampleInputName">Nombres</label>
                <input class="form-control" id="exampleInputName" name="nombres" value="<?php echo $medico->nombres;?>" type="text" aria-describedby="nameHelp" placeholder="Nombres" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" required>
           </div>
           <!--APELLIDOS-->
           <div class="col-md-3">
                <label for="exampleInputLastName">Apellidos</label>
                <input class="form-control" id="exampleInputLastName" name="apellidos" value="<?php echo $medico->apellidos;?>" type="text" aria-describedby="nameHelp" placeholder="Apellidos" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" required>
           </div>
            </div>
          </div>
          <!--CORREO-->
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputEmail1">Correo</label>
                <input class="form-control" id="exampleInputEmail1" type="email" value="<?php echo $medico->correo;?>" name="correo" aria-describedby="emailHelp" placeholder="Correo" pattern="^[a-zA-Z0-9.!#$%’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
              </div>
              <!--TELEFONO-->
              <div class="col-md-6">
                <label for="telefono">Teléfono</label>
                <input class="form-control" id="telefono" type="tel" name="telefono" value="<?php echo $medico->telefono;?>" aria-describedby="emailHelp" placeholder="Teléfono" pattern="[0-9]{8,20}" required>
              </div>
           </div>
          </div>
         <!--PROVINCIA-->
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-3">
                <label for="exampleInputName">Provincia</label>
                <input class="form-control" id="provincia" type="text" name="departamento" value="<?php echo $medico->departamento;?>" aria-describedby="nameHelp" placeholder="Provincia" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,20}" required>
              </div>
              <!--CIUDAD-->
              <div class="col-md-3">
                <label for="exampleInputLastName">Ciudad</label>
                <input class="form-control" id="ciudad" type="text" name="ciudad" aria-describedby="nameHelp" value="<?php echo $medico->ciudad;?>" placeholder="Ciudad" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,20}" required>
              </div>
              <!--DIRECCION-->
              <div class="col-md-6">
                <label for="direccion">Dirección</label>
                <input class="form-control" id="direccion" type="address" name="direccion" aria-describedby="emailHelp" value="<?php echo $medico->direccion;?>"  placeholder="Dirección" pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,70}" required  >
              </div>
            </div>
          </div>
          <!--FECHA NACIMIENTO-->
          <div class="form-group">
          <div class="form-row">
              <div class="col-md-4">
                <label for="direccion">Fecha nacimiento</label>
                <input class="form-control" id="f_nacimiento" type="date" value="<?php echo $medico->f_nacimiento;?>" name="f_nacimiento" aria-describedby="emailHelp" placeholder="Fecha nacimiento" required  >
              </div>
              <!--GENERO-->
              <div class="col-md-4">
                <label for="direccion">Sexo</label>
                <select class="form-control" name="sexo">
                <option value="M" <?php if($medico->sexo=="M"){ echo "selected";}?>>Masculino</option>
                <option value="F" <?php if($medico->sexo=="F"){ echo "selected";}?>>Fenenino</option>
              </select>
              <!--ESTADO-->
              </div>
              <div class="col-md-4">
              <label for="direccion">Estado</label>
              <select class="form-control" name="estado">
              <option value="1" <?php if($medico->estado=="1"){ echo "selected";}?>>Activo</option>
              <option value="0" <?php if($medico->estado=="0"){ echo "selected";}?>>Inactivo</option>
            </select>
            
            </div>
            </div>
            </div>
            <!--BOTON-->
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar Datos" >
        </form>
        
      </div>
    </div>
  

<?php

include_once "../general/footer.php";
?>
  
 
</div>
</body>

</html>


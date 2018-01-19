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
        <li class="breadcrumb-item active">Registrar</li>
      </ol>

    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registro de Pacientes</div>
      <div class="card-body">
      <!-- FORMULARIO DE REGISTRO DE PACIENTES -->
      <form action="../../controllers/PacienteController.php?accion=registrar" method="post">
        <!--IDENTIFICACION-->
        <div class="form-group">
            <label for="identificacion">Identificación</label>
            <input class="form-control" id="identificacion" name="identificacion" type="text" aria-describedby="emailHelp" placeholder="Identificación" pattern="[0-9]{7,11}" required>
          </div>
          <!--NUMERO SEGURO-->
          <div class="form-group">
            <label for="seguro">Número Seguro</label>
            <input class="form-control" id="seguro" name="seguro" type="text" aria-describedby="emailHelp" placeholder="número seguro social" pattern="[0-9]{8,30}" required>
          </div> <div class="form-group">
          <!--NOMBRES-->
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nombres</label>
                <input class="form-control" id="exampleInputName" name="nombres" type="text" aria-describedby="nameHelp" placeholder="Nombres"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" required>
              </div>
              <!--APELLIDOS-->
              <div class="col-md-6">
                <label for="exampleInputLastName">Apellidos</label>
                <input class="form-control" id="exampleInputLastName" name="apellidos" type="text" aria-describedby="nameHelp" placeholder="Apellidos" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" required>
              </div>
            </div>
          </div>
          <!--CORREO-->
          <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="correo" aria-describedby="emailHelp" placeholder="Correo" pattern="^[a-zA-Z0-9.!#$%’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
          </div>
          <!--TELEFONO-->
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input class="form-control" id="telefono" type="tel" name="telefono" aria-describedby="emailHelp" placeholder="Teléfono" pattern="[0-9]{8,20}" required>
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <!--PROVINCIA-->
              <div class="col-md-6">
                <label for="exampleInputName">Provincia</label>
                <input class="form-control" id="provincia" type="text" name="departamento" aria-describedby="nameHelp" placeholder="Provincia" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,20}" required>
              </div>
              <!--CIUDAD-->
              <div class="col-md-6">
                <label for="exampleInputLastName">Ciudad</label>
                <input class="form-control" id="ciudad" type="text" name="ciudad" aria-describedby="nameHelp" placeholder="Ciudad" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,20}" required>
              </div>
            </div>
          </div>
          <!--DIRECCION-->
          <div class="form-group">
            <label for="direccion">Dirección</label>
            <input class="form-control" id="direccion" type="address" name="direccion" aria-describedby="emailHelp" placeholder="Dirección" pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,70}" required>
          </div>
          <!--FECHA NACIMIENTO-->
          <div class="form-group">
            <label for="direccion">Fecha nacimiento</label>
            <input class="form-control" id="f_nacimiento" type="date" name="f_nacimiento" aria-describedby="emailHelp" placeholder="Fecha nacimiento" required>
          </div>
          <!--GENERO-->
          <div class="form-group">
            <label for="direccion">Sexo</label>
            <select class="form-control" name="sexo">
              <option value="M">Masculino</option>
              <option value="F">Fenenino</option>
            </select>
          </div>
          <!--BOTON-->
          <input type="submit" class="btn btn-primary btn-block" value="Registrar" >
        </form>
      </div>
    </div>

  <?php
    include_once "../general/footer.php";
  ?>
</div>
</body>
</html>


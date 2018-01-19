<!DOCTYPE html>
<html lang="en">

<head>      
    <title>Registrar médicos</title>
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
                <a href="consultar.php">Médicos</a>
            </li>
            <li class="breadcrumb-item active">Registrar</li>
        </ol>

      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registro de Médicos</div>
        <div class="card-body">
        <!-- FORMULARIO DE REGISTRO DE MEDICOS -->
        <form action="../../controllers/medicoController.php?accionm=registrar" method="post">
        <!--IDENTIFICACION-->
        <div class="form-group">
            <div class="form-row">
            <div class="col-md-2">
                <label>ID</label>
                <input type="text" name="identificacion" class="form-control" pattern="[0-9]{7,11}" required/>
            </div>
            <!--NOMBRES-->
            <div class="col-md-5">
                <label>Nombres</label>
                <input type="text" name="nombres" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" required/>
            </div>
            <!--APELLIDOS-->
            <div class="col-md-5">
                <label>Apellidos</label>
                <input type="text" name="apellidos" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" required/>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="form-row">
                <!--CORREO-->
                <div class="col-md-6">
                    <label>Correo</label>
                    <input type="text" name="correo" class="form-control" pattern="^[a-zA-Z0-9.!#$%’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/>
                </div>
                <!--DIRECCION-->
                <div class="col-md-6">
                    <label>Dirección</label>
                    <input type="text" name="direccion" class="form-control" pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,70}" required/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <!--TELEFONO-->
                <div class="col-md-2">
                    <label>Teléfono</label>
                    <input type="text" name="telefono" class="form-control" pattern="[0-9]{8,20}" required/>
                </div>
                <!--PROVINCIA-->
                <div class="col-md-5">
                    <label>Provincia</label>
                    <input type="text" name="departamento" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,20}" required/>
                </div>
                <!--CIUDAD-->
                <div class="col-md-5">
                    <label>Ciudad</label>
                    <input type="text" name="ciudad" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,20}" required/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <!--FECHA NACIMIENTO-->
                <div class="col-md-4">
                    <label>Fecha de nacimiento</label>
                    <input type="date" name="fnacimiento" class="form-control" required/>
                </div>
                <!--GENERO-->
                <div class="col-md-3">
                    <label>Género</label>
                    <select name="genero" class="form-control" required>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                    </select>
                </div>
                <!--ESPECIALIDAD-->
                <div class="col-md-5">
                    <label>Especialidad</label>
                    <input type="text" name="especialidad" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" required/>
                </div>
            </div>
        </div>
        <!--BOTON-->
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-2">
                    <input type="submit" class="btn btn-primary btn-block" value="Registrar" >
                </div>
            </div>
        </div>
        </form>
        </div>
        </div>

<hr/>

<?php

include_once "../general/footer.php";
?>
  </div>
</body>

</html>

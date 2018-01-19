<?php   
    include_once("../../controllers/citaController.php");

    //OBTENEMOS LOS PACIENTES ACTIVOS EN LA BD EN $pacientes Y LOS MEDICOS ACTIVOS EN $medicos
    $controlCita = new CitaController();
    $controlPaciente= new PacienteController(new Paciente());
    $medicoController= new medicoController();
    $res  = $medicoController->consultarTodosMedicos();

    $medicos = array();
    while($m = $res->fetch_object()){
        if($m->estado == 1){
            array_push($medicos,$m);
        }
    }
    $pacientes = $controlPaciente->listarPacientesActivos(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrar citas</title>
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
                    <a href="consultar.php">Citas</a>
                </li>
                <li class="breadcrumb-item active">Registrar</li>
            </ol>
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Registro de Citas</div>
            <div class="card-body">
            
            <!-- FORMULARIO DE REGISTRO DE CITAS -->
            <form action="../../controllers/CitaController.php?accionc=registrar" method="post">
                <!--SERVICIO-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Servicio</label>
                            <input type="text" name="servicio" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,30}" required/>
                        </div>
                    </div>
                </div>
                <!--MOTIVO-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Motivo</label>
                            <input type="text" name="motivo" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,70}" required/>
                        </div>
                    </div>
                </div>
                <!--FECHA Y HORA-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Fecha</label>
                            <input type="date" name="fecha" class="form-control" required/>
                        </div>
                        <div class="col-md-6">
                            <label>Hora</label>
                            <input type="time" name="hora" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <!--MEDICO-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Médico</label>
                            <select name="medico" id="medico" class="form-control">
                            <?php 
                               foreach($medicos as $medico){
                                   echo "<option value='".$medico->id_medico."'>".$medico->nombres." ".$medico->apellidos."</option>";
                               }
                            
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!--PACIENTE-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Paciente</label>
                            <select name="paciente" id="paciente" class="form-control">
                            <?php 
                               foreach($pacientes as $paciente){
                                   echo "<option value='".$paciente->id_paciente."'>".$paciente->nombres." ".$paciente->apellidos."</option>";
                               }
                            ?>
                            </select>
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

<?php  
    include_once("../../controllers/citaController.php");
    if(!isset($cita)){
        header("location : consultar.php");
    }

    //OBTENEMOS EL MEDICO Y EL PACIENTE DE LA CITA SEGUN SU ID
    $controlPaciente= new PacienteController(new Paciente());
    $medicoController= new medicoController();
    $medico  = $medicoController->consultarUnMedico($cita->id_medico);
    $paciente = $controlPaciente->buscarPaciente($cita->id_paciente);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edición de citas</title>
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
                <li class="breadcrumb-item active">Visualización de Cita</li>
            </ol>

        <!--VENTANA VER CITA-->
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Datos de Cita</div>
            <div class="card-body">
                <!--SERVICIO-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Servicio</label>
                            <input type="text" name="servicio" class="form-control" value="<?php echo $cita->tipo_servicio;?>" required readonly />
                        </div>
                    </div>
                </div>
                <!--MOTIVO-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Motivo</label>
                            <input type="text" name="motivo" class="form-control" value="<?php echo $cita->motivo;?>" required readonly  />
                        </div>
                    </div>
                </div>
                <!--FECHA Y HORA-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Fecha</label>
                            <input type="date" name="fecha" class="form-control" value="<?php echo $cita->fecha_cita;?>" required readonly  />
                        </div>
                        <div class="col-md-6">
                            <label>Hora</label>
                            <input type="time" name="hora" class="form-control" value="<?php echo $cita->hora_cita;?>" required readonly />
                        </div>
                    </div>
                </div>
                <!--MEDICO-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Médico</label>
                            <input type="text" name="medico" class="form-control" value="<?php echo $medico->nombres." ".  $medico->apellidos;?>" required readonly />
                        </div>
                    </div>
                </div>
                <!--PACIENTE-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Paciente</label>
                            <input type="text" name="paciente" class="form-control" value="<?php echo $paciente->nombres." ".  $paciente->apellidos;?>" required readonly />
                        </div>
                    </div>
                </div>
                <!--ESTADO-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Estado</label>
                            <input type="text" name="estado" class="form-control" value="<?php echo $cita->estado;?>" required readonly />
                        </div>
                    </div>
                </div>
        </div>
    </div>
<hr/>

<?php
    include_once "../general/footer.php";
?>
</div>
</body>
</html>

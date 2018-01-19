<?php 
include_once dirname(__FILE__) . "/../models/CitaModel.php";
include_once dirname(__FILE__) . "/medicoController.php";
include_once dirname(__FILE__) . "/PacienteController.php";

//EJECUTAMOS EL CODIGO SEGUN EL VALOR DE LA VARIABLE $_GET
if (isset($_GET['accionc'])) {

    //CONSULTAR CITA
    if ($_GET['accionc'] == "consultar") { 
        $CitaController = new CitaController();
        $cita = $CitaController->consultarCitaId($_GET['id']); 
    }

    //REGISTRAR CITA
    if ($_GET['accionc'] == "registrar"){
        //OBTENEMOS LOS DATOS DEL FORMULARIO A TRAVES DE LA VARIABLE $_POST
        $cita = new CitaModel();
        $cita ->fecha_cita = $_POST['fecha'];
        $cita ->hora_cita = $_POST['hora'];
        $cita ->tipo_servicio = $_POST['servicio'];
        $cita ->motivo = $_POST['motivo'];
        $cita ->id_medico =$_POST['medico'];
        $cita ->id_paciente =$_POST['paciente'];

        $citaController = new CitaController();
        if($citaController ->registrarCita($cita)){
            header("location: ../views/cita/consultar.php");
        }
        else{
           echo "Error al registrar una cita";
        }
    }

    //EDITAR CITA
    if ($_GET['accionc'] == "editar"){
        //OBTENEMOS LOS DATOS DEL FORMULARIO A TRAVES DE LA VARIABLE $_POST
        $cita = new CitaModel();
        $cita ->fecha_cita = $_POST['fecha'];
        $cita ->hora_cita = $_POST['hora'];
        $cita ->tipo_servicio = $_POST['servicio'];
        $cita ->motivo = $_POST['motivo'];
        $cita ->id_medico =$_POST['medico'];
        $cita ->id_paciente =$_POST['paciente'];
        $cita ->id =$_GET['id'];
        $cita ->estado =$_POST['estado'];

        $citaController = new CitaController();
       if($citaController ->actualizarCita($cita)){
            header("location: ../views/cita/consultar.php");
       }
       else{
           echo "Error al editar una cita";
       }
    }

    //INACTIVAR CITA
    if($_GET['accionc'] =="inactivar"){
        $citaController = new CitaController();
        if($citaController->cancelarCita($_GET['id'])){
            header("location: ../views/cita/consultar.php");
        }
    }
}

//CLASE CONTROLADOR DE CITA
class CitaController{
        var $model;
        
        public function CitaController(){
            $this->model = new CitaModel();
        }
        public function registrarCita($cita){
            $this->model = $cita;
            return $this->model->registrarCita();
        }
        public function actualizarCita($cita){
            $this->model = $cita;
            return $this->model->actualizarCita();
        }

        public function consultarCitaId($id){
            return $this->model->consultarCitaId($id);
        }
        public function consultarCitas(){
            return $this->model->consultarCitas();
        }

        public function cancelarCita($id){
            return $this->model->cancelarCita($id);
        }
        public function cerrarConexion(){
            return $this->model->cerrarConexion();
        }

        public function getEstadistica(){
            $cita = new CitaModel();
            return $cita->contar();
        }

}

<?php 
include_once(dirname(__FILE__)."/../models/medicoModel.php");

    //EJECUTAMOS EL CODIGO SEGUN EL VALOR DE LA VARIABLE $_GET
    if(isset($_GET['accionm'])){
        //REGISTRAR MEDICO
        if($_GET['accionm'] == "registrar"){
            $medico = new medicoModel();
            //OBTENEMOS LOS DATOS DEL FORMULARIO A TRAVES DE LA VARIABLE $_POST
            $medico->identificacion = $_POST['identificacion'];
            $medico->nombres=$_POST['nombres'];
            $medico->apellidos= $_POST['apellidos'];
            $medico->correo= $_POST['correo'];
            $medico->telefono = $_POST['telefono'];
            $medico->direccion =$_POST['direccion'];
            $medico->ciudad = $_POST['ciudad'];
            $medico->departamento= $_POST['departamento'];
            $medico->f_nacimiento= $_POST['fnacimiento'];
            $medico->sexo = $_POST['genero'];
            $medico->especialidad = $_POST['especialidad'];
            $medicoController = new medicoController();
            if($medicoController->registrarMedico($medico)){
                header("location: ../views/medico/consultar.php");
            }
            else{
                echo "Error al registrar un médico";
            }
        }
        //CONSULTAR MEDICO
        if($_GET['accionm'] =="consultar"){
            $medicoController = new medicoController();
            $medico = $medicoController->consultarUnMedico($_GET['id']); 
        }

        if($_GET['accionm'] == "modificar"){
            $medico = new medicoModel();
            $medico->id =$_GET['id'];
            //OBTENEMOS LOS DATOS DEL FORMULARIO A TRAVES DE LA VARIABLE $_POST
            $medico->identificacion = $_POST['identificacion'];
            $medico->nombres=$_POST['nombres'];
            $medico->apellidos= $_POST['apellidos'];
            $medico->correo= $_POST['correo'];
            $medico->telefono = $_POST['telefono'];
            $medico->direccion =$_POST['direccion'];
            $medico->ciudad = $_POST['ciudad'];
            $medico->departamento= $_POST['departamento'];
            $medico->f_nacimiento= $_POST['f_nacimiento'];
            $medico->sexo = $_POST['sexo'];
            $medico->especialidad = $_POST['especialidad'];
            $medico->estado = $_POST['estado'];
            $medicoController = new medicoController();
           if($medicoController->actualizarMedico($medico)){
                header("location: ../views/medico/consultar.php");
           }else{
               echo "Error al modificar un médico";
           }
        }

        if($_GET['accionm'] =="inactivar"){
            $id = $_GET['id'];
            $medicoController = new medicoController();
            if($medicoController->inactivarMedico($id)){
                header("location: ../views/medico/consultar.php");
            }else{
                echo "Error al inactivar un médico";
            }
        }
    }
    
    //CLASE CONTROLADOR DE MEDICO
    class medicoController{
        var $model;
        
        public function medicoController(){
            $this->model = new medicoModel();
        }
        public function registrarMedico($medico){
            $this->model = $medico;
            return $this->model->registrarMedico();
        }
        public function consultarUnMedico($id){
            return $this->model->consultarUnMedico($id);
        }
        
        public function actualizarMedico($medico){
            return $medico->actualizarMedico();
        }

        public function consultarTodosMedicos(){
            return $this->model->consultarTodosMedicos();
        }

        public function inactivarMedico($id){
                return $this->model->inactivarMedico($id);
        }
        public function cerrarConexion(){
            $this->model->cerrarConexion();
        }
    }
?>
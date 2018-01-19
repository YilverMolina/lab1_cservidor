<?php 
include_once(dirname(__FILE__)."/../models/PacienteModel.php");

//EJECUTAMOS EL CODIGO SEGUN EL VALOR DE LA VARIABLE $_GET
if(isset($_GET['accion'])){

    //REGISTRAR PACIENTE
    if($_GET['accion'] == "registrar"){  
            $paciente = new Paciente();
            //OBTENEMOS LOS DATOS DEL FORMULARIO A TRAVES DE LA VARIABLE $_POST
            $paciente->identificacion = $_POST['identificacion'];
            $paciente->nombres=$_POST['nombres'];
            $paciente->apellidos= $_POST['apellidos'];
            $paciente->correo= $_POST['correo'];
            $paciente->telefono = $_POST['telefono'];
            $paciente->direccion =$_POST['direccion'];
            $paciente->ciudad = $_POST['ciudad'];
            $paciente->departamento= $_POST['departamento'];
            $paciente->f_nacimiento= $_POST['f_nacimiento'];
            $paciente->sexo = $_POST['sexo'];
            $paciente->numero_seguro = $_POST['seguro'];
            $pacienteController = new PacienteController($paciente);
           if($pacienteController->crearPaciente()){
                header("location: ../views/paciente/ViewListarPaciente.php?accion=listar");
           }else{
               echo "Error al crear el Paciente";
           }
    }
    //EDITAR PACIENTE POR ID
    if($_GET['accion'] == "editar"){
        $paciente = new Paciente();
        $paciente->id_persona=$_GET['id_persona'];
        $paciente->id =$_GET['id'];
        //OBTENEMOS LOS DATOS DEL FORMULARIO A TRAVES DE LA VARIABLE $_POST
        $paciente->identificacion = $_POST['identificacion'];
        $paciente->nombres=$_POST['nombres'];
        $paciente->apellidos= $_POST['apellidos'];
        $paciente->correo= $_POST['correo'];
        $paciente->telefono = $_POST['telefono'];
        $paciente->direccion =$_POST['direccion'];
        $paciente->ciudad = $_POST['ciudad'];
        $paciente->departamento= $_POST['departamento'];
        $paciente->f_nacimiento= $_POST['f_nacimiento'];
        $paciente->sexo = $_POST['sexo'];
        $paciente->numero_seguro = $_POST['seguro'];
        $paciente->estado = $_POST['estado'];
        $pacienteController = new PacienteController($paciente);
       if($pacienteController->actualizarPaciente()){
            header("location: ../views/paciente/ViewListarPaciente.php?accion=listar");
       }else{
           echo "Error";
       }
    }
    //CONSULTAR TODOS LOS PACIENTES
    if($_GET['accion']=="listar"){
        $pacienteController  =   new PacienteController(new Paciente());
        $pacientes = $pacienteController->listarPacientes();
    }
    //CONSULTAR UN PACIENTE POR ID
    if($_GET['accion'] == "consultar"){
        $id = $_GET['id'];
        $pacienteController = new PacienteController(new Paciente());
        $paciente = $pacienteController->buscarPaciente($id);
    }
    //INACTIVAR PACIENTE POR ID
    if($_GET['accion'] == "inactivar"){
        $id = $_GET['id'];
        $pacienteController = new PacienteController(new Paciente());
        $paciente = $pacienteController->inactivarPaciente($id);
    }
}

    //CLASE CONTROLADOR DE PACIENTE
    class PacienteController{
        var $model;
        
        function PacienteController($model){
          $this->model = $model;
        }
        function crearPaciente(){
            return $this->model->crearPaciente();
        }
        function listarPacientes(){
         return  $this->model->listarPacientes(); 

        }
        function listarPacientesActivos(){
            return  $this->model->listarPacientesActivos(); 
        }
        function buscarPaciente($id){
            return $this->model->buscarPacienteId($id);
        }
        function inactivarPaciente($id){
             if($this->model->inactivarPaciente($id)){
                 header("location: ../views/paciente/ViewListarPaciente.php?accion=listar");
             }
        }
        function actualizarPaciente(){
            return $this->model->editarPaciente();
        }
    }
?>
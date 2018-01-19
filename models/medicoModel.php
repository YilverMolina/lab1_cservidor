<!--MODELO DE MEDICO-->
<?php 
    include_once('Conexion.php'); 
    include_once("Persona.php");
    class medicoModel extends Persona {
        var $conn;  
        var $especialidad;
        var $id;
        var $id_persona;

        public function medicoModel(){
            $this->conn = new Conexion(); 
            $this->conn->Conexion();
        }
        //AÑADE UNA ENTRADA A EN LA TABLA PERSONA Y MEDICO
        public function registrarMedico(){

            $this->id_persona = $this->crearPersona();

            $sql = "INSERT INTO medico (especialidad,id_persona)
            VALUES ('" .$this->especialidad . "', " . $this->id_persona . ")";

            $res = $this->conn->executeQuery($sql);
            $this->conn->close();
            return $res;
        }
        //DEVUELVE LA CONSULTA DE UN MEDICO COMPLETA (PERSONA JOIN MEDICO) SEGUN LA ID
        public function consultarUnMedico($id){
            $this->conn = new Conexion(); 
            $sql = "SELECT p.*, m.id as id_medico, m.especialidad FROM persona p INNER JOIN medico m ON m.id_persona = p.id  AND (p.id = " . $id." or m.id =$id)";
      
            $res = $this->conn->executeQuery($sql);
            if($medico =  $res->fetch_object()){
                return $medico;
            }
        }
        //DEVUELVE LA CONSULTA DE LA TABLA MEDICO COMPLETA (PERSONA JOIN MEDICO)
        public function consultarTodosMedicos(){
            $sql = "SELECT p.id, p.identificacion, p.nombres, p.apellidos,p.estado, m.especialidad,m.id as id_medico FROM persona p INNER JOIN medico m ON m.id_persona = p.id ";
            $res = $this->conn->executeQuery($sql);
            return $res;
        }
        public function cerrarConexion(){
            $this->conn->close();
        }
        //ACTUALIZA UNA ENTRADA DE LA TABLA PERSONA Y MEDICO SEGUN LA ID Y LOS VALORES DE LOS ATRIBUTOS DEL MODELO
        public function actualizarMedico(){
            if($this->editarPersona($this->id)){
                $sql ="update medico set especialidad='$this->especialidad' where id_persona=$this->id";
                $conexion = new Conexion();
                if($conexion->executeQuery($sql)){
                    $conexion->close();
                    return true;
                }
            }
        }
        //ACTUALIZA EL CAMPO 'ESTADO' Y LO PONE COMO INACTIVO
        public function inactivarMedico($id){
            $conexion = new Conexion();
            $sql = "update persona set estado = 0 where persona.id =$id";
            if($conexion->executeQuery($sql)){
                $conexion->close();
                return true;
            }
        }
    }
?>

<!--MODELO DE PERSONA-->
<?php  
include_once("Conexion.php");

class Persona{
  var $id;
  var $identificacion;
  var $nombres;
  var $apellidos;
  var $correo;
  var $estado;
  var $telefono;
  var $direccion;
  var $ciudad;
  var $departamento;
  var $f_nacimiento;
  var $sexo;

  function Persona(){}
    //AÑADE UNA ENTRADA A EN LA TABLA PERSONA CON LOS VALORES DE LOS ATRIBUTOS DEL MODELO
    function crearPersona(){
       $conexion = new Conexion();
        $sql ="insert into persona (identificacion,nombres,apellidos,correo,telefono,direccion,ciudad,departamento,f_nacimiento,sexo) values".
        "($this->identificacion,'$this->nombres','$this->apellidos','$this->correo','$this->telefono','$this->direccion','$this->ciudad','$this->departamento','$this->f_nacimiento','$this->sexo')";

        if($conexion->executeQuery($sql)){
          $id =$conexion->lastId();  
          $conexion->close();
          return $id;
        }
        else{
          return false;
        }
    }
    //ACTUALIZA UNA ENTRADA DE LA TABLA PERSONA SEGUN LA ID Y LOS VALORES DE LOS ATRIBUTOS DEL MODELO
    function editarPersona($id){
      $sql ="update persona set identificacion=$this->identificacion, nombres = '$this->nombres',apellidos='$this->apellidos',correo='$this->correo', telefono='$this->telefono',direccion='$this->direccion',ciudad='$this->ciudad'".
      ", departamento='$this->departamento',f_nacimiento='$this->f_nacimiento', sexo='$this->sexo', estado = $this->estado where id = $id";
      $conexion = new Conexion();
    
      if($conexion->executeQuery($sql)){
        $conexion->close();
        return true;
      }
      else{
        return false;
      }
    }
}
?>
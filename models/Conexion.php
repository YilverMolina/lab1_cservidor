<!-- CLASE CONEXION: TIENE LOS METODOS PARA ABRIR/CERRAR UNA CONEXION CON LA BD Y HACER UNA CONSULTA-->
<?php
        class Conexion{
            var $username="root";
            var $password="root.2016";
            var $host="localhost";
            var $db="citas_medicas";
            var $mysqli;

            //METODO DE CONEXION
            function Conexion(){
                $this->mysqli = new mysqli($this->host, $this->username,$this->password, $this->db);
                if($this->mysqli->connect_error){
                    die("Error de conexión (" . $this->mysqli -> connect_errno . ")" . $this->mysqli -> connect_error);
                }
            
            }
            //METODO PARA HACER CONSULTA
            function executeQuery($sql){
                 $res = $this->mysqli->query($sql);
                return $res;
            }
            //METODO PARA CERRAR CONEXION            
            function close(){
                 $this->mysqli->close();
            }
            /* LASTID: DEVUELVE LA ULTIMA ID CREADA EN LA TABLA (AL TENER LOS DATOS DE PERSONA Y LOS DE PACIENTE/MEDICO SEPARADOS
              AL CREAR UN MEDICO O PACIENTE NOS INTERESA SABER LA ID PARA QUE DESPUES DE INTRODUCIR LOS VALORES DE PERSONA EN SU 
              TABLA PODAMOS CREAR PACIENTE O MEDICO CON LA ID CORRESPONDIENTE */
            function lastId(){
                return $this->mysqli->insert_id;
            }
        }	
	?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Consultar médicos</title>
  <head>
  <?php
    include_once "../general/header.php";
  ?>

  <!-- FUNCIONES AUXILIARES PARA LA VENTANA EMERGENTE DE INACTIVAR MEDICO-->
  <script>
    var id=0;
    function asignarId(i){
      id = i;
    }
    function eliminarMedico(){
      location.href="../../controllers/medicoController.php?accionm=inactivar&id="+id;
    }
  </script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
    include_once "../general/navigation.php";
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Médicos</a>
        </li>
        <li class="breadcrumb-item active">Consultar</li>
      </ol>
      <?php
        include_once dirname(__FILE__) . "/../../controllers/medicoController.php";
        
        /* INSTANCIAMOS UN CONTROLADOR PARA MEDICOS Y LLAMAMOS AL METODO 'consultarTodosMedicos' EL CUAL DEBE
        DEVOLVER UNA CONSULTA DE LA TABLA MEDICOS */
        $control = new medicoController();
        $result = $control->consultarTodosMedicos();

        //SI LA CONSULTA DEVUELVE 1 FILA O MÁS CONSTRUIMOS LA TABLA DE MÉDICOS
        if ($result->num_rows > 0) {
          echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
          <thead>
				    <tr>
				      <th>Identificación</th>
				      <th>Nombre</th>
              <th>Especialidad</th>
              <th>Estado</th>
              <th>Accion</th>
				    </tr>
          </thead><tbody>";
          //PARA CADA FILA OBTENIDA OBTENEMOS LOS CAMPOS DE LA TABLA Y LOS MOSTRAMOS
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['identificacion'] . "</td>";
            echo "<td>" . $row['nombres'] . " " . $row['apellidos'] . "</td>";
            echo "<td>" . $row['especialidad'] . "</td>";
            if ($row['estado'] == 1) {
              echo "<td>Activo</td>";
            } 
            else {
              echo "<td>Inactivo</td>";
            }
            //BOTONES ASOCIADOS A CADA MEDICO DE VER, MODIFICAR Y INACTIVAR
            echo "<td><a href='ver.php?id=" . $row['id'] . "&accionm=consultar' data-toggle='tooltip' title='Ver detalle'> <i class='fa fa-fw fa-eye'></i></a>";
            echo "<a href='modificar.php?id=" . $row['id'] . "&accionm=consultar' data-toggle='tooltip' title='Editar Médico' > <i class='fa fa-fw fa-pencil'></i></a>";
            if($row['estado'] ==1){
              echo "<a href='#' data-toggle='modal' data-target='#modalInactivarMedico' data-toggle='tooltip' title='Inactivar Médico' onClick='asignarId(" . $row['id'] . ");'>
              <i class='fa fa-fw fa-trash'></i>";
            }
            echo "</tr>";
          }
          echo "</tbody></table>";
        } 
        //SI NO SE ENCUENTRA NADA EN LA BD
        else {
          echo "No se encontraron registros";
        }
      $control->cerrarConexion();
    ?>
    <?php
      include_once "../general/footer.php";
    ?>
  </div>

  <!-- VENTANA EMERGENTE DE CONFIRMACIÓN PARA DESACTIVAR A UN MÉDICO-->
  <div class="modal fade" id="modalInactivarMedico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Inactivar Médico</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">¿Esta seguro de inactivar el Médico?</div>
        <div class="modal-footer">
          <!-- BOTON CANCELAR -->
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <!-- BOTON INACTIVAR -->
          <a class="btn btn-primary" href="#" onClick="eliminarMedico();">Inactivar</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

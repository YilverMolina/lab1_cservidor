<!-- MENÚ LATERAL-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../general">MedicApp</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
        <a class="nav-link" href="../general">
          <i class="fa fa-fw fa-home"></i>
          <span class="nav-link-text">Inicio</span>
        </a>
      </li>

      <!-- MEDICOS -->      
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Médicos">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-address-book-o"></i>
          <span class="nav-link-text">Médicos</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <!-- REGISTRAR MEDICOS-->
          <li>
            <a href="../medico/registrar.php"><i class="fa fa-fw fa-plus-square"></i> Registro Medicos</a>
          </li>
          <!-- CONSULTAR MEDICOS-->
          <li>
            <a href="../medico/consultar.php"><i class="fa fa-fw fa-reorder"></i> Listado Medicos</a>
          </li>
        </ul>
      </li>

      <!-- PACIENTES -->
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pacientes">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#pacientes" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-group"></i>
          <span class="nav-link-text">Pacientes</span>
        </a>
        <ul class="sidenav-second-level collapse" id="pacientes">
          <!-- REGISTRAR PACIENTES -->
          <li>
            <a href="../paciente/ViewCrearPaciente.php"><i class="fa fa-fw fa-plus-square"></i> Registro Paciente</a>
          </li>
          <!-- CONSULTAR PACIENTES -->
          <li>
            <a href="../paciente/ViewListarPaciente.php?accion=listar"><i class="fa fa-fw fa-reorder"></i> Listado Pacientes</a>
          </li>
        </ul>
      </li>

      <!-- CITAS-->
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Citas médicas">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#citas" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-address-card-o"></i>
          <span class="nav-link-text">Citas</span>
        </a>
        <ul class="sidenav-second-level collapse" id="citas">
          <!-- REGISTRAR CITAS -->
          <li>
            <a href="../cita/registrar.php"><i class="fa fa-fw fa-plus-square"></i> Registro Citas</a>
          </li>
          <!-- CONSULTAR CITAS -->
          <li>
            <a href="../cita/consultar.php"><i class="fa fa-fw fa-reorder"></i> Listado Citas</a>
          </li>
        </ul>
      </li>
    </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </nav>

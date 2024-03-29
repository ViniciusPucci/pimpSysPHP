<?php
  require('../php/connect.php');

  if(!isset($_SESSION)) session_start();

  if(!isset($_SESSION['usr_id'])) header('Location: login.php');
?>
<div class="container-fluid">
<!-- Toggler -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<!-- Brand -->
<a class="navbar-brand pt-0" href="index.php">
  <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
</a>
<!-- User -->
<ul class="nav align-items-center d-md-none">
  <li class="nav-item dropdown">
    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="ni ni-bell-55"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <div class="media align-items-center">
        <span class="avatar avatar-sm rounded-circle">
          <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg">
        </span>
      </div>
    </a>
    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
      <div class=" dropdown-header noti-title">
        <h6 class="text-overflow m-0">Bem-vindo!</h6>
      </div>
      <a href="profile.php" class="dropdown-item">
        <i class="ni ni-single-02"></i>
        <span>Meu perfil</span>
      </a>
      <a href="profile.php" class="dropdown-item">
        <i class="ni ni-settings-gear-65"></i>
        <span>Configurações</span>
      </a>
      <a href="profile.php" class="dropdown-item">
        <i class="ni ni-calendar-grid-58"></i>
        <span>Atividade</span>
      </a>
      <a href="profile.php" class="dropdown-item">
        <i class="ni ni-support-16"></i>
        <span>Suporte</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="../php/logout.php" class="dropdown-item">
        <i class="ni ni-user-run"></i>
        <span>Sair</span>
      </a>
    </div>
  </li>
</ul>
<!-- Collapse -->
<div class="collapse navbar-collapse" id="sidenav-collapse-main">
  <!-- Collapse header -->
  <div class="navbar-collapse-header d-md-none">
    <div class="row">
      <div class="col-6 collapse-brand">
        <a href="index.php">
          <img src="../assets/img/brand/blue.png">
        </a>
      </div>
      <div class="col-6 collapse-close">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </div>
  <!-- Form -->
  <form class="mt-4 mb-3 d-md-none">
    <div class="input-group input-group-rounded input-group-merge">
      <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <span class="fa fa-search"></span>
        </div>
      </div>
    </div>
  </form>
  <!-- Navigation -->
  <ul class="navbar-nav">
    <li class="nav-item  class=" active" ">
    <a class=" nav-link active " href=" index.php"> <i class="ni ni-tv-2 text-primary"></i> Página principal
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link " href="icons.html">
        <i class="ni ni-planet text-blue"></i> Icones
      </a>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link " href="maps.html">
        <i class="ni ni-pin-3 text-orange"></i> Mapas
      </a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link " href="profile.php">
        <i class="ni ni-single-02 text-yellow"></i> Perfil
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="tables.php">
        <i class="ni ni-bullet-list-67 text-red"></i> Tabelas
      </a>
    </li>
    <?php if(!isset($_SESSION['usr_id'])) :?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">
          <i class="ni ni-key-25 text-info"></i> Entrar
        </a>
      </li>
    <?php endif ?>
    <li class="nav-item">
      <a class="nav-link" href="registerCompanies.php">
        <i class="ni ni-circle-08 text-blue"></i> Registrar companhia
      </a>
    </li>
  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <?php //if($_SESSION['sts_cli'] == 2) : ?>
    <h6 class="navbar-heading text-muted">Documentation</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
      <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
          <i class="ni ni-spaceship"></i> Getting started
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
          <i class="ni ni-palette"></i> Foundation
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
          <i class="ni ni-ui-04"></i> Components
        </a>
      </li>
    </ul>
  <?php // endif ?>
</div>

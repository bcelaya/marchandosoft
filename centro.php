<?php
//
require_once 'controlsesion.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>MarchandoSoft Panel de configuración</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/centro.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Centro de control Marchando</h1>
  <p>Versión 0.1 - Zelaia Networks</p> 
  <p>Bienvenido <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
<p>
    <a href="reset-password.php" class="btn btn-warning">Cambiar la contraseña</a>
    <a href="logout.php" class="btn btn-danger">Cerrar la sesión</a>
</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Opciones</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="register.php">Añadir usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="articulosnuevos.php">Añadir artículos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="totales.php">Consultar totales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="interfaz.php">Interfaz camareros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cocina.php">Interfaz cocina</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="logout.php">Cerrar sesión</a>
        </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Usuario activo</h2>
      <h5>Fotografía/Avatar:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Usuario <?php echo $_SESSION['usuario']; ?></p>
      <h3>Enlaces de interés</h3>
      <p>Aquí unos cuantos enlaces que pueden ser de ayuda</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="config.php">Opciones de configuración</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="interfaz.html">Manual usuario - camarero</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cocina.php">Manual usuario - cocina</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="centro.html">Centro</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Ultimas noticias</h2>
      <h5>Por Bruno Celaya Montero, 7 de Junio, 2019</h5>
      <div class="fakeimg">Fake Image</div>
      <p>MarchandoSoft V1.1</p>
      <p>Seguimos añadiendo funcionalidades a este sistema modular de gestión de restaurant. Consulte el changelog para ver todas las novedades incluidas en esta versión</p>
      <br>
      <h2>Empezamos con esto</h2>
      <h5>Por Bruno Celaya Montero, 25 de Mayo, 2019</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>MarchandoSoft es una solución modular Open Source realizada por Bruno Celaya Montero</p>
</div>

</body>
</html>
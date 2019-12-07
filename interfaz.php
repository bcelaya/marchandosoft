<?php
require_once 'controlsesion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>MarchandoSoft - gestión mesas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<style>
.btn{
margin:0.2em 0.2em;
padding:0.7em 0;
}
#footer {
  position: absolute bottom 0;
  width: 100%;
  height: 2.5rem;            /* Footer height */
}
#camarero{
  margin-left:2em;
}
#logout{
  text-align:right;
  float:right;
}
@media screen and (min-width: 960px) {
  body {
    /* background-color: lightgreen; */
    /* solo para motivos de testeo */
    
  }
  .btn {
    padding: 2.7em 0;
}
}
</style>
<body>
<div class="container">
    <div class="jumbotron">
    	<div class="col-sm-12 top">
        <span id="camarero">Nombre camarero: </span><?php echo $_SESSION["username"]; ?><span id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar sesión</a></span>
        </div>
    </div>
  <div class="row">
    <div class="col-md-4 text-center">
        <a href="index.php?mesa=1"><button type="button" class="btn btn-success btn-block btn-lg">Mesa 1</button></a>
    </div>
    <div class="col-md-4 text-center">
        <a href="index.php?mesa=2"><button type="button" class="btn btn-success btn-block btn-lg">Mesa 2</button></a>
    </div>
    <div class="col-md-4 text-center">
      <a href="index.php?mesa=3"><button type="button" class="btn btn-success btn-block btn-lg">Mesa 3</button></a>
    </div>
  </div>
  <div class="row">
  	<div class="col-md-4 text-center">
  		<a href="index.php?mesa=4"><button type="button" class="btn btn-success btn-block btn-lg">Mesa 4</button></a>
    </div>
    <div class="col-md-4 text-center">
  		<a href="index.php?mesa=5"><button type="button" class="btn btn-success btn-block btn-lg">Mesa 5</button></a>
    </div>
    <div class="col-md-4 text-center">
  		<a href="index.php?mesa=6"><button type="button" class="btn btn-success btn-block btn-lg">Mesa 6</button></a>
    </div>  
  </div>
  <div class="row">
    <div class="col-md-4 text-center">
      <a href="index.php?mesa=7"><button type="button" class="btn btn-success btn-block btn-lg">Mesa 7</button></a>
    </div>
    <div class="col-md-4 text-center">
      <a href="index.php?mesa=8"><button type="button" class="btn btn-success btn-block btn-lg">Mesa 8</button></a>
    </div>
    <div class="col-md-4 text-center">
      <a href="index.php?mesa=9"><button type="button" class="btn btn-success btn-block btn-lg">Mesa 9</button></a>
    </div>
  </div>
 </div>
</body>
</html>
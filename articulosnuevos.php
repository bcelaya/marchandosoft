<?php
require_once "config.php";
// Iniciamos la sesión
require_once "controlsesion.php";
 
// Se comprueba si esta logeado el usuario, si no es así lo redirigimos a login.php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Definimos las variables y las inicializamos con valores vacios
$nombreart = $pvpart = $tipoart = $stock = "";
$nombreart_err = $pvpart_err = $tipoart_err = $stock_err = "";

// Procesamos el formulario cuando se envie
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validamos nombre de articulo
    if(empty(trim($_POST["nombreart"]))){
        $nombreart_err = "Por favor introduzca un nombre de artículo";
    } else{
        // Preparamos la petición a la BBDD
        $sql = "SELECT nombreart FROM Articulos WHERE nombreart = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_nombreart);
            
            // Set parameters
            $param_nombreart = trim($_POST["nombreart"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $nombreart_err = "El nombre de artículo ya existe, no pueden haber dos artículos con el mismo nombre";
                } else{
                    $nombreart = trim($_POST["nombreart"]);
                }
            } else{
                echo "Oops! Algo ha ido mal, intentalo de nuevo más tarde.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validamos pvpart
    if(empty(trim($_POST["pvpart"]))){
        $pvpart_err = "Por favor introduzca un precio.";     
    }
    else{
        $pvpart = trim($_POST["pvpart"]);
    }
    
    // Validamos tipo de producto
    if(empty(trim($_POST["tipoart"]))){
        $tipoart_err = "Por favor introduce el tipo de artículo";     
    } else{
        $tipoart = trim($_POST["tipoart"]);
    }

    // Validamos stock
    if(empty(trim($_POST["stock"]))){
        $tipostock = "0";
    } else{
        $stock = trim($_POST["stock"]);
    }

     // Comprobamos si hay errores antes de proceder a hacer el insert en la BBDD
     if(empty($nombreart_err) && empty($pvpart_err) && empty($tipoart_err)){
        
        // Preparamos el insert en la BBDD
        $sql = "INSERT INTO Articulos (nombreart, pvpart, tipoart, stock) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_nombreart, $param_pvpart, $param_tipoart, $param_stock);
            
            // Set parameters
            $param_nombreart = $nombreart;
            $param_pvpart = $pvpart;
            $param_tipoart = $tipoart;
            $param_stock = $stock;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: articulosnuevos.php");
            } else{
                echo "Algo salio mal, contacte con el administrador";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>MarchandoSoft - Formulario nuevo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Formulario introducción nuevos artículos</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8 text-center">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="form-group">
    <label for="nombreart">Nombre artículo:</label>
    <input type="text" name="nombreart" class="form-control" id="nombreart">
  </div>
  <div class="form-group">
    <label for="pvpart">PVP:</label>
    <input type="number" step="0.10" name="pvpart" class="form-control" id="pvpart">
  </div>
 <select name="tipoart">
  <option value="comidas">Comidas</option>
  <option value="bebidas">Bebidas</option>
  <option value="postre">Postre</option>
  <option value="cafe">Cafe</option>
</select>
<div class="form-group">
    <label for="stock">Stock:</label>
    <input type="number" step="1" name="stock" class="form-control" id="stock">
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>

</body>
</html>

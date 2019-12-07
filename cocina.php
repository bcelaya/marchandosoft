<!DOCTYPE html>
<html lang="es">
<head>
  <title>MarchandoSoft - Interfaz cocina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
  <script src="js/dragndroppedidos.js"></script>
  <style>
  ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
  li { margin: 5px; padding: 5px; width: 150px; }
  #feedback { font-size: 1.4em; }
  #selectable .ui-selecting { background: #FECA40; }
  #selectable .ui-selected { background: #F39814; color: white; }
  #selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
  </style>
</head>
<body>

<div class="container-fluid">
  <h1 class="text-center">MarchandoSoft - Interfaz cocina</h1>
  <div class="row">
    <div class="col-sm-3" style="background-color:green;">
    <h3 class="text-center">Recibidos</h3>
    </div>
    <div class="col-sm-6" style="background-color:yellow;">
    <h2 class="text-center">Seleccionado<span id="pedidonum"></span></h2>
    <ul>
  <li id="draggable" class="ui-state-highlight">Drag me down</li>
</ul>
 
<ul id="sortable">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
  <li class="ui-state-default">Item 5</li>
</ul>
    </div>
    <div class="col-sm-3" style="background-color:blue;">
    <h3 class="text-center">Listos para servir</h3>
  </div>
  </div>
 <div class="row">
  	<div class="col-sm-12" style="background-color:pink;"><h3 class="text-center">Aquí van los botones que correspondan</h3>
  	</div>
  </div>
</div>
    
</body>
</html>

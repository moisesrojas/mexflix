<?php
include_once("includes/conexion.php");
echo $id = $_GET['id'];	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Edita un registro</title>

  
</head>
<body>
  <h1>Editar registro</h1>
  
  <form action="includes/insertar.php" method="POST">
   <span>Título:</span>
   <input type="text" name="titulo" placeholder="Título">
   <br><br>
   <span>Año de lanzamiento:</span>
   <input type="text" name="lanzamiento" placeholder="Año de lanzamiento">
   <br><br>
   <span>Dirección:</span>
   <input type="text" name="direccion" placeholder="Dirección">
   <br><br>
   <span>Casting:</span>
   <textarea name="casting" placeholder="Casting"></textarea>
   <br><br>
   <span>Duración:</span>
   <input type="text" name="duracion" placeholder="Duración">
   <br><br>
   <span>Sinópsis:</span>
   <textarea name="sinopsis" placeholder="Sinópsis"></textarea>
   <br><br>
   <span>Categoría:</span>
   <input type="text" name="categoria" placeholder="Categoría">
   <br><br>
   <span>Clasificación:</span>
   <input type="text" name="clasificacion" placeholder="Clasificación">
   <br><br>
   <span>Póster:</span>
   <input type="text" name="poster" placeholder="Póster">
   <br><br>
   <input type="submit" name="submit" value="INSERTAR REGISTRO">
  </form>
</body>
</html>

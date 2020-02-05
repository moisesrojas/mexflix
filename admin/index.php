<?php
//INCLUIMOS LA CONEXIÓN
include_once("includes/conexion.php");
//EJECUTAMOS UNA CONSULTA A LA TABLA PELÍCULAS
$consulta = mysqli_query($conexion, "SELECT * FROM peliculas");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">  
  <title>ADMNISTRADOR MEXFLIX</title>

</head>
<body>
 <h1>Lista de películas de Mexflix</h1>
	
 <table>
  <tbody>
	  <tr>
		  <td>ID</td>
		  <td>Título</td>
		  <td>Lanzamiento</td>
		  <td>Dirección</td>
		  <td>Casting</td>
		  <td>Sinópsis</td>
		  <td>Categoría</td>
		  <td>Clasificación</td>
		  <td>Póster</td>
		  <td>Eliminar</td>
          </tr>
	  <?php
	  while ($resultado = mysqli_fetch_assoc($consulta)){
	    echo "<tr>";
	    echo "<td>" . $resultado['id_pelicula'] . "</td>";
	    echo "<td><a href='editar.php?id=" . $resultado['id_pelicula'] . "'> " . $resultado['titulo'] . "</a></td>";
	    echo "<td>" . $resultado['lanzamiento'] . "</td>";
	    echo "<td>" . $resultado['direccion'] . "</td>";
	    echo "<td>" . $resultado['casting'] . "</td>";
	    echo "<td>" . $resultado['sinopsis'] . "</td>";
	    echo "<td>" . $resultado['categoria'] . "</td>";
	    echo "<td>" . $resultado['clasificacion'] . "</td>";
	    echo "<td><img width='150' src='../img/posters/" . $resultado['poster'] . "'></td>";
	    echo "<td><a href='includes/eliminar.php?id=" . $resultado['id_pelicula'] . "'> Eliminar </a></td>";
	    echo "</tr>";
	  }	
	  ?>
  </tbody>
  </table>
</body>
</html>

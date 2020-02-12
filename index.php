<?php
//INCLUIMOS LA CONEXIÓN A BASE DE DATOS
include_once("includes/conexion.php");
	
//EJECUTA UNA CONSULTA UTILIZANDO LA CONEXIÓN A BASE DE DATOS
$consulta = mysqli_query($conexion, "SELECT * FROM peliculas");

	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MEXFLIX :: TEC WEB</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<section id="encabezado">
	<nav class="container">
		<div class="row">
			<div class="logo col-6">
				<img src="img/logo.png" alt="logo mexflix">
			</div>
			<div class="menu col-6">
			  <ul>
			    <li>Menú 1</li>
			    <li>Menú 2</li>
			    <li>Menú 3</li>
			    <li>Menú 4</li>
			  </ul>
			</div>
		</div>
	</nav>
</section>

<section id="catalogo" class="container-fluid">
	<h2>Top 10 para ti</h2>
	<div class="row">
		<?php
		//HACEMOS UN CICLO PARA MOSTRAR LA INFORMACIÓN DE LA CONSULTA
		while ($resultado = mysqli_fetch_assoc($consulta)){
			echo "<div class='col-lg-3'>";
			echo "<h4>" . $resultado['titulo'] . "</h4>";
			echo "<img class='img-fluid' src='img/posters/" . $resultado['poster'] . "'>";
			echo "</div>";
		}
		?>
	</div>
</section>

<!-- INCLUIMOS LA SECCIÓN DE LA CATEGORÍA DRAMA -->
<?php include_once("includes/drama.php"); ?>

<!-- INCLUIMOS LA SECCIÓN DE LA CATEGORÍA TERROR -->
<?php include_once("includes/terror.php"); ?>


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
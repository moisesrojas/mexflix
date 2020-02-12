<?php
//EJECUTA UNA CONSULTA PARA LAS PELÍCULAS DE DRAMA
$consulta_drama = mysqli_query($conexion, "SELECT * FROM peliculas WHERE categoria = 'Drama'");
?>

<section id="catalogoDrama" class="container-fluid">
	<h2>Drama</h2>
	<div class="row">
		<?php
		//HACEMOS UN CICLO PARA MOSTRAR LA INFORMACIÓN DE LA CONSULTA
		while ($resultado = mysqli_fetch_assoc($consulta_drama)){
			echo "<div class='col-lg-3'>";
			echo "<h4>" . $resultado['titulo'] . "</h4>";
			echo "<img class='img-fluid' src='img/posters/" . $resultado['poster'] . "'>";
			echo "</div>";
		}
		?>
	</div>
</section>
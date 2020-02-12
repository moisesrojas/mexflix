<?php
 //EJECUTA UNA CONSULTA PARA LAS PELÍCULAS DE ACCIÓN
$consulta_accion = mysqli_query($conexion, "SELECT * FROM peliculas WHERE categoria = 'Terror'");
 ?>

<section id="catalogoAccion" class="container-fluid">
	<h2>Terror</h2>
	<div class="row">
		<?php
		//HACEMOS UN CICLO PARA MOSTRAR LA INFORMACIÓN DE LA CONSULTA
		while ($resultado = mysqli_fetch_assoc($consulta_accion)){
			echo "<div class='col-lg-3'>";
			echo "<h4>" . $resultado['titulo'] . "</h4>";
			echo "<img class='img-fluid' src='img/posters/" . $resultado['poster'] . "'>";
			echo "</div>";
		}
		?>
	</div>
</section>
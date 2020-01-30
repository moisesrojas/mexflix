<?php
//DEFINIMOS LOS VALORES DENTRO DE VARIABLES
$servidor = "localhost";
$usuario = "root";
$pass = "root";
$bd = "mexflix";

//REALIZAMOS LA CONEXIÓN
$conexion = mysqli_connect($servidor,$usuario,$pass,$bd);

//CODIFICA LA INFORMACIÓN DE LA BASE DE DATOS
mysqli_set_charset($conexion, 'utf-8');

//VALIDAMOS SI LA CONEXIÓN SE PUDO REALIZAR
if (!$conexion){
	die("No me pude conectar a la base de datos" . mysqli_connect_error());
} else {
	//echo "Conectado";
}


?>
<?php
//INCLUIMOS LA CONEXIÓN
include_once("conexion.php");

//ALMACENAMOS EN VARIABLES CADA UNO DE LOS VALORES CAPTURADOS POR EL USUARIO
$titulo=$_POST['titulo'];
$lanzamiento=$_POST['lanzamiento'];
$direccion=$_POST['direccion'];
$casting=$_POST['casting'];
$duracion=$_POST['duracion'];
$sinopsis=$_POST['sinopsis'];
$categoria=$_POST['categoria'];
$clasificacion=$_POST['clasificacion'];
$poster=$_POST['poster'];

//DECLARAMOS LA CONSULTA PARA INSERTAR EL NUEVO REGISTRO
$consulta = "INSERT INTO peliculas (titulo,lanzamiento,director,casting,duracion,sinopsis,categoria,clasificacion,poster) VALUES ('$titulo',$lanzamiento,'$direccion','$casting','$duracion','$sinopsis','$categoria','$clasificacion','$poster')";

//EJECUTAMOS LA CONSULTA
mysqli_query($conexion, $consulta);

//REDIRECCIONAMOS AL INDEX
header('Location:../index.php');

?>
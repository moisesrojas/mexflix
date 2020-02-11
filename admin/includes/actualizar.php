<?php
//INCLUIMOS EL ARCHIVO DE CONEXIÓN
include_once("conexion.php");
//ALMACENAMOS EN VARIABLES LOS VALORES CAPTURADOS POR EL USUARIO	
$id= $_POST['id'];
$titulo =$_POST['titulo'];
$lanzamiento = $_POST['lanzamiento'];
$direccion = $_POST['direccion'];
$casting = $_POST['casting'];
$duracion = $_POST['duracion'];
$sinopsis = $_POST['sinopsis'];
$categoria = $_POST['categoria'];
$clasificacion = $_POST['clasificacion'];
$poster = $_POST['poster'];

//DECLARAMOS LA CONSULTA PARA ACTUALIZAR
$consulta_actualizar = "UPDATE peliculas SET titulo='$titulo', lanzamiento=$lanzamiento,  director='$direccion', casting='$casting', duracion='$duracion', sinopsis='$sinopsis', categoria='$categoria', clasificacion='$clasificacion', poster = '$poster' WHERE id_pelicula = '$id' ";
//EJECUTAMOS LA CONSULTA
mysqli_query($conexion, $consulta_actualizar);
//REGRESAMOS AL USUARIO AL INDEX
header('Location:../index.php');
?>
<?php
//INCLUIMOS EL ARCHIVO DE CONEXIÓN
include_once("conexion.php");
//ALMACENAMOS EN UNA VARIABLE EL VALOR DEL ID
$id = $_GET['id'];
//DEFINIMOS LA CONSULTA PARA ELIMINAR
$consulta_eliminar = "DELETE FROM peliculas WHERE id_pelicula = '$id'";
//EJECUTAMOS LA CONSULTA ELIMINAR
mysqli_query($conexion,$consulta_eliminar);
//REGRESAMOS AL USUARIO AL INDEX DEL ADMINISTRADOR
header('Location:../index.php');
?>
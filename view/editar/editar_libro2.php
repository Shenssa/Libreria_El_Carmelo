<?php

require_once("../conexion.php");


$id=$_GET["id"];

$nombre=$_REQUEST["nombre"];
$genero=$_REQUEST["genero"];
$autor=$_REQUEST["autor"];
$descripcion=$_REQUEST["descripcion"];
$portada=$_REQUEST["portada"];
$precio=$_REQUEST["precio"];

$sql="update libros set nombre='".$nombre."', genero='".$genero."', autor='".$autor."', descripcion='".$descripcion."', portada='".$portada."', precio='".$precio."' where id='".$id."'";
$result=mysqli_query($conexion,$sql);
$mostrar=mysqli_fetch_array($result);

header('Location: ../index_admin.php');


/**
echo "El nombre es ".$nombre."<br>";
echo "El nombre es ".$genero."<br>";
echo "El nombre es ".$autor."<br>";
echo "El nombre es ".$descripcion."<br>";
echo "El nombre es ".$portada."<br>";
echo "El nombre es ".$precio."<br>";
**/

?>
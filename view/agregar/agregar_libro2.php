<?php

require_once("../conexion.php");


$nombre=$_REQUEST["nombre"];
$genero=$_REQUEST["genero"];
$autor=$_REQUEST["autor"];
$descripcion=$_REQUEST["descripcion"];
$portada=$_REQUEST["portada"];
$precio=$_REQUEST["precio"];

$sql="INSERT INTO libros (id, nombre, genero, autor, descripcion, portada, precio) 
		VALUES (NULL,'".$nombre."','".$genero."','".$autor."','".$descripcion."','".$portada."','".$precio."')";
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
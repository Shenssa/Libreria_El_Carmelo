<?php
require_once("../conexion.php");
$id=$_GET["id"];
$sql="delete from libros where id='".$id."'";
$result=mysqli_query($conexion,$sql);
header('Location: ../index_admin.php');
?>
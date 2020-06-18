<?php
require_once("../conexion.php");
$id=$_GET["id"];
$sql="delete from mensajes where id='".$id."'";
$result=mysqli_query($conexion,$sql);
header('Location: ../mensajes.php');
?>
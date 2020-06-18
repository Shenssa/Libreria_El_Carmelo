<?php

require_once("../conexion.php");



$email="elcarmelo@gmail.com";
$asunto="Respuesta de la Libreria El Carmelo";
$libreria="Libreria El Carmelo";
$nombres=$_POST["nombres"];
$dni=$_POST["dni"];
$fono=$_POST["fono"];
$destinatario=$_POST['email'];
$asunto=$_POST['asunto'];
$respuesta=$_POST['respuesta'];



$header="Enviado desde la libreria El Carmelo";
$mensajeCompleto="Saludos estimado: ".$nombres."\n".$respuesta."\nAtentamente: ".$libreria."\nE-mail: ".$email;

mail($destinatario, $asunto, $mensajeCompleto, $header);

header('Location: ../mensajes.php');


/**
echo "El nombre es ".$nombre."<br>";
echo "El nombre es ".$genero."<br>";
echo "El nombre es ".$autor."<br>";
echo "El nombre es ".$descripcion."<br>";
echo "El nombre es ".$portada."<br>";



echo'<script type="text/javascript">
    alert("Tarea Guardada");
    window.location.href="../contacto.php";
    </script>';
**/

?>
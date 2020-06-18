<?php

require_once("../conexion.php");


$nombres=$_POST['nombres'];
$dni=$_POST["dni"];
$fono=$_POST["fono"];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

$destinatario="libreriaelcarmelo@gmail.com";
$asunto2="MENSAJE DE CONFIRMACION";
$pagina="https://erythrocyte-pile.000webhostapp.com/";


$sql="INSERT INTO mensajes (id, nombres, dni, fono, email, asunto, mensaje) 
		VALUES (NULL,'".$nombres."','".$dni."','".$fono."','".$email."','".$asunto."','".$mensaje."')";
$result=mysqli_query($conexion,$sql);
$mostrar=mysqli_fetch_array($result);

$header="Enviado desde la libreria";
$mensajeCompleto=$mensaje."\nAtentamente: ".$nombres."\nDNI: ".$dni."\nTelefono: ".$fono."\nE-mail: ".$email;
$mensajedeconfirmacion="Estimado/a: ".$nombres.".\nSu mensaje fue recibido con exito.\nLe enviaremos una respuesta cuanto antes.\nGracias por visitar nuestra pagina \n".$pagina."\nSi tiene alguna otra consulta, no dude en escribirnos a: ".$destinatario;

mail($destinatario, $asunto, $mensajeCompleto, $header);
mail($email,$asunto2, $mensajedeconfirmacion, $header);

echo "<script>alert('Correo enviado con exito')</script>";
echo "<script>setTimeout(\"location.href='../contacto.php'\",1000)</script>";


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
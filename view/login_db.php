<?php

if (isset($_SESSION['email'])) {
	header('Location: index_sesion.php');
	
}

$errores ='';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email = strtolower($_POST['email']);
	$password = $_POST['pass'];

		try{
			$conexion = new PDO('mysql:host=localhost;dbname=carmelo','root','');
			

		}catch (PDOException $e){
			echo "Error: ".$e->getMessage();
		}

		$statement2 = $conexion->prepare('SELECT * FROM usuarios_admin WHERE correo = :correo AND password = :password');
		$statement2->execute(array(':correo' => $email,':password' => $password));

		$resultado2 = $statement2->fetch();

		$statement = $conexion->prepare('SELECT * FROM registro WHERE correo = :correo AND password = :password');
		$statement->execute(array(':correo' => $email,':password' => $password));

		$resultado = $statement->fetch();

		if ($resultado2 != false) {
			$_SESSION['email'] = $email;
			header('Location: index_admin.php');
		}else

			if ($resultado != false) {
			$_SESSION['email'] = $email;
			header('Location: index.php');

		}else{
			$errores .= '<p>Los datos ingresados son incorrectos</p>';
		}
		
}

require 'login.php';


?>
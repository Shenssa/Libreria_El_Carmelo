<?php session_start();

if (isset($_SESSION['email'])) {
	header('Location: index_sesion.php');
}

$errores='';

if ($_SERVER['REQUEST_METHOD'] =='POST') {
	$email = strtolower($_POST['email']);
	$usuario = $_POST['user'];
	$password = $_POST['pass'];

	// echo "$email.$usuario.$password";

		if (empty($email) or empty($usuario) or empty($password)){
			$errores .= "<li> Por favor llena los datos correctamente</li>";
		}else{

		try{
			$conexion = new PDO('mysql:host=localhost;dbname=carmelo','root','');

		}catch (PDOException $e){
			echo "Error: ".$e->getMessage();
		}

		$statement = $conexion->prepare('SELECT * FROM registro WHERE correo = :correo LIMIT 1');
		$statement->execute(array(':correo' => $email));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<p> El correo ingresado ya esta registrado</p>';
		}

		$statement = $conexion->prepare('SELECT * FROM registro WHERE  dni = :dni LIMIT 1');
		$statement->execute(array(':dni' => $usuario));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<p> El DNI ingresado ya esta registrado</p>';
		}
	}

		if ($errores =='') {
			$statement = $conexion->prepare('INSERT INTO registro (correo,dni,password) VALUES (:correo, :dni, :password)');
		$statement->execute(array(':correo' => $email,':dni' => $usuario, ':password' => $password));
		
		header('Location: login_db.php');
	}
}

require 'registrar.php';

?>
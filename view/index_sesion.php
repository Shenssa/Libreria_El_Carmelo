<?php session_start();

if (isset($_SESSION['email'])) {
	header('Location: index.php');
	}else {
		header('Location: registrar.php');
	}

?>
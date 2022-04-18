<?php
session_start();


	unset($_SESSION["login_usuario"]);
	unset($_SESSION["senha_login"]);
	
	header("Location: ../admin.php");
?>
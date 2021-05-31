<?php
	session_start();
	if (isset($_SESSION["login"])) {
		session_destroy();
	}
	//redirecionamento de pagina
	header("Location:login.php");
?>
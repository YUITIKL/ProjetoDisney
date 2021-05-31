<?php
   session_start();
   include 'conexao.php';
	if ($_POST) {
		$login = $_POST["login"];
		$senha = md5($_POST["senha"]);

		$sql = "SELECT * FROM USUARIO WHERE LOGIN = '$login' AND senha = '$senha'";
		$resultado = mysqli_query($conexao, $sql);

		if (mysqli_num_rows($resultado) == 1) {
		 	$_SESSION["login"] = $login;
		 	header("Location:index.php");
		 } else {
		 	echo "<script>alert('Login e/ou Senha incorretos!')</script>";
		 }
	}//fim do $_POST

	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>LOGIN DO USUÁRIO</title>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Arquivo CSS Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Arquivo CSS do projeto -->
		<link rel="stylesheet" href="css/estilo.css" />
		<!-- CSS interno -->
		<style>
			body {
			  display: -ms-flexbox;
			  display: flex;
			  -ms-flex-align: center;
			  align-items: center;
			  padding-top: 40px;
			  padding-bottom: 40px;
			  background-color: #253F56;
			  background: url(img/disney.jpg) no-repeat center;
			}
			form{
			 	background-color: rgba(0,0,0,0.7);
			 	border-radius: 10px;

			}
		</style>
	</head>
	<body>
	<div class="container">
	
		<form class="form-signin" action="" method="post">
      	  <h1 class="h3 font-weight-normal mb-5"style="color: white">Login do Usuário</h1>
		  <input type="text" name="login" id="inputLogin" class="form-control mb-2" placeholder="Seu login" required autofocus>
		  <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
		  
		  <button class="btn btn-lg btn-primary btn-block" type="submit" style="color: white">Acessar</button>
		  <div class="semcadastro">
			<p style="color: white">Não tem acesso?<a href="cadastro.php"> Faça seu cadastro!</a></p>
		  </div>
		  <div class="trocarsenha">
			<p style="color: white">Esqueceu a senha?<a href="editarSenha.php" > Alterar senha!</a></p>
		  </div>
		</form>
		
		
		
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1" style="color: white">&copy; Todos os direitos reservados a Disney VERSÃO 1.0</p>
      </footer>
	</div><!-- fim class container -->	
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	</body>
</html>

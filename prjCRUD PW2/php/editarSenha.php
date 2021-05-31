<?php
session_start();
	include 'conexao.php';

//codigo de controle de sessão
	
	if (empty($_SESSION["login"])) {
		echo "<script>alert('Faça o login primeiramente!')</script>";
		header("Location:login.php");
	}


	if (isset($_POST["senha_nova"])&&
		isset($_POST["confirma_senha"]))
	{
		$senhaNova=$_POST["senha_nova"];
		$senhaConfirmada=$_POST["confirma_senha"];
	

	$login = $_SESSION["login"];
	$sql = "SELECT * FROM USUARIO WHERE login = '$login'";
	$resultado = mysqli_query($conexao,$sql);
	$vetor = mysqli_fetch_array($resultado);

	if ($senhaConfirmada != $senhaNova) {
		echo "<script>alert('Senhas estão diferentes')</script>";
	}else{
		$senhaNova = md5($senhaNova);
		$sql="UPDATE USUARIO SET senha='$senhaNova' WHERE login = '$login'";

	if (mysqli_query($conexao,$sql)) {
		echo "<script>alert('Senha alterada com sucesso')</script>";
		header("Location:login.php");
	}else {
		echo "<script>alert('Erro na alteração da senha')</script>";
	}
	}//fim do else
}//sim do Post
?>





<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>TROCAR A SENHA DO USUÁRIO</title>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Arquivo CSS Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Arquivo CSS do projeto -->
		<link rel="stylesheet" href="css/estilo.css" />
		<!-- CSS interno -->
		<style>
		.container {
			max-width: 960px;
		}
		body {
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
      <div class="py-5 text-center">
        <h2 style="color: white">Troque sua senha</h2>
		<p style="color: white">Lembrou a senha?<a href="login.php"> Faça login</a></p>
      </div>
	    
      
        <div class="col-md-12 text-center">
          <form class="needs-validation" novalidate method="post" action="">   

          <div class="py-1 text-center">
          	<br>
        <p style="color: white">Usuário logado: <b><?php echo $_SESSION["login"]?></b></p>

      </div>       

            <div class="col-md-3 mb-3 text-left">
              <label for="login" style="color: white">Nova senha</label>
                <input type="password" class="form-control" name="senha_nova" id="senhaNova" placeholder="" required>
            </div>
			
			<div class="col-md-3 mb-3 text-left">
              <label for="senha" style="color: white">Confirmar nova senha</label>
                <input type="password" class="form-control" name="confirma_senha" id="senhaConfirmada" placeholder="" required>
                <br>
            </div>
	  	  </div>
	  	  <br>
		
          
        <hr class="mb-4">
		<div id="row">
		<div class="col-md-12">
            <button class="col-md-6 btn btn-primary btn-lg btn-block m-auto" type="submit" style="color: white">Cadastrar nova senha</button>
          </form>		  
        </div>	
		</div>
		
	  

	  <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1" style="color: white">&copy;Todos os direitos reservados a Disney VERSÃO 1.0</p>
      </footer>
	  
  	</div><!-- fim class container -->	
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>
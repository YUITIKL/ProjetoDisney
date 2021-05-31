<?php
include 'conexao.php';

	if ($_POST) {
		$nome = $_POST["nome"];
		$login = $_POST["login"];
		$senha = md5 ($_POST["senha"]);

		$sql = "SELECT * FROM USUARIO WHERE LOGIN LIKE '$login'";
		$resultado = mysqli_query($conexao, $sql);

		if (mysqli_num_rows($resultado) > 0) {
			echo "<script>alert('Esse login já existe. Tente outro')</script>";
		}
		else{
			$sql = "INSERT INTO USUARIO VALUES (NULL, '$nome', '$login', '$senha')";
			if (mysqli_query($conexao, $sql)) {
				echo "<script>alert('Cadastro realizado com sucesso!');
				window.location.href ='login.php';
				</script>";
			}else{
				echo "<script>alert('Login e/ou Senha incorretos!')</script>";
			}
		}
	}//fim do $_POST


?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>CADASTRO DO USUÁRIO</title>
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
        <h2 style="color: white">Cadastre-se</h2>
		<p style="color: white">Já tem cadastro?<a href="login.php"> Faça um login </a></p>
      </div>
	  
	    
      
        <div class="col-md-12 text-center">
          <form class="needs-validation" novalidate method="post" action="">
            
              <div class="col-md-12 mb-3 text-left">
              	<br>
                <label for="nome" style="color: white">Nome Completo</label>
                <input type="text" class="form-control w-50" name="nome" id="nome" placeholder="" value="" required>
              </div>          

            <div class="col-md-3 mb-3 text-left">
              <label for="login" style="color: white">Login</label>
                <input type="text" class="form-control" name="login" id="login" placeholder="" required>
            </div>
			
			<div class="col-md-3 mb-3 text-left">
              <label for="senha" style="color: white">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="" required><br>
            </div>
	  	  </div>
		
          
        <hr class="mb-4">
		<div id="row">
		<div class="col-md-12">
            <button class="col-md-6 btn btn-primary btn-lg btn-block m-auto" type="submit" style="color: white">Cadastrar</button>
          </form>		  
        </div>	
		</div>
		
	  

	  <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1" style="color: white">&copy; Todos os direitos reservados à Disney VERSÃO 1.0</p>
      </footer>
	  
  	</div><!-- fim class container -->	
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>
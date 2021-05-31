<?php
	session_start();
	if (empty($_SESSION["login"])) {
	echo "<script>alert('Primeiramente faça o login!')</script>";
	header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Seja Bem-vindo</title>
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
			background-color: #1E4CA7;
		}
		

		</style>
  </head>

  <body>

    <header>
    <div class="row justify-content-center">
      <img src="img\disneyAberturaOff.gif" class="img-fluid" alt="Bem-Vindo ao AnimaNews!"/>
    </div>
  </header> 

    <div class="container-fluid">
	
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 shadow-sm" style="background-color: white">

    <h5 class="my-0 mr-md-auto font-weight-normal" style = "color: black"> Seja Bem-Vindo ao AnimaNews: <?php echo $_SESSION["login"];?></h5>
    <nav class="navbar navbar-light  navbar-expand-lg"><!--deixa responsivo-->
  <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-black" href="editarSenha.php">Alterar senha</a>
    </nav>
      <a class="btn btn-outline-primary" href="logout.php">SAIR</a>
    </div>
  </nav>
  	</div>

<div class="row" >
  <div class="col-md-3" style="background-color: white;"  >

    <h4>
        <a class="p-2 " href="Branca de neve e os 7 anões.php" >Branca de Neve e os 7 Anões</a>
    </h4>

    <h4>
        <a class="p-2 " href="Pinóquio.php">Pinóquio</a>
    </h4>

    <h4>
        <a class="p-2 " href="Fantasia.php">Fantasia</a>
    </h4>

    <h4>
        <a class="p-2 " href="Dumbo.php">Dumbo</a>
    </h4>

    <h4>
        <a class="p-2 " href="Bambi.php">Bambi</a>
    </h4>

    <h4>
        <a class="p-2 " href="Cinderela.php">Cinderela</a>
    </h4>

    <h4>
        <a class="p-2 " href="Alice no País das Maravilhas.php">Alice no País das Maravilhas</a>
    </h4>

     <h4>
        <a class="p-2 " href=" As Aventuras de Peter Pan.php"> As Aventuras de Peter Pan</a>
    </h4>

     <h4>
        <a class="p-2 " href="A Dama e o Vagabundo.php">A Dama e o Vagabundo</a>
    </h4>

     <h4>
        <a class="p-2 " href="Puff O Ursinho Guloso.php">Puff – O Ursinho Guloso</a>
    </h4>

     <h4>
        <a class="p-2 " href="A Bela Adormecida.php">A Bela Adormecida</a>
    </h4>

    <h4>
        <a class="p-2 " href="101 Dálmatas.php">101 Dálmatas</a>
    </h4>

     <h4>
        <a class="p-2 " href="A Espada Era a Lei.php">A Espada Era a Lei</a>
    </h4>

     <h4>
        <a class="p-2 " href="Mogli O Menino Lobo.php">Mogli: O Menino Lobo</a>
    </h4>

     <h4>
        <a class="p-2 " href="Aristogatas.php">Aristogatas</a>
    </h4>

     <h4>
        <a class="p-2 " href="Robin Hood.php">Robin Hood</a>
    </h4>

    <h4>
        <a class="p-2 " href=" O Cão e a Raposa.php"> O Cão e a Raposa</a>
    </h4>

    <h4>
        <a class="p-2 " href="As Peripécias de um Ratinho Detetive.php">As Peripécias de um Ratinho Detetive</a>
    </h4>

    <h4>
        <a class="p-2 " href="A Pequena Sereia.php">A Pequena Sereia</a>
    </h4>

    <h4>
        <a class="p-2 " href="A Bela e a Fera.php">A Bela e a Fera</a></a></a></a>
    </h4>

    <h4>
        <a class="p-2 " href="Aladdin.php">Aladdin</a></a></a>
    </h4>

    <h4>
        <a class="p-2 " href=" O Conto de Natal dos Muppets.php"> O Conto de Natal dos Muppets</a></a>
    </h4>

    <h4>
        <a class="p-2 " href="O Estranho Mundo de Jack.php">O Estranho Mundo de Jack</a>
    </h4>

    <h4>
        <a class="p-2 " href=" O Rei Leão.php"> O Rei Leão</a>
    </h4>

    <h4>
        <a class="p-2 " href="Toy Story.php">Toy Story</a>
    </h4>

    <h4>
        <a class="p-2 " href="O Corcunda de Notre Dame.php">O Corcunda de Notre Dame</a>
    </h4>

    <h4>
        <a class="p-2 " href="Hércules.php">Hércules</a>
    </h4>

    <h4>
        <a class="p-2 " href="Vida de Inseto.php">Vida de Inseto</a>
    </h4>

    <h4>
        <a class="p-2 " href="Mulan.php">Mulan</a>
    </h4>

    <h4>
        <a class="p-2 " href="Toy Story 2.php">Toy Story 2</a>
    </h4>

    <h4>
        <a class="p-2 " href="Tarzan.php">Tarzan</a>
    </h4>

    <h4>
        <a class="p-2 " href="Fantasia 2000.php">Fantasia 2000</a>
    </h4>

    <h4>
        <a class="p-2 " href="Monstros S.A.php">Monstros S.A.</a>
    </h4>

    <h4>
        <a class="p-2 " href="Lilo e Stitch.php">Lilo e Stitch</a>
    </h4>

    <h4>
        <a class="p-2 " href="Planeta do Tesouro.php">Planeta do Tesouro</a>
    </h4>

  </div>

  <div class="col-md-9" style="background-color: white">

    <div class="col-xs-12  colmd-12  col-lg-12"> 
  <h3 class="display-4" style = "color: black">DISNEY+  SE PREPARA PARA LANÇAMENTO DE NOVAS SÉRIES!</h3>
  <img class="img-fluid" src="img/what.png" alt="loading..."/>
  <br><br>
  <p style = "color: black">O Disney+ estreou e já está revelando algumas novidades de sua programação. Entre elas temos uma breve cena do episódio de “What If…?” onde teremos Peggy Carter como Capitã Britânia. Hayley Atwell estará de volta, dando voz à personagem. “What If…?” é uma série animada focada em realidades alternativas do Universo Cinematográfico Marvel. A série ainda não tem previsão de estreia.</p>

  <br><br><br>

  <h3 class="display-4" style = "color: black">DISNEY+  E PIXAR CONTRA CONCORRÊNCIAS!</h3>
  
  <img class="img-fluid" src="img/spark.png" alt="loading..."/ >
 
  <br><br>
  <p style = "color: black">O lançamento da plataforma Disney+ promete agitar a concorrência com os demais serviços de streaming, como a Netflix, por exemplo. Dotada de um catálogo enorme, com uma ampla opção para as crianças pequenas e as crescidas também. Inúmeras novidades estão sendo divulgadas, como o lançamento de produções originais, feitas especialmente para o catálogo da plataforma. Um dos destaques é a presença das diversas animações da Pixar, sejam longas ou curtas. E a última novidade é o lançamento do “SparkShorts”, um novo projeto da Pixar que reúne seis curtas de animação que prometem revelar jovens talentos. As animações podem ser vistas a partir do próximo dia 12 de novembro, junto com o lançamento do streaming. “Float”, “Purk”, Kitbull” e “Smash and Grab” serão os primeiros a ficarem disponíveis, isto é, no dia 12 mesmo. Já “Wind” chega no catálogo do dia 13 de dezembro e “Loop” ficará para o próximo ano, no dia 10 de janeiro. E para se ter uma ideia do que reserva as produções, a Disney liberou um trailer bem fofo do novo projeto da Pixar..</p>

  <br><br><br>

  <h3 class="display-4" style = "color: black">VEGANISMO CONQUISTA O MUNDO DISNEY</h3>
  <img class="img-fluid" src="img/vegano1.jpg" alt="loading..."/>
  <br><br>
  <p style = "color: black">Os parques temáticos Disney estão cada vez mais atentos às necessidades de seus fãs, como os adeptos do veganismo: nesta terça-feira (24), foi revelado que todos os restaurantes do Walt Disney World Resort e Disneyland Resort servirão receitas à base de plantas. Os estabelecimentos também disponibilizarão menus com um ícone que indicará quais pratos são preparados apenas com legumes e vegetais. São centenas de opções doces e salgadas, com novas criações chegando aos endereços fast-food e de serviço completo. “Essas receitas divertidas e saborosas são feitas com ingredientes como vegetais, frutas, grãos, nozes, sementes e legumes — e são preparadas sem carne animal, laticínios, ovos ou mel. De comidas tradicionais a novos pratos empolgantes para os aventureiros, todos encontrarão algo para surpreender suas papilas”, garante o texto revelando a novidade. Também será possível encontrar as receitas veganas nos hotéis do complexo, totalizando mais de 400 novas opções. Veja abaixo algumas delas:</p>
  <br>
  <img class="img-fluid" src="img/vegano2.jpg" alt="loading..."/>



  </div>
    
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
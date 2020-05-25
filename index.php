<?php
	include_once 'models/config.php';
	//include_once 'models/class/User.class.php';
	include_once 'controllers/validate.php';

	#Validando a sessão
	/*session_start();

	if (isset($_SESSION[sha1("user_data")])) {
		$user = $_SESSION[sha1("user_data")];
		header("location: ".$user->profile_page);
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Doggão</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" id="bootstrap-css">-->
	<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
</head>
<body>
	<div id="interface">
		<header id="cabecalho">
			<a href="#">
				<img src="_img/logo.png" id="logo">
				<h1>Doggão & Gattão PetShop</h1>
				<h2>Tudo para seu pet</h2>
			</a>

			<figure class="figcabecalho">
				<img src="_img/dogscats.jpg">
			</figure>
		</header>

		<nav id="menu">
			<ul>
				<h1>Escolha seu pet</h1>
				<li>
					<button class="btn_a">
						<a href="cachorro.php"><i class="fas fa-dog"></i> Cachorro </a>
					</button>
				</li>
				<li>
					<button class="btn_a">
						<a href="gato.php"><i class="fas fa-cat"></i> Gato </a>
					</button>
				</li>
			</ul>
		</nav>

		<nav id="menu-cadastro">
			<button class="btn_a">
				<a href="login.php"><i class="fas fa-sign-in-alt"></i> Login </a>
			</button>
			<button class="btn_a">
				<a href="contato.html"><i class="fas fa-envelope"></i> Contato </a>
			</button>
		</nav>

		<ul id="promocao">
			<h2 class="topic_title">Produtos em promoção</h2>
			<?php $text = "promocao0"; for ($i=1; $i<6; $i++) { ?>
				<li id="<?=$text.$i?>"></li>
			<?php } ?>
		</ul>
		<br>

		<div id="conteudo">
			<h2 class="topic_title">Curiosidades</h2>
			<div id="conteudo_left">
				<ul>
					<li class="imagem imagem01"></li>
					<li id="texto_curiosidade">
						<h3> Samoieda - O cão que ri </h3>
						<h4> Com pelagem totalmente branca e aparência fofa, o samoieda foi selecionado para caçar renas, mas isso foi deixado de lado quando eles conquistaram famílias mundo afora. </h4>
					</li>
					<br>
					<li class="imagem imagem02"></li>
					<li id="texto_curiosidade">
						<h3> Poodle - Uma raça muito doce </h3>
						<h4> Considerado um dos cães mais populares do mundo, o poodle pode ser encontrado em diferentes variações, indo do toy ao gigante, cada qual com suas características.
						</h4>
					</li>
				</ul>
			</div>

			<div id="conteudo_right">
				<ul>
					<li class="imagem imagem03"></li>
					<li id="texto_curiosidade">
						<h3> Dálmata - O cachorro famoso </h3>
						<h4> Com suas pintas super carcterísticas, o dálmata ganhou popularidade com o filme "101 Dálmatas", mas engana-se quem acha que eles não são ótimos cães de guarda. 
						</h4>
					</li>
					<br>
					<li class="imagem imagem04"></li>
					<li id="texto_curiosidade">
						<h3> Yorkshire - Pequenos e amáveis </h3>
						<h4> Do mundo da caça à vida dentro dos lares, como cão de companhia, o yorkshire terrier é um cachorro super companheiro, que não gosta de passar muito tempo sozinho. </h4>
					</li>
				</ul>
			</div>			
		</div>
		
		<footer id="rodape">
			<!--<div class="paginas">
				<ul>
					<h4>Cachorro</h4>
					<li><a href="cachorro_racoes.php">Rações</a></li>
					<li><a href="cachorro_higiene.php">Higiene</a></li>
					<li><a href="cachorro_remedios.php">Remedios</a></li>
					<li><a href="cachorro_acessorios.php">Acessórios</a></li>
				</ul>
				<ul>
					<h4>Gato</h4>
					<li><a href="gato_racoes.php">Rações</a></li>
					<li><a href="gato_higiene.php">Higiene</a></li>
					<li><a href="gato_remedios.php">Remedios</a></li>
					<li><a href="gato_acessorios.php">Acessórios</a></li>
				</ul>
			</div>-->

			<ul id="redes-sociais">
				<h2 class="topic_title">Siga nossas redes sociais</h2>
				<li><a href= "http://facebook.com" target="_blank"><img src="_img/logo_face.png"></a></li>
				<li><a href= "http://instagram.com" target="_blank"><img src="_img/logo_insta.png"></a></li>
				<li><a href= "http://youtube.com" target="_blank"><img src="_img/logo_yt.png"></a></li>
			</ul>
			<p>Copyright &copy; 2018 - by <a href="https://github.com/markryk/" target="_blank"> Mark Ryk </a></p>
		</footer>
	</div>
	<script src="https://kit.fontawesome.com/0628f7d613.js"></script>
</body>
</html>

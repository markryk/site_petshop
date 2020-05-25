<?php
	include_once 'controllers/validate_products.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doggão</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<link rel="stylesheet" type="text/css" href="_css/estilo_cachorro_gato.css">
	<meta charset="utf-8">
</head>
<body>
	<div id="interface">
		<header id="cabecalho">
			<a href="index.php">
				<img src="_img/logo.png" id="logo">
				<h1>Doggão & Gattão PetShop</h1>
				<h2>Tudo para seu pet</h2>
			</a>

			<figure class="figcabecalho">
				<img src="_img/cachorros.jpg">
			</figure>
		</header>

		<nav id="menu">
			<ul>
				<h1>Produtos para o seu cachorro</h1>
				<li>
					<button class="btn_a">
						<a href="gato.php"><i class="fas fa-cat"></i> Confira também ofertas para seu gato </a>
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

		<?php show_products(); ?>
		<br>

		<ul id="produtos-cachorro">
			<li style="text-decoration: none;" class="produto" id="produto01"><a href="?cat=racao&an=dog"> Rações </a></li>
			<li style="text-decoration: none;" class="produto" id="produto02"><a href="?cat=higiene&an=dog"> Higiene </a></li>
			<li style="text-decoration: none;" class="produto" id="produto03"><a href="?cat=remedio&an=dog"> Remédios </a></li>
			<li style="text-decoration: none;" class="produto" id="produto04"><a href="?cat=acessorio&an=dog"> Acessórios </a></li>
		</ul>
		
		<div id="conteudo_left"></div>

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

<?php
	ini_set('display_errors', 1);
	# Incluindo os arquivos necessários
	include_once dirname(__DIR__) ."/trabalhofinal_pi_petshop_marcos/models/config.php";
	include_once $project_path."/models/class/Connect.class.php";
	include_once $project_path."/models/class/Manager.class.php";
	//include_once $project_path."/models/class/User.class.php";
	include_once $project_path."/phpmailer/Email.class.php";

	$manager = new Manager();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Doggão</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<link rel="stylesheet" type="text/css" href="_css/estilo_php.css">
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
				<img src="_img/dogscats.jpg">
			</figure>
		</header>

		<nav id="menu">
			<ul>
				<h1>Obrigado pela preferência 🙂</h1>
			</ul>			
		</nav>

		<div id="php">
			<?php
				try {
					$manager = new Manager();
					$manager->insert_common("tb_contacts", $_POST, NULL);

					//Instancia objeto email da classe Email
					$email = new Email();

					$body = "<b> Seja Bem Vindo(a) ".$_POST['contact_name']."! </b><br>
					Com o seu cadastro você receberá notícias e promoções sobre nossa loja. Aproveite 😉 (msg enviada via localhost)";
					$alt_body = "Você se cadastrou na Doggão e Gattão Petshop 🙂 [Mensagem mais simples]";
				
					$email->send_email($_POST['contact_email'], $body, $alt_body);

					echo "Cadastro efetuado com sucesso, em breve entraremos em contato. 😉";
				}
				catch (PDOException $e){
					echo 'ERROR: '.$e->getMessage();
				}
			?>

			<br><br>
			<div id="cadastro_efetuado">
				<button class="btn_a">
					<a href="index.php"><i class="fas fa-home"></i> Ir para Home </a>
				</button>
			</div>
		</div>

		<div id="conteudo_left"></div>

		<footer id="rodape">
			<ul id="redes-sociais">
				<h2>Siga nossas redes sociais</h2>
				<li><a href= "http://facebook.com" target="_blank"><img src="_img/logo_face.png"></a></li>
				<li><a href= "http://instagram.com" target="_blank"><img src="_img/logo_insta.png"></a></li>
				<li><a href= "http://youtube.com" target="_blank"><img src="_img/logo_yt.png"></a></li>
			</ul>
			<p>Copyright &copy; 2018 - by Marcos Henrique</p>
		</footer>
	</div>
	<script src="https://kit.fontawesome.com/0628f7d613.js"></script>
</body>
</html>
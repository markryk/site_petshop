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
			<img src="_img/logo.png" id="logo">
			<h1>Doggão & Gattão PetShop</h1>
			<h2>Tudo para seu pet</h2>
			<figure class="figcabecalho">
				<img src="_img/dogscats.jpg">
			</figure>
		</header>

		<nav id="menu">
			<ul>
				<h1>Obrigado pela preferência ☻</h1>				
			</ul>			
		</nav>

		<div id="php">
			<?php
			try {
				$conn = new PDO ('mysql:host=localhost;dbname=petshop','root','');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$stmt = $conn->prepare('INSERT INTO contato (nome, celular, email) VALUES (:nome, :celular, :email)');
				$nome = $_POST['nome'];
				$celular = $_POST['celular'];
				$email = $_POST['email'];
				$stmt->bindValue(':nome', $nome);
				$stmt->bindValue(':celular', $celular);
				$stmt->bindValue(':email', $email);
				$stmt->execute();
				echo "Cadastro efetuado com sucesso, em breve entraremos em contato.";
			}
			catch (PDOException $e){
				echo 'ERROR: '.$e->getMessage();
			}
			?>

			<br><br>		
			<a href="index.html" id="mensagem">Voltar para a página inicial</a>	
		</div>

		<div id="conteudo_left">
			
		</div>

		<footer id="rodape">
			<div class="paginas">
				<ul>
					<h4>Cachorro</h4>
					<li><a href="cachorro_racoes.html">Rações</a></li>
					<li><a href="cachorro_higiene.html">Higiene</a></li>
					<li><a href="cachorro_remedios.html">Remedios</a></li>
					<li><a href="cachorro_acessorios.html">Acessórios</a></li>
				</ul>
				<ul>
					<h4>Gato</h4>
					<li><a href="gato_racoes.html">Rações</a></li>
					<li><a href="gato_higiene.html">Higiene</a></li>
					<li><a href="gato_remedios.html">Remedios</a></li>
					<li><a href="gato_acessorios.html">Acessórios</a></li>
				</ul>
			</div>

			<ul id="redes-sociais">
				<h2>Siga nossas redes sociais</h2>
				<li><a href= "http://facebook.com" target="_blank"><img src="_img/logo_face.png"></a></li>
				<li><a href= "http://instagram.com" target="_blank"><img src="_img/logo_insta.png"></a></li>
				<li><a href= "http://youtube.com" target="_blank"><img src="_img/logo_yt.png"></a></li>
			</ul>
			<br><br>
			<p>Copyright &copy; 2018 - by Marcos Henrique <br></p>
		</footer>
	</div>	
</body>
</html>
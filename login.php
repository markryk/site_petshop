<?php
	include_once 'controllers/validate.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doggão & Gattão Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<link rel="stylesheet" type="text/css" href="_css/style.css">
	<style type="text/css">
		header {
			position: relative;
			/*left: 500px;*/
			top: 10px;
		}
	</style>
</head>
<body>
	<!--<div id="interface">-->
		<header id="cabecalho">
			<a href="index.php">
				<img src="_img/logo.png" id="logo">
				<h1>Doggão & Gattão PetShop</h1>
				<h2>Tudo para seu pet</h2>
			</a>
		</header>

		<div class="container h-100">
			<div class="d-flex justify-content-center h-100">
				<div class="user_card">
					<div class="d-flex justify-content-center">
						<div class="brand_logo_container">
							<img src="_img/logo.png" class="brand_logo" alt="Logo">
						</div>
					</div>
					<div class="d-flex justify-content-center form_container">
						<form action="validar_login.php" method="POST">
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="" class="form-control input_user" value="" placeholder="usuário">
							</div>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="" class="form-control input_pass" value="" placeholder="senha">
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlInline">
									<label class="custom-control-label" for="customControlInline">Lembrar-me</label>
								</div>
							</div>

							<div class="d-flex justify-content-center mt-3 login_container">
								<button type="submit" name="button" class="btn login_btn"><i class="fas fa-sign-in-alt"></i> ENTRAR </button>
							</div>
						</form>
					</div>
					
					<div class="mt-4">
						<div class="d-flex justify-content-center links">
							Não tem uma conta? <a href="?op=create_account" class="ml-2">Criar conta</a>
						</div>
						<div class="d-flex justify-content-center links">
							<a href="#">Esqueceu a senha?</a>
						</div>
					</div>
				</div>
			</div>
			<?php create_account(); ?>
		</div>
	<!--</div>-->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
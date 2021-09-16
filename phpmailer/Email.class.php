<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	# Descobrir como fazer autoload via Composer sem usar o diretório do computador
	//require_once 'C:\xampp\composer\vendor\autoload.php';
	include_once $project_path."/phpmailer/composer/vendor/autoload.php";
	
	class Email {
		function send_email ($email_of_client, $text_body, $text_alt_body) {

			# Caso seja instalado o PHPMailer sem o composer, descomentar o código abaixo
			//include_once dirname(__DIR__)."/models/config.php";
			/*include_once $GLOBALS['project_path']."/phpmailer/PHPMailer.class.php";
			include_once $GLOBALS['project_path']."/phpmailer/SMTP.class.php";
			include_once $GLOBALS['project_path']."/phpmailer/Exception.class.php";*/
			//include_once $GLOBALS['project_path']."/phpmailer/Oauth.class.php";			

			# Inicia a classe PHPMailer
			//$mail = new PHPMailer();
			$mail = new PHPMailer(true); //Colocar true, habilita as exceções; recomendável usar try/catch
			try {
				$mail->CharSet = 'UTF-8';
				$mail->setFrom('marcos.devmarcos@gmail.com', 'Doggão & Gattão Petshop');
				$mail->addAddress($email_of_client);
				$mail->Subject = "Petshop Doggão & Gattão"; # Assunto da mensagem
				//$mail->Body = "Este é o corpo da mensagem de teste, em <b>HTML</b>! :)";
				$mail->Body = $text_body;
				$mail->AltBody = $text_alt_body;

				#Parâmetros SMTP
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = 'tls';
				$mail->Username = 'marcos.devmarcos@gmail.com';
				$mail->Password = ''; //segredo 🙊
				$mail->Port = 587;
				$mail->Send();
				//echo "E-mail enviado com sucesso!";
			} catch (Exception $e) {
				echo $e->errorMessage();
			} catch (\Exception $e) {
				echo $e->getMessage();
			}
		}
	}
?>

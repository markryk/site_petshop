<?php
	#Mostrar os erros
	//ini_set("display_errors", 1);
	error_reporting(E_ALL | E_WARNING | E_PARSE);

	#Configuração de Rotas
	$project_name = "/trabalhofinal_pi_petshop_marcos/";

	#Rota 1 - URL geral do projeto
	$project_index = "http://".$_SERVER['SERVER_NAME'].$project_name;

	#Rota 2 - Caminho geral do projeto
	$project_path = $_SERVER['DOCUMENT_ROOT'].$project_name;

	#Globalizando
	$GLOBALS['project_index'] = $project_index;
	$GLOBALS['project_path'] = $project_path;
?>
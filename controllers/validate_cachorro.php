<?php
	include_once 'models/config.php';

	function show_specific_product() {
		if (!isset($_GET['op']) || !isset($_GET['prod'])) {
			return false;
		}

		switch ($_GET['prod']) {
			case 'racao_cachorro':
				switch ($_GET['op']) {
					case '1':
						include_once $GLOBALS['project_path']."views/pages_cachorro/racao_cachorro_1.html";
					break;

					case '2':
						include_once $GLOBALS['project_path']."views/pages_cachorro/racao_cachorro_2.html";
					break;

					case '3':
						include_once $GLOBALS['project_path']."views/pages_cachorro/racao_cachorro_3.html";
					break;

					case '4':
						include_once $GLOBALS['project_path']."views/pages_cachorro/racao_cachorro_4.html";
					break;

					case '5':
						include_once $GLOBALS['project_path']."views/pages_cachorro/racao_cachorro_5.html";
					break;
				}
			break;

			case 'higiene_cachorro':
				switch ($_GET['op']) {
					case '1':
						include_once $GLOBALS['project_path']."views/pages_cachorro/higiene_cachorro_1.html";
					break;

					case '2':
						include_once $GLOBALS['project_path']."views/pages_cachorro/higiene_cachorro_2.html";
					break;

					case '3':
						include_once $GLOBALS['project_path']."views/pages_cachorro/higiene_cachorro_3.html";
					break;

					case '4':
						include_once $GLOBALS['project_path']."views/pages_cachorro/higiene_cachorro_4.html";
					break;

					case '5':
						include_once $GLOBALS['project_path']."views/pages_cachorro/higiene_cachorro_5.html";
					break;
				}
			break;

			case 'remedio_cachorro':
				switch ($_GET['op']) {
					case '1':
						include_once $GLOBALS['project_path']."views/pages_cachorro/remedio_cachorro_1.html";
					break;

					case '2':
						include_once $GLOBALS['project_path']."views/pages_cachorro/remedio_cachorro_2.html";
					break;

					case '3':
						include_once $GLOBALS['project_path']."views/pages_cachorro/remedio_cachorro_3.html";
					break;

					case '4':
						include_once $GLOBALS['project_path']."views/pages_cachorro/remedio_cachorro_4.html";
					break;

					case '5':
						include_once $GLOBALS['project_path']."views/pages_cachorro/remedio_cachorro_5.html";
					break;
				}
			break;
			
			case 'acessorio_cachorro':
				switch ($_GET['op']) {
					case '1':
						include_once $GLOBALS['project_path']."views/pages_cachorro/acessorio_cachorro_1.html";
					break;

					case '2':
						include_once $GLOBALS['project_path']."views/pages_cachorro/acessorio_cachorro_2.html";
					break;

					case '3':
						include_once $GLOBALS['project_path']."views/pages_cachorro/acessorio_cachorro_3.html";
					break;

					case '4':
						include_once $GLOBALS['project_path']."views/pages_cachorro/acessorio_cachorro_4.html";
					break;

					case '5':
						include_once $GLOBALS['project_path']."views/pages_cachorro/acessorio_cachorro_5.html";
					break;
				}
			break;
		}
	}
?>
<?php
	include_once 'models/config.php';

	function show_specific_product() {
		if (!isset($_GET['op'])) {
			return false;
		}

		switch ($_GET['prod']) {
			case 'racao_gato':
				switch ($_GET['op']) {
					case '1':
						include_once $GLOBALS['project_path']."views/pages_gato/racao_gato_1.html";
					break;

					case '2':
						include_once $GLOBALS['project_path']."views/pages_gato/racao_gato_2.html";
					break;

					case '3':
						include_once $GLOBALS['project_path']."views/pages_gato/racao_gato_3.html";
					break;

					case '4':
						include_once $GLOBALS['project_path']."views/pages_gato/racao_gato_4.html";
					break;

					case '5':
						include_once $GLOBALS['project_path']."views/pages_gato/racao_gato_5.html";
					break;
				}
			break;

			case 'higiene_gato':
				switch ($_GET['op']) {
					case '1':
						include_once $GLOBALS['project_path']."views/pages_gato/higiene_gato_1.html";
					break;

					case '2':
						include_once $GLOBALS['project_path']."views/pages_gato/higiene_gato_2.html";
					break;

					case '3':
						include_once $GLOBALS['project_path']."views/pages_gato/higiene_gato_3.html";
					break;

					case '4':
						include_once $GLOBALS['project_path']."views/pages_gato/higiene_gato_4.html";
					break;

					case '5':
						include_once $GLOBALS['project_path']."views/pages_gato/higiene_gato_5.html";
					break;
				}
			break;

			case 'remedio_gato':
				switch ($_GET['op']) {
					case '1':
						include_once $GLOBALS['project_path']."views/pages_gato/remedio_gato_1.html";
					break;

					case '2':
						include_once $GLOBALS['project_path']."views/pages_gato/remedio_gato_2.html";
					break;

					case '3':
						include_once $GLOBALS['project_path']."views/pages_gato/remedio_gato_3.html";
					break;

					case '4':
						include_once $GLOBALS['project_path']."views/pages_gato/remedio_gato_4.html";
					break;

					case '5':
						include_once $GLOBALS['project_path']."views/pages_gato/remedio_gato_5.html";
					break;
				}
			break;
			
			case 'acessorio_gato':
				switch ($_GET['op']) {
					case '1':
						include_once $GLOBALS['project_path']."views/pages_gato/acessorio_gato_1.html";
					break;

					case '2':
						include_once $GLOBALS['project_path']."views/pages_gato/acessorio_gato_2.html";
					break;

					case '3':
						include_once $GLOBALS['project_path']."views/pages_gato/acessorio_gato_3.html";
					break;

					case '4':
						include_once $GLOBALS['project_path']."views/pages_gato/acessorio_gato_4.html";
					break;

					case '5':
						include_once $GLOBALS['project_path']."views/pages_gato/acessorio_gato_5.html";
					break;
				}
			break;
		}
	}
?>
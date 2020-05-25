<?php
	include_once 'models/config.php';

	function show_products() {
		if (!isset($_GET['cat']) || !isset($_GET['an'])) {
			return false;
		}

		switch ($_GET['cat']) {
			case 'racao':
				switch ($_GET['an']) {
					case 'dog':
						include_once $GLOBALS['project_path']."views/pages_cachorro/cachorro_racoes.php";
					break;

					case 'cat':
						include_once $GLOBALS['project_path']."views/pages_gato/gato_racoes.php";
					break;
				}				
			break;

			case 'higiene':
				switch ($_GET['an']) {
					case 'dog':
						include_once $GLOBALS['project_path']."views/pages_cachorro/cachorro_higiene.php";
					break;

					case 'cat':
						include_once $GLOBALS['project_path']."views/pages_gato/gato_higiene.php";
					break;
				}				
			break;

			case 'remedio':
				switch ($_GET['an']) {
					case 'dog':
						include_once $GLOBALS['project_path']."views/pages_cachorro/cachorro_remedios.php";
					break;

					case 'cat':
						include_once $GLOBALS['project_path']."views/pages_gato/gato_remedios.php";
					break;
				}				
			break;

			case 'acessorio':
				switch ($_GET['an']) {
					case 'dog':
						include_once $GLOBALS['project_path']."views/pages_cachorro/cachorro_acessorios.php";
					break;

					case 'cat':
						include_once $GLOBALS['project_path']."views/pages_gato/gato_acessorios.php";
					break;
				}				
			break;
		}
	}
?>
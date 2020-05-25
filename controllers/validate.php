<?php
	include_once 'models/config.php';

	function create_account() {
		if (!isset($_GET['op'])) {
			return false;
		}

		switch ($_GET['op']) {
			case 'create_account':
				include_once $GLOBALS['project_path']."views/forms/create_account.html";
			break;
		}
	}
?>
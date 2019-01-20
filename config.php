<?php

spl_autoload_register(function($nameclass) {

	$filename = "Class".DIRECTORY_SEPARATOR.$nameclass . ".php";

	if (file_exists($filename)) {

		require_once($filename);

	}

});


?>
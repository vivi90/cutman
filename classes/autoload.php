<?php
    function __autoload($class) {
    	$class = strtolower($class);
		if (file_exists(BASEPATH.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$class.'.php')) {
			include BASEPATH.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$class.'.php';
		}
    }
?>
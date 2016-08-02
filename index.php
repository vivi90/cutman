<?php
	// Get BASEPATH
	define('BASEPATH', realpath(dirname(__FILE__)));
	
	// Include configuration
    include BASEPATH.DIRECTORY_SEPARATOR.'config.inc.php';
	
	// Set error reporting
	if (CFG_DEBUG_MODE) {
		error_reporting(E_ALL);
	} else {
		error_reporting(0);
	}
	
	// Include autoload for classes
	include BASEPATH.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.'autoload.php';
	
	// Include language file
	include BASEPATH.DIRECTORY_SEPARATOR.'locale'.DIRECTORY_SEPARATOR.CFG_LANG.'.inc.php';
	
	// Create instance of Request
	$request = new Request($_GET, $_POST);
	
	// Create instance of Model
	$model = new Model();
	
	// Create instance of Controller
	$controller = new Controller($model);
	
	// Create intance of View
	$view = new View($model);
	
	// Final browser content
	$view->display();
?>
<?php

error_reporting(E_ALL);

if (version_compare(phpversion(), '5.1.0', '<')) {
	die ('PHP5.1 Only');
}

define('DIRSEP', DIRECTORY_SEPARATOR);

$sitePath = realpath(dirname(__FILE__) . DIRSEP . '..' . DIRSEP).DIRSEP;

define('ROOT', $sitePath);

//spl_autoload_extensions(".php"); // To make sure spl only includes php-files while autoloading.
//spl_autoload_register();

function __autoload($className)
{
	$filename = $className . '.php';
	
	$file = ROOT . 'classes' . DIRSEP . $filename;
	
	if (!file_exists($file)) {
		return false;
	}
	include($file);
}

$registry = new Registry;
<?php

class Router
{
	private $registry;
	private $path;
	private $args = array();
	
	function __construct(Registry $registry)
	{
		$this->registry = $registry;
	}
	
	public function setPath($path)
	{
		$path = trim($path, '/\\');
		$path .= DIRSEP;
		
		if (!is_dir($path)) {
			throw new Exception(sprintf('Invalid controller path: %s', $path));
		}
		$this->path = $path;
	}
	
	public function delegate()
	{
		$this->getController($file, $controller, $action, $args);
		
		if (!is_readable($file)) {
			die(sprintf('File %s is not readable', $file));
		}
		
		include($file);
		
		$class = $controller . 'Controller';
		
		$controller = new $class($this->registry);
		$action = $action . 'Action';
		
		if (!is_callable(array($controller, $action))) {
			die(sprintf('Action %s is not callable in %s controller', $action, get_class($controller)));
		}
		
		$controller->$action();
	}
	
	private function getController(&$file, &$controller, &$action, &$args)
	{
		$route = (empty($_GET['route'])) ? '' : $_GET['route'];
		
		if (empty($route)) {
			$route = 'index';
		}
		
		$route = trim($route, '/\\');
		
		$parts = explode('/', $route);
		
		$cmdPath = $this->path;
		
		foreach ($parts as $part) {
			$fullpath = $cmdPath . $part;
			
			if (is_dir($fullpath)) {
				$cmdPath .= $part.DIRSEP;
				array_shift($parts);
				continue;
			}
			
			if (is_file($fullpath . 'Controller.php')) {
				$controller = $part;
				array_shift($parts);
				break;
			}
		}
		
		if (empty($controller)) {
			$controller = 'Index';
		}
		
		$action = array_shift($parts);
		
		if (empty($action)) {
			$action = 'index';
		}
		
		$file = $cmdPath . $controller . 'Controller.php';
		
		$args = $parts;
	}
}
<?php

class Template
{
	private $registry;
	private $path;
	
	function __construct(Registry $registry)
	{
		$this->registry = $registry;
	}
	
	public function setPath($path)
	{
		$this->path = $path . DIRSEP;
	}
	
	function show($template, array $variables = null)
	{
		if (!empty($variables)) {
			extract($variables, EXTR_PREFIX_SAME, "wddx");
		}
		$file = $this->path . $template . '.php';
		if (is_readable($file)) {
			return (include $file);
		}
		throw new Exception(sprintf('Error rendering %s template', $template));
	}
}
<?php

Abstract class BaseController
{
	protected $registry;
	protected $template;
	
	function __construct(Registry $registry)
	{
		$this->registry = $registry;
		$this->template = $this->registry->get('template');
	}
	
	abstract function indexAction();
	
	protected function render($template, array $variables = null)
	{
		return $this->template->show($template, $variables);
	}
}
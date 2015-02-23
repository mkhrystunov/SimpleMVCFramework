<?php

class Registry implements ArrayAccess {
	private $vars = array();

	public function set($key, $var)
	{
		if (isset($this->vars[$key])) {
			throw new Exception(sprintf('Unable to set variable %s. Already set', $key));
		}
		
		$this->vars[$key] = $var;
		
		return true;
	}
	
	public function get($key)
	{
		if (isset($this->vars[$key])) {
			return $this->vars[$key];
		}
		throw new Exception(sprintf('Error getting %s register variable', $key));
	}
	
	public function remove($key)
	{
		unset($this->vars[$key]);
	}
	
	function offsetExists($offset)
	{
		return isset($this->vars[$offset]);
	}
	
	function offsetGet($offset)
	{
		return $this->get($offset);
	}
	
	function offsetSet($offset, $value)
	{
		$this->set($offset, $value);
	}
	
	function offsetUnset($offset)
	{
		$this->remove($offset);
	}
}
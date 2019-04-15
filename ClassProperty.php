<?php
/**
 * Created by PhpStorm.
 * User: tmckenzie
 * Date: 4/15/2019
 * Time: 12:42 PM
 */

//include "./ClassAttribute.php";

class ClassProperty extends ClassAttribute
{
	protected $default_value;

	protected $type;

	public function getDefaultValue()
	{
		return $this->default_value;
	}

	public function setDefaultValue($default)
	{
		$this->default_value = $default;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setType(string $type)
	{
		$this->type = $type;
	}
}

<?php
/**
 * Created by Tyler Mckenzie
 * Date: 4/15/2019
 */

namespace PHPSimpleCodeGenerator;

use PHPSimpleCodeGenerator\ClassAttribute;

/**
 * Class ClassProperty
 */
class ClassProperty extends ClassAttribute
{
	/**
	 * @var mixed default value of the property
	 */
	protected $default_value;

	/**
	 * @var string value type of the property
	 */
	protected $type;

	/**
	 * Returns the default value of the property
	 *
	 * @return mixed default value
	 */
	public function getDefaultValue()
	{
		return $this->default_value;
	}

	/**
	 * Sets property default value
	 *
	 * @param mixed $default default value to be set
	 */
	public function setDefaultValue($default)
	{
		$this->default_value = $default;
	}


	/**
	 * Returns the type of the property
	 *
	 * @return string property type
	 */
	public function getType() : string
	{
		return $this->type;
	}

	/**
	 * Sets the type of the property
	 *
	 * @param string $type property type
	 */
	public function setType(string $type)
	{
		$this->type = $type;
	}
}

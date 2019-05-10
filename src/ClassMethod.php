<?php
/**
 * Created by Tyler Mckenzie
 * Date: 4/15/2019
 */

namespace Tmckenzie\PHPSimpleCodeGenerator;

use Tmckenzie\PHPSimpleCodeGenerator\ClassAttribute;

/**
 * Class ClassMethod
 */
class ClassMethod extends ClassAttribute
{
	protected $function_contents;

	public function getFunctionContents()
	{
		return $this->function_contents;
	}

	public function setFunctionContents(string $function_contents)
	{
		$this->function_contents = $function_contents;
	}
}

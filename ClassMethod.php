<?php
/**
 * Created by PhpStorm.
 * User: tmckenzie
 * Date: 4/15/2019
 * Time: 12:42 PM
 */

//include "./ClassAttribute.php";

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

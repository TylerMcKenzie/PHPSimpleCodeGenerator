<?php
/**
 * Created by Tyler Mckenzie
 * Date: 4/15/2019
 */

//include "./ClassAttribute.php";

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

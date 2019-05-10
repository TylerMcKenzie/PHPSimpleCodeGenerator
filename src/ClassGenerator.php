<?php
/**
 * Created by Tyler Mckenzie
 * Date: 4/15/2019
 */

namespace Tmckenzie\PHPSimpleCodeGenerator;

use Tmckenzie\PHPSimpleCodeGenerator\ClassMethod;
use Tmckenzie\PHPSimpleCodeGenerator\ClassProperty;

class ClassGenerator
{
	protected $classname = "";

	protected $properties = [];

	protected $methods = [];

	protected $extends;

	protected $uses = "";

	public static function format(string $class)
	{
		$class_lines = explode("\n", $class);
		$tab = "\t";
		$indent = 0;
		foreach($class_lines as &$line) {
			if (preg_match("/\}|^\);/mx", $line)) {
				$indent--;
			}

			$tab_indent = "";

			for($i = 0; $i < $indent; $i++) {
				$tab_indent .= $tab;
			}

			$line = $tab_indent . $line;

			if (preg_match("/{|\($/mx", $line)) {
				$indent++;
			}
		}

		$formatted_class = implode("\n", $class_lines);

		return $formatted_class;
	}

	public function __construct() {}

	public function addProperty(ClassProperty $property)
	{
		$this->properties[] = $property;
	}

	public function addMethod(ClassMethod $method)
	{
		$this->methods[] = $method;
	}

	public function addUses(string $uses)
	{
		$this->uses[] = $uses;
	}

	public function generateClass()
	{
		$class =
			"<?php\n\n" .
			"{$this->getUses()}" .
			"class {$this->classname} " . (!empty($this->getExtends()) ? "extends " . $this->getExtends() . " " : "") . "{\n";

		foreach ($this->properties as $property) {
			if ($default_value = $property->getDefaultValue()) {
				$default_string = " = {$default_value};";
			} else {
				$default_string = ";";
			}

			if (!empty($property->getDoc())) {
				$class .= "{$property->getDoc()}\n";
			}

			$class .= "{$property->getVisibility()} \${$property->getName()}{$default_string}\n\n";
		}

		foreach ($this->methods as $method) {
			$class .= "{$method->getDoc()}\n{$method->getVisibility()} function {$method->getName()}() \n{\n{$method->getFunctionContents()}\n}\n\n";
		}

		$class .= "}\n\n";

		return $class;
	}

	public function setClassname(string $classname)
	{
		$this->classname = $classname;
	}

	public function getExtends()
	{
		return $this->extends;
	}

	public function setExtends(string $extends_class)
	{
		$this->extends = $extends_class;
	}

	public function getProperties()
	{
		return $this->properties;
	}

	public function getMethods()
	{
		return $this->methods;
	}

	public function getUses()
	{
		$uses = "";
		foreach ($this->uses as $used) {
			$uses .= "use {$used};\n";
		}

		return $uses;
	}
}

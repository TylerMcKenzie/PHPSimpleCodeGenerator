<?php
/**
 * Created by Tyler Mckenzie
 * Date: 4/15/2019
 */

namespace Tmckenzie\PHPSimpleCodeGenerator;

/**
 * Class ClassAttribute
 */
class ClassAttribute
{
	/**
	 * @var string Value to be used as the doc block
	 */
	protected $doc;

	/**
	 * @var string Name of the attribute
	 */
	protected $name;

	/**
	 * @var string Visibility of the attribute
	 */
	protected $visibility;

	/**
	 * Returns attribute doc
	 *
	 * @return string doc
	 */
	public function getDoc() : string
	{
		return $this->doc;
	}

	/**
	 * Sets the attribute doc
	 *
	 * @param string $doc doc block for the attribute
	 */
	public function setDoc(string $doc)
	{
		$this->doc = $doc;
	}

	/**
	 * Returns attribute visibility
	 *
	 * @return string attribute visibility
	 */
	public function getVisibility() : string
	{
		return $this->visibility;
	}

	/**
	 * Sets the attribute visibility
	 *
	 * @param string $visibility visibility of attribute
	 */
	public function setVisibility(string $visibility)
	{
		$this->visibility = $visibility;
	}

	/**
	 * Returns the name of the attribute
	 *
	 * @return string attribute name
	 */
	public function getName() : string
	{
		return $this->name;
	}

	/**
	 * Sets the attribute name
	 *
	 * @param string $name name of the attribute
	 */
	public function setName(string $name)
	{
		$this->name = $name;
	}
}

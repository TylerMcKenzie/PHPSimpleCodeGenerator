<?php
/**
 * Created by Tyler Mckenzie
 * Date: 4/15/2019
 */

class ClassAttribute
{
	protected $doc;

	protected $name;

	protected $visibility;

	public function getDoc()
	{
		return $this->doc;
	}

	public function setDoc(string $doc)
	{
		$this->doc = $doc;
	}

	public function getVisibility()
	{
		return $this->visibility;
	}

	public function setVisibility(string $visibility)
	{
		$this->visibility = $visibility;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName(string $name)
	{
		$this->name = $name;
	}
}

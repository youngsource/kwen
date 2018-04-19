<?php

namespace HTML\AttributeTraits;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait FOR_
 * Describes elements which belongs to this one.
 * Belongs to DOMElements: Label, Output.
 *
 * @package HTML\AttributeTraits
 */
trait For_
{
	use BaseTrait;

	/**
	 * Gets the for attribute.
	 *
	 * @return     string  The for attribute.
	 * @basic
	 */
	public function getFor()
	: string
	{
		return $this->getAttribute(HTMLAttributeEnum::FOR_());
	}

	/**
	 * Sets the for attribute.
	 *
	 * @param      string  $name
	 * @raw
	 * @return $this
	 */
	protected function setFor(string $name)
	{
		return $this->setAttribute(HTMLAttributeEnum::FOR_(), $name);
	}
}
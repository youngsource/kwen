<?php


/**
 * Created by tee
 */
namespace HTML\AttributeTraits;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait List_
 * Identifies a list of pre-defined options to suggest to the user.
 * Belongs to DOMElements: Input.
 *
 * @package HTML\AttributeTraits
 */
trait List_
{
	use BaseTrait;

	/**
	 * Gets the id of the datalist connected to this input.
	 *
	 * @return     string
	 * @basic
	 */
	public function getList()
	: string
	{
		return $this->getAttribute(HTMLAttributeEnum::LIST_());
	}

	/**
	 * Sets the id of the datalist connected to this input.
	 *
	 * @param      string  $id
	 * @return $this
	 */
	protected function setList(string $id)
	{
		return $this->setAttribute(HTMLAttributeEnum::LIST_(), $id);
	}
}
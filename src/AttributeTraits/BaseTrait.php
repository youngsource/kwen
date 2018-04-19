<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/21/17
 * Time: 7:19 PM
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait BaseTrait
 * the is a helper class
 * it really is
 *
 * @package HTML\AttributeTraits
 */
trait BaseTrait
{
	/**
	 * the lists of attributes of the DOMElement
	 *
	 * @var        array
	 */
	private $attributes = 	[];

	/**
	 * checks to see if the element can have the given attributes
	 *
	 * @param   array   $attributes the attributes to be checked
	 * @return 	bool    returns true if all the elements in the array are HTMLAttributeEnum and can have its own attribute as an attribute
	 */
	public function canHaveAsAttributes(array $attributes)
	: bool
	{
		/** @var string $attribute */
		foreach($attributes as $key => $attribute)
		{
			$attr = HTMLAttributeEnum::resolve($key);
			if (!($attr instanceof HTMLAttributeEnum) || !($this->canHaveAsAttribute($attr)))
				return false;
		}
		return true;
	}

	/**
	 * checks to see if the HTMLElement has attributes
	 *
	 * @return bool true if the HTMLElement has attributes
	 *              result == count(getAttributes() != 0)
	 */
	public function hasAttributes()
	: bool
	{
		return (count($this->getAttributes()) !== 0);
	}
	/**
	 * Sets the attribute.
	 *
	 * @param      HTMLAttributeEnum  $enum  The attribute
	 * @param      string  $value      The value
	 * @return      $this
	 * @raw
	 */
	public function setAttribute(HTMLAttributeEnum $enum, string $value)
	{
		if (!($this->canHaveAsAttribute($enum)))
			throw new \InvalidArgumentException("cannot have given attribute, attribute given: " . $enum->getVal());

		$this->attributes[$enum->getVal()] = $value;
		return $this;
	}

	/**
	 * checks to see if the given DOMElement can have the given attribute as its attribute
	 *
	 * @param HTMLAttributeEnum $enum
	 * @return bool true
	 * @note    this method only makes sense if it is overridden
	 * @noinspection PhpUnusedParameterInspection
	 */
	public function canHaveAsAttribute(HTMLAttributeEnum $enum)
	: bool
	{
		return true;
	}


	/**
	 * Gets the attribute.
	 *
	 * @param      HTMLAttributeEnum  $attribute  The attribute to be fetched
	 * @return     string  The attribute value if it exists, an empty string otherwise
	 */
	public function getAttribute(HTMLAttributeEnum $attribute)
	: string
	{
		return ($this->hasAttribute($attribute)) ? $this->attributes[$attribute->getVal()] : "";
	}

	/**
	 * @return array
	 * @basic
	 */
	public function &getAttributes()
	: array
	{
		return $this->attributes;
	}

	/**
	 * removes the given attribute if it exists
	 *
	 * @param HTMLAttributeEnum $attribute the attribute to be removed
	 * @post    the given attribute will be removed
	 *        | new.hasAttribute($attribute) == false
	 * @return $this
	 */
	public function removeAttribute(HTMLAttributeEnum $attribute)
	{
		if ($this->hasAttribute($attribute))
			unset($this->attributes[$attribute->getVal()]);

		return $this;
	}

	/**
	 * checks to see if the element has the given attribute
	 *
	 * @param HTMLAttributeEnum $attribute
	 * @return bool true if the attribute is set
	 */
	public function hasAttribute(HTMLAttributeEnum $attribute)
	: bool
	{
		return (isset($this->attributes[$attribute->getVal()]));
	}
}
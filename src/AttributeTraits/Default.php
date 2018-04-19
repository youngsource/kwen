<?php


/**
 * Created by tee
 */
namespace HTML\AttributeTraits;
use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Default_
 * Indicates that the track should be enabled unless the user's preferences indicate something different.
 * Belongs to DOMElements: Track.
 *
 * @package HTML\AttributeTraits
 */
trait Default_
{
	use BaseTrait;

	/**
	 * Returns whether or not the DOMElement is defaulted.
	 *
	 * @return     bool
	 * @basic
	 */
	public function isDefault()
	: bool
	{
		return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::DEFAULT_()));
	}

	/**
	 * Sets whether or not the DOMElement is defaulted.
	 *
	 * @param      string  $flag
	 * @raw
	 * @return $this
	 */
	public function setDefault(bool $flag)
	{
		return $this->setAttribute(HTMLAttributeEnum::DEFAULT_(), Helper::boolToString($flag));
	}
}
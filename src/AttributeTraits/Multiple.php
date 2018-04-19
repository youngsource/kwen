<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Multiple
 * Indicates whether multiple values can be entered in an input of the type email or file.
 * Belongs to DOMElements: Input & Select.
 *
 * @package HTML\AttributeTraits
 */
trait Multiple
{
    /**
     * sets whether or not the DOMElement accepts multiple values.
     *
     * @param bool $flag
     * @return $this
     */
    public function setMultiple(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::MULTIPLE(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement accepts multiple values.
     *
     * @return bool
     * @basic
     */
    public function isMultiple(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::MULTIPLE()));
    }
}
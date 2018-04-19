<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Readonly
 * Indicates whether the element can be edited.
 * Belongs to DOMElements: Input & Textarea.
 *
 * @package HTML\AttributeTraits
 */
trait Readonly
{
    /**
     * sets whether or not the DOMElement is read only.
     *
     * @param bool $flag
     * @return $this
     */
    public function setReadonly(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::READONLY(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is read only.
     *
     * @return bool
     * @basic
     */
    public function isReadonly(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::READONLY()));
    }
}
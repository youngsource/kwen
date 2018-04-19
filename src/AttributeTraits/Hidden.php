<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Hidden
 * Prevents rendering of given element, while keeping child elements, e.g. script elements, active.
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Hidden
{
    /**
     * sets whether or not the DOMElement is hidden.
     *
     * @param bool $flag
     * @return $this
     */
    public function setHidden(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::HIDDEN(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is hidden.
     *
     * @return bool
     * @basic
     */
    public function isHidden(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::HIDDEN()));
    }
}
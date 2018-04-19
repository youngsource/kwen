<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Wrap
 * Indicates whether the text should be wrapped.
 * Belongs to DOMElement: Wrap.
 *
 * @package HTML\AttributeTraits
 */
trait Wrap
{
    /**
     * sets whether or not the DOMElement is wrapped.
     *
     * @param bool $flag
     * @return $this
     */
    public function setWrap(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::WRAP(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is wrapped.
     *
     * @return bool
     * @basic
     */
    public function isWrap(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::WRAP()));
    }
}
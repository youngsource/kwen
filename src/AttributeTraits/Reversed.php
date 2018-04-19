<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Reversed
 * Indicates whether the list should be displayed in a descending order instead of a ascending.
 * Belongs to DOMElement: Ol.
 *
 * @package HTML\AttributeTraits
 */
trait Reversed
{
    /**
     * sets whether or not the Ol is reversed.
     *
     * @param bool $flag
     * @return $this
     */
    public function setReversed(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::REVERSED(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is reversed.
     *
     * @return bool
     * @basic
     */
    public function isReversed(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::REVERSED()));
    }
}
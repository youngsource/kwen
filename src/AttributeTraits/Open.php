<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Open
 * Indicates whether the details will be shown on page load.
 * Belongs to DOMElement: Details.
 *
 * @package HTML\AttributeTraits
 */
trait Open
{
    /**
     * Sets whether or not the Details are already opened.
     *
     * @param bool $flag
     * @return $this
     */
    public function setOpen(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::OPEN(), Helper::boolToString($flag));
    }

    /**
     * Checks to see if the Details are opened.
     *
     * @return bool
     * @basic
     */
    public function isOpen(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::OPEN()));
    }
}
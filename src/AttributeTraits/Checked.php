<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Checked
 * Indicates whether the element should be checked on page load.
 * Belongs to DOMElements: Command, Input
 *
 * @package HTML\AttributeTraits
 */
trait Checked
{
    /**
     * sets whether or not the DOMElement will be checked
     *
     * @param bool $flag
     * @return $this
     */
    public function setChecked(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::CHECKED(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is checked
     *
     * @return bool
     * @basic
     */
    public function isChecked(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::CHECKED()));
    }
}
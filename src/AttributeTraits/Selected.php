<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/25/17
 * Time: 11:05 AM
 */

namespace HTML\AttributeTraits;


use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Selected
 * Defines a value which will be selected on page load.
 * Belons to DOMElement: Option.
 *
 * @package HTML\AttributeTraits
 */
trait Selected
{
    /**
     * Sets the DOMElement to be selected.
     *
     * @param bool $flag
     * @return $this
     */
    public function setSelected(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::SELECTED(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is selected
     *
     * @return bool
     * @basic
     */
    public function isSelected(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::SELECTED()));
    }
}
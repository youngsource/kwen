<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/21/17
 * Time: 9:35 PM
 */

namespace HTML\AttributeTraits;


use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Required
 * Indicates whether this element is required to fill out or not.
 * Belongs to DOMElements: Input, Select & Textarea.
 *
 * @package HTML\AttributeTraits
 */
trait Required
{
    /**
     * sets the DOMElement required.
     *
     * @param bool $flag
     * @return $this
     */
    public function setRequired(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::REQUIRED(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is required.
     *
     * @return bool
     * @basic
     */
    public function isRequired(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::REQUIRED()));
    }
}
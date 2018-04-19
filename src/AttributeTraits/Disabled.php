<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Disabled
 * Indicates whether the user can interact with the element.
 * Belongs to DOMElements: Button, Command, Fieldset, Input, Keygen, Optgroup, Option, Select, Textarea.
 *
 * @package HTML\AttributeTraits
 */
trait Disabled
{
    /**
     * Returns whether or not the DOMElement is disabled.
     *
     * @return     bool
     * @basic
     */
    public function isDisabled(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::DISABLED()));
    }

    /**
     * Sets whether or not the DOMElement is disabled.
     *
     * @param      string $flag
     * @raw
     * @return $this
     */
    public function setDisabled(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::DISABLED(), Helper::boolToString($flag));
    }
}
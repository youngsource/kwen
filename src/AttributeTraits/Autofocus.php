<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Autofocus
 * The element should be automatically focused after the page loaded.
 * Belongs to DOMElements: Button, Input, Keygen, Select, Textarea
 *
 * @package HTML\AttributeTraits
 */
trait Autofocus
{
    /**
     * Returns whether or not the DOMElement is autofocused
     *
     * @return     string  is autofocused
     * @basic
     */
    public function isAutofocus(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::AUTOFOCUS()));
    }


    /**
     * Sets whether or not the DOMElement is autofocused.
     *
     * @param      string $flag The type
     * @raw
     * @return $this
     */
    protected function setAutofocus(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::AUTOFOCUS(), Helper::boolToString($flag));
    }
}
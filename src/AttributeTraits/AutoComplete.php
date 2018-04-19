<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/21/17
 * Time: 7:30 PM
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait AutoComplete
 * Indicates whether controls in this form can by default have their values automatically completed by the browser.
 * Belongs to DOMElements: Form, Input.
 *
 * @package App\HTML\AttributeTraits
 */
trait AutoComplete
{
    /**
     * sets whether or not the DOMElement can be autocompleted
     *
     * @param bool $flag
     * @return $this
     */
    public function setAutoComplete(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::AUTOCOMPLETE(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement can be autocompleted
     *
     * @return bool
     * @basic
     */
    public function isAutoComplete(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::AUTOCOMPLETE()));
    }
}
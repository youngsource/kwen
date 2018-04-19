<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 7:55 PM
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Translate
 * The translate global attribute is an enumerated attribute that is used to specify whether an element's attribute values and the values of its Text node children are to be translated when the page is localized, or whether to leave them unchanged. It can have the following values:
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Translate
{
    /**
     * sets whether or not the DOMElement can be translated.
     *
     * @param bool $flag
     * @return $this
     */
    public function setTranslate(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::TRANSLATE(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement can be translated.
     *
     * @return bool
     * @basic
     */
    public function isTranslate(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::TRANSLATE()));
    }
}
<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Lang
 * Defines the language used in the element.
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Lang
{
    /**
     * sets the language of the DOMElement.
     *
     * @param string $lang
     * @return $this
     */
    public function setLang(string $lang)
    {
        return $this->setAttribute(HTMLAttributeEnum::LANG(), $lang);
    }

    /**
     * returns the language of the DOMElement.
     *
     * @return  string
     * @basic
     */
    public function getLang(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::LANG());
    }
}
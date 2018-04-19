<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Language
 * Defines the script language used in the element.
 * Belongs to DOMElements: Script.
 *
 * @package HTML\AttributeTraits
 */
trait Language
{
    /**
     * Gets the language.
     *
     * @return     string
     * @basic
     */
    public function getLanguage(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::LANGUAGE());
    }

    /**
     * Sets the language.
     *
     * @param      string $lan
     * @raw
     * @return $this
     */
    protected function setLanguage(string $lan)
    {
        return $this->setAttribute(HTMLAttributeEnum::LANG(), $lan);
    }
}
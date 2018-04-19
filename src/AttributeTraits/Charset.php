<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Charset
 * Declares the character encoding of the page or script.
 * Belongs to DOMElements: Meta, Script
 *
 * @package HTML\AttributeTraits
 */
trait Charset
{
    /**
     * Gets the charset.
     *
     * @return     string  The charset.
     * @basic
     */
    public function getCharset(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::CHARSET());
    }

    /**
     * Sets the charset.
     *
     * @param      string $set The charset
     * @raw
     * @return $this
     */
    protected function setSrc(string $set)
    {
        return $this->setAttribute(HTMLAttributeEnum::CHARSET(), $set);
    }
}
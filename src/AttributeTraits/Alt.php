<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Alt
 * Alternative text in case an image can't be displayed.
 * Belongs to DOMElements: Button, Input, Keygen, Select, TextArea
 *
 * @package HTML\AttributeTraits
 */
trait Alt
{
    /**
     * Gets the alternative text.
     *
     * @return     string  The alternative text
     * @basic
     */
    public function getAlt(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::ALT());
    }

    /**
     * Sets the alternative text.
     *
     * @param      string $alt the alternative text
     * @raw
     * @return $this
     */
    protected function setAlt(string $alt)
    {
        return $this->setAttribute(HTMLAttributeEnum::ALT(), $alt);
    }
}
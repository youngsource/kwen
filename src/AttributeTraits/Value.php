<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/21/17
 * Time: 9:40 PM
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Value
 * Defines a default value which will be displayed in the element on page load.
 * Belongs to DOMElement: Button, Option, Input, Li, Meter, Progress & Param.
 *
 * @package HTML\AttributeTraits
 */
trait Value
{
    /**
     * Sets the value.
     *
     * @param      string $val The value
     * @return $this
     * @raw
     */
    public function setValue(string $val)
    {
        return $this->setAttribute(HTMLAttributeEnum::VALUE(), $val);
    }

    /**
     * Gets the value.
     *
     * @return     string  The value.
     * @basic
     */
    public function getValue(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::VALUE());
    }
}
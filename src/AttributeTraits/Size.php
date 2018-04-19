<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Size
 * Defines the width of the element (in pixels). If the element's type attribute is text or password then it's the number of characters.
 * Belongs to DOMElements: Input & Select.
 *
 * @package HTML\AttributeTraits
 */
trait Size
{
    /**
     * Gets the maximum size.
     *
     * @return     string
     * @basic
     */
    public function getSize(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::SIZE());
    }

    /**
     * Sets the maximum size.
     *
     * @param      int $max
     * @return $this
     */
    protected function setSize(int $max)
    {
        return $this->setAttribute(HTMLAttributeEnum::SIZE(), (string)$max);
    }
}
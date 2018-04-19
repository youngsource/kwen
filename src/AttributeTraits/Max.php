<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Max
 * Indicates the maximum value allowed.
 * Belongs to DOMElements: Input, Meter & Progress.
 *
 * @package HTML\AttributeTraits
 */
trait Max
{
    /**
     * Gets the type.
     *
     * @return     string  The type.
     * @basic
     */
    public function getMax(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::MAX());
    }

    /**
     * Sets the maximum value allowed.
     *
     * @param      int $bound
     * @raw
     * @return $this
     */
    protected function setMax(int $bound)
    {
        return $this->setAttribute(HTMLAttributeEnum::MAX(), (string)$bound);
    }
}
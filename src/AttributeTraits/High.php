<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait High
 * Indicates the lower bound of the upper range.
 * Belongs to DOMElements: Meter.
 *
 * @package HTML\AttributeTraits
 */
trait High
{
    /**
     * Gets the lower bound.
     *
     * @return     string
     * @basic
     */
    public function getHigh(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::HIGH());
    }

    /**
     * Sets the lower bound.
     *
     * @param      int $bound the lower bound
     * @raw
     * @return $this
     */
    protected function setHigh(int $bound)
    {
        return $this->setAttribute(HTMLAttributeEnum::HIGH(), (string)$bound);
    }
}
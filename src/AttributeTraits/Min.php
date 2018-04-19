<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Min
 * Indicates the maximum value allowed.
 * Belongs to DOMElements: Input & Meter.
 *
 * @package HTML\AttributeTraits
 */
trait Min
{
    /**
     * Gets the minimum value allowed.
     *
     * @return     string
     * @basic
     */
    public function getMin(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::MIN());
    }

    /**
     * Sets the minimum value allowed.
     *
     * @param      int $bound
     * @return $this
     */
    protected function setMin(int $bound)
    {
        return $this->setAttribute(HTMLAttributeEnum::MIN(), (string)$bound);
    }
}
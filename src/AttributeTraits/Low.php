<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Low
 * Indicates the upper bound of the lower range.
 * Belongs to DOMElements: Meter.
 *
 * @package HTML\AttributeTraits
 */
trait Low
{
    /**
     * Gets the upper bound.
     *
     * @return     string
     * @basic
     */
    public function getLow(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::LOW());
    }

    /**
     * Sets the lower bound.
     *
     * @param      string $bound
     * @raw
     * @return $this
     */
    protected function setLow(int $bound)
    {
        return $this->setAttribute(HTMLAttributeEnum::LOW(), (string)$bound);
    }
}
<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Optimum
 * Indicates the optimal numeric value.
 * Belongs to DOMElement: Meter.
 *
 * @package HTML\AttributeTraits
 */
trait Optimum
{
    /**
     * Gets the optimal value.
     *
     * @return     string  The type.
     * @basic
     */
    public function getOptimum(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::OPTIMUM());
    }

    /**
     * Sets the optimal value.
     *
     * @param      int $val
     * @raw
     * @return $this
     */
    protected function setOptimum(int $val)
    {
        return $this->setAttribute(HTMLAttributeEnum::OPTIMUM(), (string)$val);
    }
}
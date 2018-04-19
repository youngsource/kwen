<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Step
 * Works with the min and max attributes to limit the increments at which a numeric or date-time value can be set. It can be the string any or a positive floating point number. If this attribute is not set to any, the control accepts only values at multiples of the step value greater than the minimum.
 * Belongs to DOMElement: Input.
 *
 * @package HTML\AttributeTraits
 */
trait Step
{
    /**
     * Gets the steps.
     *
     * @return     string
     * @basic
     */
    public function getStep(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::STEP());
    }

    /**
     * Sets the steps.
     *
     * @param      string $steps
     * @return $this
     */
    protected function setStep(string $steps)
    {
        return $this->setAttribute(HTMLAttributeEnum::STEP(), $steps);
    }
}
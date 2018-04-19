<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Start
 * Defines the first number if other than 1.
 * Belongs to DOMElement: Ol.
 *
 * @package HTML\AttributeTraits
 */
trait Start
{
    /**
     * Gets the first number.
     *
     * @return     string
     * @basic
     */
    public function getStart(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::START());
    }

    /**
     * Sets the first number.
     *
     * @param      int $num
     * @return $this
     */
    protected function setStart(int $num)
    {
        return $this->setAttribute(HTMLAttributeEnum::START(), $num);
    }
}
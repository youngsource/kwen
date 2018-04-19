<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/21/17
 * Time: 7:18 PM
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Maxlength
 * Defines the maximum number of characters allowed in the element.
 * Belongs to DOMElements: Input, Meter & Progress.
 *
 * @package App\HTML\AttributeTraits
 */
trait Maxlength
{
    /**
     * @return string
     */
    public function getMaxlength(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::MAXLENGTH());
    }

    /**
     * @param int $maxlength
     * @return $this
     */
    public function setMaxlength(int $maxlength)
    {
        return $this->setAttribute(HTMLAttributeEnum::MAXLENGTH(), (string)$maxlength);
    }

}
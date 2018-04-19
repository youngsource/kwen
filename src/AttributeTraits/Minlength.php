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
 * Defines the minimum number of characters allowed in the element.
 * Belongs to DOMElements: Input, Meter & Progress.
 *
 * @package App\HTML\AttributeTraits
 */
trait Minlength
{
    /**
     * @return string
     */
    public function getMinlength(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::MINLENGTH());
    }

    /**
     * @param int $maxlength
     * @return $this
     */
    public function setMinlength(int $length)
    {
        return $this->setAttribute(HTMLAttributeEnum::MINLENGTH(), (string)$length);
    }

}
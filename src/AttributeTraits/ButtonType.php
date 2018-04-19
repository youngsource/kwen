<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/24/17
 * Time: 2:40 PM
 */

namespace HTML\AttributeTraits;


use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\ButtonTypeEnum;

/**
 * Trait ButtonType
 * Trait determining what type the button is
 * Belongs to DOMElements: Button
 *
 * @package HTML\AttributeTraits
 */
trait ButtonType
{
    /**
     * returns the type of the DOMElement
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::TYPE());
    }

    /**
     * Sets the type of the button
     *
     * @param ButtonTypeEnum $type
     * @return $this
     */
    public function setType(ButtonTypeEnum $type)
    {
        return $this->setAttribute(HTMLAttributeEnum::TYPE(), $type->getVal());
    }
}
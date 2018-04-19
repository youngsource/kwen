<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/21/17
 * Time: 9:44 PM
 */

namespace HTML\AttributeTraits;


use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\InputTypeEnum;

trait Type
{
    /**
     * Gets the type.
     *
     * @return     string  The type.
     * @basic
     */
    public function getType(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::TYPE());
    }

    /**
     * Sets the type.
     *
     * @param      InputTypeEnum $type The type
     * @raw
     * @return $this
     */
    protected function setType(InputTypeEnum $type)
    {
        return $this->setAttribute(HTMLAttributeEnum::TYPE(), $type->getVal());
    }
}
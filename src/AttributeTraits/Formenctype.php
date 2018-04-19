<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:10 PM
 */

namespace HTML\AttributeTraits;


use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\EncTypeEnum;

trait Formenctype
{
    /**
     * Gets the enctype.
     *
     * @return     string   The enctype.
     * @basic
     */
    public function getFormenctype(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::ENCTYPE());
    }

    /**
     * Sets the enctype.
     *
     * @param      EncTypeEnum $type The type
     * @raw
     * @return $this
     */
    protected function setFormenctype(EncTypeEnum $type)
    {
        return $this->setAttribute(HTMLAttributeEnum::ENCTYPE(), $type->getVal());
    }
}
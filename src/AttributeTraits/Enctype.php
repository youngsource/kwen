<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\EncTypeEnum;

/**
 * Trait Enctype
 * Defines the content type of the form date when the method is POST.
 * Belongs to DOMElements: Form.
 *
 * @package HTML\AttributeTraits
 */
trait Enctype
{
    use BaseTrait;

    /**
     * Gets the enctype.
     *
     * @return     string   The enctype.
     * @basic
     */
    public function getEnctype(): string
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
    protected function setEnctype(EncTypeEnum $type)
    {
        return $this->setAttribute(HTMLAttributeEnum::ENCTYPE(), $type->getVal());
    }
}
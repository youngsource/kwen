<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\MethodEnum;

/**
 * Trait Method
 * Defines which HTTP method to use when submitting the form. Can be GET (default) or POST.
 * Belongs to DOMElement: Form.
 *
 * @package HTML\AttributeTraits
 */
trait Method
{
    /**
     * Gets the method.
     *
     * @return     string
     */
    public function getMethod(): string
    {
        return parent::getAttribute(HTMLAttributeEnum::METHOD());
    }

    /**
     * Sets the method.
     *
     * @param      MethodEnum $method
     */
    public function setMethod(MethodEnum $method)
    {
        parent::setAttribute(HTMLAttributeEnum::METHOD(), $method->getVal());
    }
}
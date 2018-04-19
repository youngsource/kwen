<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:11 PM
 */

namespace HTML\AttributeTraits;


use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\MethodEnum;

trait Formmethod
{
    /**
     * Gets the method.
     *
     * @return     string
     */
    public function getFormmethod(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::METHOD());
    }

    /**
     * Sets the method.
     *
     * @param      MethodEnum $method
     */
    public function setFormmethod(MethodEnum $method)
    {
        $this->setAttribute(HTMLAttributeEnum::METHOD(), $method->getVal());
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:11 PM
 */

namespace HTML\AttributeTraits;


use HTML\ElementEnumerations\HTMLAttributeEnum;

trait Formtarget
{
    /**
     * Gets the target.
     *
     * @return     string
     * @basic
     */
    public function getFormtarget(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::TARGET());
    }

    /**
     * Sets the type.
     *
     * @param      string $target
     * @return $this
     */
    protected function setFormtarget(string $target)
    {
        return $this->setAttribute(HTMLAttributeEnum::TARGET(), $target);
    }
}
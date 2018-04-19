<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/24/17
 * Time: 9:16 PM
 */

namespace HTML\AttributeTraits;


use HTML\ElementEnumerations\HTMLAttributeEnum;

trait Src
{
    /**
     * Gets the type.
     *
     * @return     string  The type.
     * @basic
     */
    public function getSrc(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::SRC());
    }

    /**
     * Sets the type.
     *
     * @param      string $type The type
     * @raw
     * @return $this
     */
    protected function setSrc(string $type)
    {
        return $this->setAttribute(HTMLAttributeEnum::SRC(), $type);
    }
}
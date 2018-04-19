<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Tabindex
 * Overrides the browser's default tab order and follows the one specified instead.
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Tabindex
{
    /**
     * sets the tabindex
     *
     * @param int $val
     * @return $this
     */
    public function setTabindex(int $val)
    {
        return $this->setAttribute(HTMLAttributeEnum::TABINDEX(), (string)$val);
    }

    /**
     * returns the tabindex
     *
     * @return string
     * @basic
     */
    public function getTabindex(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::TABINDEX());
    }
}
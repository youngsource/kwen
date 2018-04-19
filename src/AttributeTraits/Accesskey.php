<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/28/17
 * Time: 8:07 PM
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Accesskey
 * Defines a keyboard shortcut to activate or add focus to the element.
 * This is a global element.
 *
 * @package HTML\AttributeTraits
 */
trait Accesskey
{
    /**
     * Sets the accesskey.
     *
     * @param string $val
     * @return $this;
     */
    public function setAccesskey(string $val)
    {
        return $this->setAttribute(HTMLAttributeEnum::ACCESSKEY(), $val);
    }

    /**
     * Gets the accesskey.
     *
     * @return string
     * @basic
     */
    public function getAccesskey(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::ACCESSKEY());
    }
}
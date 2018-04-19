<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Contextmenu
 * Defines the ID of a <menu> element which will serve as the element's context menu.
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Contextmenu
{
    /**
     * sets the context menu
     *
     * @param string $val the context menu
     * @return $this
     */
    public function setContextmenu(string $val)
    {
        return $this->setAttribute(HTMLAttributeEnum::CONTEXTMENU(), $val);
    }

    /**
     * returns the context menu
     *
     * @return string
     * @basic
     */
    public function getContextmenu(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::CONTEXTMENU());
    }
}
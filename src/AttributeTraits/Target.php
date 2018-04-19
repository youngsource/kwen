<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Target
 * Specifies where to display the linked URL. It is a name of, or keyword for, a browsing context: a tab, window, or iframe.
 * Belongs to DOMElements: A, Area, Base & Form.
 *
 * @package HTML\AttributeTraits
 */
trait Target
{
    /**
     * Gets the target.
     *
     * @return     string
     * @basic
     */
    public function getTarget(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::TARGET());
    }

    /**
     * Sets the type.
     *
     * @param      string $target
     * @return $this
     */
    protected function setTarget(string $target)
    {
        return $this->setAttribute(HTMLAttributeEnum::TARGET(), $target);
    }
}
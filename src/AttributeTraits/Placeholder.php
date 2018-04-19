<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Placeholder
 * Provides a hint to the user of what can be entered in the field.
 * Belongs to DOMElements: Input & Textarea.
 *
 * @package HTML\AttributeTraits
 */
trait Placeholder
{
    /**
     * Gets the placeholder.
     *
     * @return     string  The type.
     * @basic
     */
    public function getPlaceholder(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::PLACEHOLDER());
    }

    /**
     * Sets the placeholder.
     *
     * @param      string $placeholder
     * @raw
     * @return $this
     */
    public function setPlaceholder(string $placeholder)
    {
        return $this->setAttribute(HTMLAttributeEnum::PLACEHOLDER(), $placeholder);
    }
}
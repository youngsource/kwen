<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Content.
 * A value associated with http-equiv or name depending on the context.
 * Belongs to DOMElements: Meta.
 *
 * @package HTML\AttributeTraits
 */
trait Content
{
    /**
     * Gets the content.
     *
     * @return     string  The content.
     * @basic
     */
    public function getContent(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::CONTENT());
    }

    /**
     * Sets the type.
     *
     * @param      string $content The content.
     * @raw
     * @return $this
     */
    protected function setContent(string $content)
    {
        return $this->setAttribute(HTMLAttributeEnum::CONTENT(), $content);
    }
}
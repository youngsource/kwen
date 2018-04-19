<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Pattern
 * Defines a regular expression which the element's value will be validated against.
 * Belongs to DOMElement: Input.
 *
 * @package HTML\AttributeTraits
 */
trait Pattern
{
    /**
     * Gets the pattern.
     *
     * @return     string  The pattern.
     * @basic
     */
    public function getPattern(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::PATTERN());
    }

    /**
     * Sets the pattern.
     *
     * @param      string $pat
     * @return $this
     */
    protected function setSrc(string $pat)
    {
        return $this->setAttribute(HTMLAttributeEnum::PATTERN(), $pat);
    }
}
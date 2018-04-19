<?php


namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Accept
 * List of types the server accepts, typically a file type.
 * Belongs to DOMElement: Form, Input.
 *
 * @package HTML\AttributeTraits
 */
trait Accept
{
    /**
     * Returns the list of files the server accepts
     *
     * @return     string  The types.
     * @basic
     */
    public function getAccept(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::ACCEPT());
    }

    /**
     * Sets the list of files the server accepts
     *
     * @param      string $type The type
     * @raw
     * @return $this
     */
    protected function setAccept(string $type)
    {
        return $this->setAttribute(HTMLAttributeEnum::ACCEPT(), $type);
    }
}
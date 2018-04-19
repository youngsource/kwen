<?php

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait AcceptCharset
 * List of supported charsets.
 * Belongs to DOMElement: Form
 *
 * @package HTML\AttributeTraits
 */
trait AcceptCharset
{
    /**
     * Gets the charset.
     *
     * @return     string  The charset
     * @basic
     */
    public function getAcceptCharset(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::ACCEPT_CHARSET());
    }

    /**
     * Sets the charset.
     *
     * @param      string $charset The charset
     * @raw
     * @return $this
     */
    protected function setAcceptCharset(string $charset)
    {
        return $this->setAttribute(HTMLAttributeEnum::ACCEPT_CHARSET(), $charset);
    }
}
<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Headers
 * IDs of the Th elements which applies to this element.
 * Belongs to DOMElements: Td, Th.
 *
 * @package HTML\AttributeTraits
 */
trait Headers
{
    /**
     * Gets the headers.
     *
     * @return     string  The type.
     * @basic
     */
    public function getHeaders(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::HEADERS());
    }

    /**
     * Sets the headers.
     *
     * @param      string $headers
     * @raw
     * @return $this
     */
    protected function setHeaders(string $headers)
    {
        return $this->setAttribute(HTMLAttributeEnum::HEADERS(), $headers);
    }
}
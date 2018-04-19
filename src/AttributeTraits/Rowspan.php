<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Rowspan
 * Defines the number of rows a table cell should span over.
 * Belongs to DOMElements: Td & Th.
 *
 * @package HTML\AttributeTraits
 */
trait Rowspan
{
    /**
     * Gets the rowspan.
     *
     * @return     string  The type.
     * @basic
     */
    public function getRowspan(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::ROWSPAN());
    }

    /**
     * Sets the rowspan.
     *
     * @param      string $type The type
     * @raw
     * @return $this
     */
    protected function setRowspan(int $span)
    {
        return $this->setAttribute(HTMLAttributeEnum::ROWSPAN(), (string)$span);
    }
}
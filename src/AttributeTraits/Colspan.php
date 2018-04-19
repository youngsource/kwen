<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Colspan
 * The colspan attribute defines the number of columns a cell should span.
 * Belongs to DOMElements: TD, TH.
 *
 * @package HTML\AttributeTraits
 */
trait Colspan
{
    /**
     * Gets the colspan.
     *
     * @return     string  The colspan.
     * @basic
     */
    public function getColspan(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::COLSPAN());
    }

    /**
     * Sets the colspan.
     *
     * @param      string $type The Colspan.
     * @raw
     * @return $this
     */
    protected function setColspan(int $colspan)
    {
        return $this->setAttribute(HTMLAttributeEnum::COLSPAN(), $colspan);
    }
}
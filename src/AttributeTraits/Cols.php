<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Cols
 * Defines the number of columns in a textarea.
 * Belongs to DOMElements: Textarea.
 *
 * @package HTML\AttributeTraits
 */
trait Cols
{
    /**
     * Gets the number of columns.
     *
     * @return     string  The cols.
     * @basic
     */
    public function getCols(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::COLS());
    }

    /**
     * Sets the number of columns.
     *
     * @param      string $cols The number of columns.
     * @raw
     * @return $this
     */
    protected function setCols(int $cols)
    {
        return $this->setAttribute(HTMLAttributeEnum::COLS(), $cols);
    }
}
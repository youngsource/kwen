<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Rows
 * Defines the number of rows in a text area.
 * Belongs to DOMElement: Textarea.
 *
 * @package HTML\AttributeTraits
 */
trait Rows
{
    /**
     * Gets the number of rows.
     *
     * @return     string
     * @basic
     */
    public function getRows(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::ROWS());
    }

    /**
     * Sets the number of rows.
     *
     * @param      string $type
     * @raw
     * @return $this
     */
    protected function setRows(int $num)
    {
        return $this->setAttribute(HTMLAttributeEnum::ROWS(), (string)$num);
    }
}
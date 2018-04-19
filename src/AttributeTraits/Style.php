<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Style
 * Defines CSS styles which will override styles previously set.
 *
 * @package HTML\AttributeTraits
 */
trait Style
{
    /**
     * sets the css styling.
     *
     * @param string $style
     * @return $this
     */
    public function setStyle(string $style)
    {
        return $this->setAttribute(HTMLAttributeEnum::STYLE(), $style);
    }

    /**
     * returns the css styling.
     *
     * @return string
     * @basic
     */
    public function getStyle(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::STYLE());
    }
}
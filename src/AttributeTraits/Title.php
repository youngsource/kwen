<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**\
 * Trait Title
 * Text to be displayed in a tooltip when hovering over the element.
 * This is a global element.
 *
 * @package HTML\AttributeTraits
 */
trait Title
{
    /**
     * sets the title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title)
    {
        return $this->setAttribute(HTMLAttributeEnum::TITLE(), $title);
    }

    /**
     * returns the title
     *
     * @return string
     * @basic
     */
    public function getTitle(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::TITLE());
    }
}
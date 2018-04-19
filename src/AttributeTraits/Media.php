<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Media
 * Specifies a hint of the media for which the linked resource was designed.
 * Belongs to DOMElements: A, Area, Link, Source & Style.
 *
 * @package HTML\AttributeTraits
 */
trait Media
{
    /**
     * Gets the media hint.
     *
     * @return     string
     * @basic
     */
    public function getMedia(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::MEDIA());
    }

    /**
     * Sets the media hint.
     *
     * @param      string $hint
     * @return $this
     */
    protected function setSrc(string $hint)
    {
        return $this->setAttribute(HTMLAttributeEnum::MEDIA(), $hint);
    }
}
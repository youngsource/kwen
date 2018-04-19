<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Href
 * The URL of a linked resource.
 * Belongs to DOMElements: A, Area, Base, Link.
 *
 * @package HTML\AttributeTraits
 */
trait Href
{
    /**
     * Gets the href.
     *
     * @return     string
     * @basic
     */
    public function getHref(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::HREF());
    }

    /**
     * Sets the href.
     *
     * @param      string $href
     * @raw
     * @return $this
     */
    protected function setSrc(string $href)
    {
        return $this->setAttribute(HTMLAttributeEnum::HREF(), $href);
    }
}
<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Template
 * The partial URL (starting with '#') of an image map associated with the element.
 * Belongs to DOMElement: Img.
 *
 * @package HTML\AttributeTraits
 */
trait Usemap
{
    /**
     * Gets the usemap.
     *
     * @return     string
     * @basic
     */
    public function getUsemap(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::USEMAP());
    }

    /**
     * Sets the usemap.
     *
     * @param      string $map
     * @return $this
     */
    protected function setUsemap(string $map)
    {
        return $this->setAttribute(HTMLAttributeEnum::USEMAP(), $map);
    }
}
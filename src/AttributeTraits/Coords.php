<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Coords
 * A set of values specifying the coordinates of the hot-spot region.
 * Belongs to DOMElements: Area.
 *
 * @package HTML\AttributeTraits
 */
trait Coords
{
    /**
     * Gets the coordinates.
     *
     * @return     string  The coordinates.
     * @basic
     */
    public function getCoords(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::COORDS());
    }

    /**
     * Sets the coordinates.
     *
     * @param      string $coords The coordinates.
     * @raw
     * @return $this
     */
    protected function setCoords(string $coords)
    {
        return $this->setAttribute(HTMLAttributeEnum::COORDS(), $coords);
    }
}
<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Label
 * Specifies a user-readable title of the text track.
 * Belongs to DOMElements: Track.
 *
 * @package HTML\AttributeTraits
 */
trait Label
{
    /**
     * Gets the label of the track.
     *
     * @return     string.
     * @basic
     */
    public function getLabel(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::LABEL());
    }

    /**
     * Sets the label of the track.
     *
     * @param      string $label
     * @raw
     * @return $this
     */
    protected function setLabel(string $label)
    {
        return $this->setAttribute(HTMLAttributeEnum::LABEL(), $label);
    }
}
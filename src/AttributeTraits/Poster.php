<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Poster
 * A URL indicating a poster frame to show until the user plays or seeks.
 * Belongs to DOMElement: Video.
 *
 * @package HTML\AttributeTraits
 */
trait Poster
{
    /**
     * Gets the poster url.
     *
     * @return     string
     * @basic
     */
    public function getPoster(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::POSTER());
    }

    /**
     * Sets the poster url.
     *
     * @param      string $url
     * @raw
     * @return $this
     */
    protected function setPoster(string $url)
    {
        return $this->setAttribute(HTMLAttributeEnum::POSTER(), $url);
    }
}
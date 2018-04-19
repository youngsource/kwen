<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Srclang
 * Language of the track text data. It must be a valid BCP 47 language tag. If the kind attribute is set to subtitles, then srclang must be defined.
 * Belongs to DOMElement: Track.
 *
 * @package HTML\AttributeTraits
 */
trait Srclang
{
    /**
     * Gets the sources' language.
     *
     * @return     string
     * @basic
     */
    public function getSrclang(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::SRCLANG());
    }

    /**
     * Sets the sources' language.
     *
     * @param      string $lang
     * @raw
     * @return $this
     */
    protected function setSrc(string $lang)
    {
        return $this->setAttribute(HTMLAttributeEnum::SRCLANG(), $lang);
    }
}
<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Hreflang
 * Specifies the language of the linked resource.
 *
 *
 * @package HTML\AttributeTraits
 */
trait Hreflang
{
    /**
     * Gets the hreflang.
     *
     * @return     string  The hreflang.
     * @basic
     */
    public function getHref(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::HREFLANG());
    }

    /**
     * Sets the hreflang.
     *
     * @param      string $lang
     * @raw
     * @return $this
     */
    protected function setHreflang(string $lang)
    {
        return $this->setAttribute(HTMLAttributeEnum::HREFLANG(), $lang);
    }
}
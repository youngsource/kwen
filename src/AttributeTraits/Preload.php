<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\ElementEnumerations\PreloadEnum;

/**
 * Trait Preload
 * Indicates whether the whole resource, parts of it or nothing should be preloaded.
 * Belongs to DOMElements: Audio & Video.
 *
 * @package HTML\AttributeTraits
 */
trait Preload
{
    /**
     * Gets the preload status.
     *
     * @return     string
     * @basic
     */
    public function getPreload(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::PRELOAD());
    }

    /**
     * Sets the preload status.
     *
     * @param      string $preload
     * @return $this
     */
    protected function setPreload(PreloadEnum $preload)
    {
        return $this->setAttribute(HTMLAttributeEnum::PRELOAD(), $preload);
    }
}
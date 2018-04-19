<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Sizes
 * This attribute defines the sizes of the icons for visual media contained in the resource. It must be present only if the rel contains the icon link types value.
 * Belongs to DOMElements: Link, Img & Source.
 *
 * @package HTML\AttributeTraits
 */
trait Sizes
{
    /**
     * Gets the sizes.
     *
     * @return     string
     * @basic
     */
    public function getSizes(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::SIZES());
    }

    /**
     * Sets the sizes.
     *
     * @param      string $sizes
     * @return $this
     */
    protected function setSizes(string $sizes)
    {
        return $this->setAttribute(HTMLAttributeEnum::SIZES(), $sizes);
    }
}
<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\CrossoriginEnum;

/**
 * Trait Crossorigin
 * How the element handles cross-origin requests.
 * Belongs to DOMElements: Audio, Imgs, Link, Script, Video.
 *
 * @package HTML\AttributeTraits
 */
trait Crossorigin
{
    /**
     * Gets the crossorigin.
     *
     * @return     string  The crossorigin.
     * @basic
     */
    public function getCrossorigin(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::CROSSORIGIN());
    }

    /**
     * Sets the crossorigin.
     *
     * @param      string $origin The crossorigin.
     * @raw
     * @return $this
     */
    protected function setCrossorigin(CrossoriginEnum $origin)
    {
        return $this->setAttribute(HTMLAttributeEnum::CROSSORIGIN(), $origin->getVal());
    }
}
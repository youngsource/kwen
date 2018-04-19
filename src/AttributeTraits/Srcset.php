<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Srcset
 * A list of one or more strings separated by commas indicating a set of possible image sources for the user agent to use.
 * Belongs to DOMElement: Img.
 *
 * @package HTML\AttributeTraits
 */
trait Srcset
{
    /**
     * Gets the source set.
     *
     * @return     string
     * @basic
     */
    public function getSrcset(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::SRCSET());
    }

    /**
     * Sets the source set.
     *
     * @param      string $set
     * @return $this
     */
    protected function setSrcset(string $set)
    {
        return $this->setAttribute(HTMLAttributeEnum::SRCSET(), $set);
    }
}
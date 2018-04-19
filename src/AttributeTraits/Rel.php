<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Rel
 * Specifies the relationship of the target object to the link object.
 * Belongs to DOMElements: A, Area & Link.
 *
 * @package HTML\AttributeTraits
 */
trait Rel
{
    /**
     * Gets the relationships.
     *
     * @return     string
     * @basic
     */
    public function getRel(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::REL());
    }

    /**
     * Sets the relationships.
     *
     * @param      string $rels
     * @return $this
     */
    protected function setRel(string $rels)
    {
        return $this->setAttribute(HTMLAttributeEnum::REL(), $rels);
    }
}
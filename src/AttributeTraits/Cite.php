<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Cite
 * Contains a URI which points to the source of the quote or change.
 * Belongs to DOMElements: Blockquote, Del, Ins, Q.
 *
 * @package HTML\AttributeTraits
 */
trait Cite
{
    /**
     * Gets the cite.
     *
     * @return     string  The cite.
     * @basic
     */
    public function getCite(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::CITE());
    }

    /**
     * Sets the cite.
     *
     * @param      string $cite The cite.
     * @raw
     * @return $this
     */
    protected function setCite(string $cite)
    {
        return $this->setAttribute(HTMLAttributeEnum::CITE(), $cite);
    }
}
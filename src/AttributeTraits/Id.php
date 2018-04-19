<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Id
 * Often used with CSS to style a specific element. The value of this attribute must be unique.
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Id
{
    /**
     * Gets the id.
     *
     * @return     string  The id.
     * @basic
     */
    public function getId(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::ID());
    }

    /**
     * Sets the id.
     *
     * @param      string $id The identifier
     * @raw
     * @return $this
     */
    public function setId(string $id)
    {
        return $this->setAttribute(HTMLAttributeEnum::ID(), $id);
    }
}
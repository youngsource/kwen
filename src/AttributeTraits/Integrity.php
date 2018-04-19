<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Integrity
 * Security Feature that allows browsers to verify what they fetch.
 * Belongs to DOMElements: Link, Script.
 *
 * @package HTML\AttributeTraits
 */
trait Integrity
{
    /**
     * Gets the integrity hash.
     *
     * @return     string
     * @basic
     */
    public function getIntegrity(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::INTEGRITY());
    }

    /**
     * Sets the integrity hash.
     *
     * @param      string $hash
     * @raw
     * @return $this
     */
    protected function setIntegrity(string $hash)
    {
        return $this->setAttribute(HTMLAttributeEnum::INTEGRITY(), $hash);
    }
}
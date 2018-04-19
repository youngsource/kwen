<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Sandbox
 * If specified as an empty string, this attribute enables extra restrictions on the content that can appear in the inline frame. The value of the attribute can either be an empty string (all the restrictions are applied), or a space-separated list of tokens that lift particular restrictions.
 * Belongs to DOMElement: Iframe.
 *
 * @package HTML\AttributeTraits
 */
trait Sandbox
{
    /**
     * Gets the sandbox restrictions.
     *
     * @return     string  The type.
     * @basic
     */
    public function getSandbox(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::SANDBOX());
    }

    /**
     * Sets the sandbox restrictions.
     *
     * @param      string $restrictions
     * @return $this
     */
    protected function setSandbox(string $restrictions)
    {
        return $this->setAttribute(HTMLAttributeEnum::SANDBOX(), $restrictions);
    }
}
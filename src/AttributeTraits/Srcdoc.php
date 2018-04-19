<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Srcdoc
 * The content of the page that the embedded context is to contain. This attribute is expected to generally be used together with the sandbox attribute.
 * Belongs to DOMElement: Iframe.
 *
 * @package HTML\AttributeTraits
 */
trait Srcdoc
{
    /**
     * Gets the source doc.
     *
     * @return     string
     * @basic
     */
    public function getSrcdoc(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::SRCDOC());
    }

    /**
     * Sets the source document.
     *
     * @param      string $doc
     * @return $this
     */
    protected function setSrcdoc(string $doc)
    {
        return $this->setAttribute(HTMLAttributeEnum::SRCDOC(), $doc);
    }
}
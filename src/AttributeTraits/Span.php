<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Span
 * This attribute contains a positive integer indicating the number of consecutive columns the <col> element spans. If not present, its default value is 1.
 * Belongs to DOMElements: Col & Colgroup.
 *
 * @package HTML\AttributeTraits
 */
trait Span
{
    /**
     * Gets the span.
     *
     * @return     string
     * @basic
     */
    public function getSpan(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::SPAN());
    }

    /**
     * Sets the span.
     *
     * @param      string $span
     * @return $this
     */
    protected function setSpan(int $span)
    {
        return $this->setAttribute(HTMLAttributeEnum::SPAN(), (string)$span);
    }
}
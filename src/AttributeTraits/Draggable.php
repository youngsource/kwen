<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Draggable
 * Defines whether the element can be dragged.
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Draggable
{
    /**
     * Returns whether or not the DOMElement is draggable.
     *
     * @return     bool
     * @basic
     */
    public function isDraggable(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::DRAGGABLE()));
    }

    /**
     * Sets whether or not the DOMElement is draggable.
     *
     * @param      string $flag
     * @raw
     * @return $this
     */
    public function setDraggable(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::DRAGGABLE(), Helper::boolToString($flag));
    }
}
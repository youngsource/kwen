<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Action
 * The URI of a program that processes the information submitted via the form.
 * Belongs to DOMElement: Form
 *
 * @package HTML\AttributeTraits
 */
trait Action
{
    /**
     * Gets the action.
     *
     * @return     string  The action.
     * @basic
     */
    public function getAction(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::ACTION());
    }

    /**
     * Sets the action.
     *
     * @param      string $type The action
     * @return $this
     */
    protected function setAction(string $action)
    {
        return $this->setAttribute(HTMLAttributeEnum::ACTION(), $action);
    }
}
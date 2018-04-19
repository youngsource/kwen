<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Formaction
 * Indicates the action of the element, overriding the action defined in the Form.
 * Belongs to DOMElements: Input, Button.
 *
 * @package HTML\AttributeTraits
 */
trait Formaction
{
    /**
     * Gets the formaction.
     *
     * @return     string  The formaction.
     * @basic
     */
    public function getFormaction(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::FORMACTION());
    }

    /**
     * Sets the action.
     *
     * @param      string $action
     * @raw
     * @return $this
     */
    public function setFormaction(string $action)
    {
        return $this->setAttribute(HTMLAttributeEnum::FORMACTION(), $action);
    }
}
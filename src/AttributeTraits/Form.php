<?php

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Form
 * Indicates the form that is the owner of the element.
 * Belongs to DOMElements: Button, Fieldset, Input, Keygen, Label, Meter, Object Output, Progress, Select, Textarea.
 *
 * @package HTML\AttributeTraits
 */
trait Form
{
    /**
     * Gets the form.
     *
     * @return     string  The form.
     * @basic
     */
    public function getFor(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::FORM());
    }

    /**
     * Sets the form.
     *
     * @param      string $form
     * @raw
     * @return $this
     */
    protected function setForm(string $form)
    {
        return $this->setAttribute(HTMLAttributeEnum::FORM(), $form);
    }
}
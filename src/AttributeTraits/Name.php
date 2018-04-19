<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/24/17
 * Time: 10:59 PM
 */

namespace HTML\AttributeTraits;


use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Name
 * Name of the element. For example used by the server to identify the fields in form submits.
 * Belongs to DOMElements: Button, Form, Fieldset, Iframe, Input, Object, Output, Select, Textarea, Map, Meta & Param.
 *
 * @package HTML\AttributeTraits
 */
trait Name
{
    /**
     * Gets the name.
     *
     * @return     string  The type.
     * @basic
     */
    public function getName(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::NAME());
    }

    /**
     * Sets the name.
     *
     * @param      string $name The type
     * @raw
     * @return $this
     */
    protected function setName(string $name)
    {
        return $this->setAttribute(HTMLAttributeEnum::NAME(), $name);
    }
}
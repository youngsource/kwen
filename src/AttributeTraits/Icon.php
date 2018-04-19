<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Icon
 * Specifies a picture which represents the command.
 * Belongs to DOMElements: Command.
 *
 * @package HTML\AttributeTraits
 */
trait Icon
{
    /**
     * Gets the icon path.
     *
     * @return     string
     * @basic
     */
    public function getIcon(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::ICON());
    }

    /**
     * Sets the icon path..
     *
     * @param      string $path
     * @raw
     * @return $this
     */
    protected function setIcon(string $path)
    {
        return $this->setAttribute(HTMLAttributeEnum::ICON(), $path);
    }
}
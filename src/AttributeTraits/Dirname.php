<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Dirname
 * @package HTML\AttributeTraits
 */
trait Dirname
{
    /**
     * Gets the name of the direction.
     *
     * @return     string  The type.
     * @basic
     */
    public function getDirname(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::DIRNAME());
    }

    /**
     * Sets the name of input deciding the direction..
     *
     * @param      string $name
     * @raw
     * @return $this
     */
    protected function setDirname(string $name)
    {
        return $this->setAttribute(HTMLAttributeEnum::DIRNAME(), $name);
    }
}
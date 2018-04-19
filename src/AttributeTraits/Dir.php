<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\DirEnum;

/**
 * Trait Dir
 * Defines the text direction.
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Dir
{
    /**
     * Gets the direction.
     *
     * @return     string
     * @basic
     */
    public function getDir(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::DIR());
    }

    /**
     * Sets the direction.
     *
     * @param      string $dir
     * @raw
     * @return $this
     */
    public function setDir(DirEnum $dir)
    {
        return $this->setAttribute(HTMLAttributeEnum::DIR(), $dir->getVal());
    }
}
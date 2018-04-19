<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait DataSource
 * Specifies the URL of the resource.
 * Belongs to DOMElements: Object.
 *
 * @package HTML\AttributeTraits
 */
trait DataSource
{
    /**
     * Gets the Datasource.
     *
     * @return     string  The crossorigin.
     * @basic
     */
    public function getDataSource(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::DATA()());
    }

    /**
     * Sets the crossorigin.
     *
     * @param      string $origin The crossorigin.
     * @raw
     * @return $this
     */
    protected function setDataSource(string $src)
    {
        return $this->setAttribute(HTMLAttributeEnum::DATA()(), $src);
    }
}
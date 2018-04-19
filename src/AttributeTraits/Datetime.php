<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Datetime
 * Indicates the date and time associated with the element.
 * Belongs to DOMElements: Del, Ins, Time.
 *
 * @package HTML\AttributeTraits
 */
trait Datetime
{
    /**
     * Gets the datetime.
     *
     * @return     string  The datetime.
     * @basic
     */
    public function getDatetime(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::DATETIME());
    }

    /**
     * Sets the type.
     *
     * @param      string $type The type
     * @raw
     * @return $this
     */
    public function setDatetime(\DateTime $time)
    { //@todo lookup format
        return $this->setAttribute(HTMLAttributeEnum::SRC(), $time->format("yyyy-mm-dd"));
    }
}
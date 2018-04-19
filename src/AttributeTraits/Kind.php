<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\KindEnum;

/**
 * Trait Kind
 * Specifies the kind of text track.
 * Belongs to DOMElements: Track.
 *
 * @package HTML\AttributeTraits
 */
trait Kind
{
    /**
     * Gets the kind of text track.
     *
     * @return     string
     * @basic
     */
    public function getKind(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::KIND());
    }

    /**
     * Sets the kind of text track.
     *
     * @param      string $type The type
     * @return $this
     */
    protected function setKind(KindEnum $kind)
    {
        return $this->setAttribute(HTMLAttributeEnum::KIND(), $kind->getVal());
    }
}
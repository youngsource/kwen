<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Spellcheck
 * Is an enumerated attribute defines whether the element may be checked for spelling errors.
 * This is a global element.
 *
 * @package HTML\AttributeTraits
 */
trait Spellcheck
{
    /**
     * sets whether or not the DOMElement will be spellchecked.
     *
     * @param bool $flag
     * @return $this
     */
    public function setSpellcheck(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::SPELLCHECK(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is spellchecked.
     *
     * @return bool
     * @basic
     */
    public function isSpellcheck(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::SPELLCHECK()));
    }
}
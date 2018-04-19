<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Muted
 * Indicates whether the audio will be initially silenced on page load.
 * Belongs to DOMElements: Video.
 *
 * @package HTML\AttributeTraits
 */
trait Muted
{
    /**
     * sets whether or not the Video starts muted.
     *
     * @param bool $flag
     * @return $this
     */
    public function setMuted(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::MUTED(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the Video starts muted.
     *
     * @return bool
     * @basic
     */
    public function isMuted(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::MUTED()));
    }
}
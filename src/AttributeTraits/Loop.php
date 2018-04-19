<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Loop
 * Indicates whether the media should start playing from the start when it's finished.
 * Belongs to DOMElements: Audio, Bgsound, Marquee, Video.
 *
 * @package HTML\AttributeTraits
 */
trait Loop
{
    /**
     * sets whether or not the DOMElement is looped.
     *
     * @param bool $flag
     * @return $this
     */
    public function setLoop(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::LOOP(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is looped.
     *
     * @return bool
     * @basic
     */
    public function isLoop(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::LOOP()));
    }
}
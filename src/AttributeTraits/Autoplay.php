<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Autoplay
 * The audio or video should play as soon as possible.
 * Belongs to DOMElements: Audio, Video.
 *
 * @package HTML\AttributeTraits
 */
trait Autoplay
{
    /**
     * sets whether or not the DOMElement will be played automatically
     *
     * @param bool $flag
     * @return $this
     */
    public function setAutoplay(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::AUTOCOMPLETE(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement will be autoplayed
     *
     * @return bool
     * @basic
     */
    public function isAutoplay(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::AUTOCOMPLETE()));
    }
}
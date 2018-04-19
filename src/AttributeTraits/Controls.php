<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Controls.
 * Indicates whether the browser should show playback controls to the user.
 * Belongs to DOMElements: Audio, Video.
 *
 * @package HTML\AttributeTraits
 */
trait Controls
{
    /**
     * sets whether or not the DOMElement has controls.
     *
     * @param bool $flag
     * @return $this
     */
    public function setControls(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::CONTROLS(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement has controls.
     *
     * @return bool
     * @basic
     */
    public function isControls(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::CONTROLS()));
    }
}
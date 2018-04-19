<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:29 PM
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Capture
 * When the value of the type attribute is file, the presence of this Boolean attribute indicates that capture of media directly from the device's environment using a media capture mechanism is preferred.
 * Belongs to DOMElement: Input.
 *
 * @package HTML\AttributeTraits
 */
trait Capture
{    /**
     * sets whether or not the Input can be captured.
     *
     * @param bool $flag
     * @return $this
     */
    public function setCapture(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::CAPTURE(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the Input can be captured.
     *
     * @return bool
     * @basic
     */
    public function isCapture(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::CAPTURE()));
    }


}
<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Ismap
 * Indicates that the image is part of a server-side image map.
 * Belongs to DOMElements: Img.
 *
 * @package HTML\AttributeTraits
 */
trait Ismap
{
    /**
     * sets whether or not the DOMElement is part of a server-side image map.
     *
     * @param bool $flag
     * @return $this
     */
    public function setIsmap(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::ISMAP(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is part of a server-side image map.
     *
     * @return bool
     * @basic
     */
    public function isMap(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::ISMAP()));
    }
}
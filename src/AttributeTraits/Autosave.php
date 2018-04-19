<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Autoplay
 * Previous values should persist dropdowns of selectable values across page loads.
 * Belongs to DOMElements: Input
 *
 * @package HTML\AttributeTraits
 */
trait Autosave
{
    /**
     * sets whether or not the DOMElement will be autosaved
     *
     * @param bool $flag
     * @return $this
     */
    public function setAutosave(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::AUTOPLAY(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement is autosaved
     *
     * @return bool
     * @basic
     */
    public function isAutosaved(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::AUTOSAVE()));
    }
}
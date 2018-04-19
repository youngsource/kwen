<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Defer
 * Indicates that the script should be executed after the page has been parsed.
 * Belongs to DOMElements: Script.
 *
 * @package HTML\AttributeTraits
 */
trait Defer
{
    /**
     * Returns whether or not the DOMElement is deferred.
     *
     * @return     bool
     * @basic
     */
    public function isDefer(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::DEFER()));
    }

    /**
     * Sets whether or not the DOMElement is deferred.
     *
     * @param      string $flag
     * @raw
     * @return $this
     */
    public function setDefer(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::DEFER(), Helper::boolToString($flag));
    }
}
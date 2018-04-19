<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Novalidate
 * This attribute indicates that the form shouldn't be validated when submitted.
 * Belongs to DOMElement: Form.
 *
 * @package HTML\AttributeTraits
 */
trait Novalidate
{
    /**
     * sets whether or not the Form will be validated
     *
     * @param bool $flag
     * @return $this
     */
    public function setNovalidate(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::NOVALIDATE(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement will be validated
     *
     * @return bool
     * @basic
     */
    public function isNoValidate(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::NOVALIDATE()));
    }
}
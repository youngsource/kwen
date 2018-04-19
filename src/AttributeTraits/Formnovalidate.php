<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:11 PM
 */

namespace HTML\AttributeTraits;


use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

trait Formnovalidate
{
    /**
     * sets whether or not the Form will be validated
     *
     * @param bool $flag
     * @return $this
     */
    public function setFormnovalidate(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::NOVALIDATE(), Helper::boolToString($flag));
    }

    /**
     * checks to see if the DOMElement will be validated
     *
     * @return bool
     * @basic
     */
    public function isFormnoValidate(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::NOVALIDATE()));
    }
}
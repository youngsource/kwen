<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Contenteditable.
 * Indicates whether the element's content is editable.
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Contenteditable
{
    /**
     * sets the content editable or not
     *
     * @param bool $val
     * @return $this
     */
    public function setContenteditable(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::CONTENTEDITABLE(), Helper::boolToString($flag));
    }

    /**
     * returns whether or not the content is editable
     *
     * @return bool
     * @basic
     */
    public function isContenteditable(): bool
    {
        return ($this->getAttribute(HTMLAttributeEnum::CONTENTEDITABLE()) === "true");
    }
}
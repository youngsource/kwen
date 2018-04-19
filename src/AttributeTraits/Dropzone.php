<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Dropzone.
 * Indicates that the element accept the dropping of content on it.
 * This is a global element.
 *
 * @package HTML\AttributeTraits
 */
trait Dropzone
{
    /**
     * Returns whether or not the DOMElement is a dropzone.
     *
     * @return     bool
     * @basic
     */
    public function isDropzone(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::DROPZONE()));
    }

    /**
     * Sets whether or not the DOMElement is a dropzone.
     *
     * @param      bool $flag
     * @raw
     * @return $this
     */
    public function setDropzone(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::DROPZONE(), Helper::boolToString($flag));
    }
}
<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Download.
 * Indicates that the hyperlink is to be used for downloading a resource.
 * Belongs to DOMElements: A, Area.
 *
 * @package HTML\AttributeTraits
 */
trait Download
{
    /**
     * Returns whether or not the DOMElement is pointing to a download.
     *
     * @return     bool
     * @basic
     */
    public function isDownload(): bool
    {
        return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::DOWNLOAD()));
    }

    /**
     * Sets whether or not the DOMElement is pointing to a download.
     *
     * @param      string $flag
     * @raw
     * @return $this
     */
    public function setDefault(bool $flag)
    {
        return $this->setAttribute(HTMLAttributeEnum::DOWNLOAD(), Helper::boolToString($flag));
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:15 PM
 */

namespace HTML\ContentSectioning;

use HTML\DOMElement;
use HTML\ElementEnumerations\ContentSectioningEnum;
use HTML\ElementEnumerations\HTMLElementEnum;

/**
 * Class Address
 * @brief The HTML <address> element supplies contact information for its nearest <article> or <body> ancestor; in the latter case, it applies to the whole document.
 *
 * @package HTML\ContentSectioning
 */
class Address extends ContentSectioning
{
    protected $isPalpableContent = true;
    protected $isFlowContent = true;

    /**
     * Address constructor.
     * @param HTMLElementEnum $element
     * @param string $innerHTML
     */
    function __construct(string $innerHTML="")
    {
        parent::__construct(ContentSectioningEnum::ADDRESS(), $innerHTML);
    }

    public function canHaveAsChild($elem)

	{
        return $elem->isFlowcontent() && !($elem instanceof Address);
    }
}
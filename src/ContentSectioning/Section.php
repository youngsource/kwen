<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:17 PM
 */

namespace HTML\ContentSectioning;

use HTML\ElementEnumerations\ContentSectioningEnum;

/**
 * Class Section
 * The HTML <section> element represents a standalone section of functionality contained within an HTML document, typically with a heading, which doesn't have a more specific semantic element to represent it.
 * @package HTML\ContentSectioning
 */
class Section extends ContentSectioning
{
    protected $isPalpableContent = true;
    protected $isFlowContent = true;
    protected $isSectioningContent = true;

    function __construct(string $innerhtml = "")
    {
        parent::__construct(ContentSectioningEnum::SECTION(), $innerhtml);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:16 PM
 */

namespace HTML\ContentSectioning;


use HTML\DOMElement;
use HTML\ElementEnumerations\ContentSectioningEnum;

/**
 * Class Aside
 * @brief The HTML <aside> element represents a section of a document with content connected tangentially to the main content of the document (often presented as a sidebar).
 *
 * @package HTML\ContentSectioning
 */
class Aside extends ContentSectioning
{
    protected $isPalpableContent = true;
    protected $isFlowContent = true;
    protected $isSectioningContent = true;

    /**
     * Aside constructor.
     * @param ContentSectioningEnum $enum
     * @param string $innerhtml
     */
    function __construct(string $innerhtml="")
    {
        parent::__construct(ContentSectioningEnum::ASIDE(), $innerhtml);
    }

    public function canHaveAsChild($elem)

	{
        return $elem->isFlowcontent();
    }
}
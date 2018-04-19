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
 * Class Article
 * @brief The HTML <article> element represents a self-contained composition in a document, page, application, or site, which is intended to be independently distributable or reusable (e.g., in syndication). Examples include: a forum post, a magazine or newspaper article, or a blog entry.
 *
 * @package HTML\ContentSectioning
 */
class Article extends ContentSectioning
{
    protected $isPalpableContent = true;
    protected $isFlowContent = true;
    protected $isSectioningContent = true;

    /**
     * Article constructor.
     * @param ContentSectioningEnum $enum
     * @param string $innerhtml
     */
    function __construct(string $innerhtml="")
    {
        parent::__construct(ContentSectioningEnum::ARTICLE(), $innerhtml);
    }

    public function canHaveAsChild($elem)

	{
        return $elem->isFlowcontent() && !($elem instanceof Address);
    }
}
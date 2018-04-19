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
 * Class Footer
 * @brief The HTML <footer> element represents a footer for its nearest sectioning content or sectioning root element. A footer typically contains information about the author of the section, copyright data or links to related documents.
 *
 * @package HTML\ContentSectioning
 */
class Footer extends ContentSectioning
{
    protected $isPalpableContent = true;
    protected $isFlowContent = true;

    /**
     * Footer constructor.
     * @param ContentSectioningEnum $enum
     * @param string $innerhtml
     */
    function __construct(string $innerhtml="")
    {
        parent::__construct(ContentSectioningEnum::FOOTER(), $innerhtml);
    }

    public function canHaveAsChild($elem)

	{
        return $elem->isFlowcontent() && $elem->findDescendant(function (DOMElement $elem)
            {
                return !($elem instanceof Footer || $elem instanceof Header);
            });
    }
}
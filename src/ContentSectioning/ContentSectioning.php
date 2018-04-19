<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/4/17
 * Time: 6:10 PM
 */

namespace HTML\ContentSectioning;


use HTML\DOMElement;
use HTML\ElementEnumerations\ContentSectioningEnum;

/**
 * Class ContentSectioning
 * Content sectioning elements allow you to organize the document content into logical pieces. Use the sectioning elements to create a broad outline for your page content, including header and footer navigation, and heading elements to identify sections of content.
 *
 * @package HTML\ContentSectioning
 */
abstract class ContentSectioning extends DOMElement
{
    /**
     * ContentSectioning constructor.
     * @param ContentSectioningEnum $enum
     * @param string $innerhtml
     */
    function __construct(ContentSectioningEnum $enum, string $innerhtml="")
    {
        parent::__construct($enum);
        $this->setInnerHTML($innerhtml);
    }

	public static function standardTemplate() : DOMElement
	{
		return new Nav();
	}
	public function generateSkeleton() : DOMElement
	{
		return $this;
	}
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:16 PM
 */

namespace HTML\ContentSectioning;


use HTML\ElementEnumerations\ContentSectioningEnum;

/**
 * Class H
 * @brief Represents section headings
 *
 * @package HTML\ContentSectioning
 */
class H extends ContentSectioning
{
    protected $isPalpableContent = true;
    protected $isFlowContent = true;
    protected $isHeadingContent = true;

	/**
	 * H constructor.
	 * @param int $depth
	 * @param string $innerhtml
	 */
	function __construct(int $depth=1, string $innerhtml="")
	{
		parent::__construct(ContentSectioningEnum::{"H" . $depth}(), $innerhtml);
	}
}
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
 * Class Header
 * @brief The Header element represents a group of introductory or navigational aids. It may contain some heading elements but also other elements like a logo, a search form, and so on.
 *
 * @package HTML\ContentSectioning
 */
class Header extends ContentSectioning
{
    protected $isPalpableContent = true;
    protected $isFlowContent = true;

    /**
     * Header constructor.
     * @param string $innerhtml
     */
	public function __construct(string $innerhtml="")
	{
		parent::__construct(ContentSectioningEnum::HEADER(), $innerhtml);
	}
}
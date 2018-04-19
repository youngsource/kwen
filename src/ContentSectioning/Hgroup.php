<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:17 PM
 */

namespace HTML\ContentSectioning;


use HTML\DOMElement;
use HTML\ElementEnumerations\ContentSectioningEnum;

/**
 * Class Hgroup
 * The Hgroup element represents a multi-level heading for a section of a document. It groups a set of H elements.
 *
 * @package HTML\ContentSectioning
 */
class Hgroup extends DOMElement
{
    protected $isFlowContent = true;
    protected $isHeadingContent = true;

    /**
     * Hgroup constructor.
     */
	public function __construct()
	{
		parent::__construct(ContentSectioningEnum::HGROUP());
	}

	public function canHaveAsChild($elem)
    {
        return $elem instanceof H;
    }
}
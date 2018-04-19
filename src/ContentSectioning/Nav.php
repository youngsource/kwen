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
 * Class Nav
 * The HTML <nav> element represents a section of a page whose purpose is to provide navigation links, either within the current document or to other documents. Common examples of navigation sections are menus, tables of contents, and indexes.
 *
 * @package HTML\ContentSectioning
 */
class Nav extends ContentSectioning
{
    protected $isPalpableContent = true;
    protected $isFlowContent = true;
    protected $isSectioningContent = true;

    /**
     * Nav constructor.
     * @param ContentSectioningEnum $enum
     */
    function __construct()
    {
        parent::__construct(ContentSectioningEnum::NAV());
    }
}
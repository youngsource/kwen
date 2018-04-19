<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/4/17
 * Time: 6:46 PM
 */

namespace HTML\TextContent;


use HTML\DOMElement;
use HTML\ElementEnumerations\HTMLElementEnum;

abstract class TextContent extends DOMElement
{
    function __construct(HTMLElementEnum $element, string $id="", string $classes="")
    {
        parent::__construct($element, false, $id, $classes);
    }
}
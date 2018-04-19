<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:39 PM
 */

namespace HTML\ImageAndMultimedia;


use HTML\DOMElement;
use HTML\ElementEnumerations\HTMLElementEnum;

class Area extends ImageAndMultimedia
{
    protected $isPhrasingContent = true;

    function __construct(HTMLElementEnum $element, $selfClosing = false, $id = "", $classes = "")
    {
        parent::__construct($element, $selfClosing, $id, $classes);

        $this->isPhrasingContent = ($this->findToRoot(function(DOMElement $element)
        {
            return ($element instanceof Map);
        }) !== null);
    }
}
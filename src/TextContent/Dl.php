<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:17 PM
 */

namespace HTML\TextContent;


use HTML\DOMElement;

class Dl extends TextContent
{
    protected $isFlowContent = true;

    public function addEntry(DOMElement $elem)
    {
        $this->isPalpableContent = true;
        $this->addChild($elem);
    }
}
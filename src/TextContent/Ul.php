<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:18 PM
 */

namespace HTML\TextContent;

class Ul extends TextContent
{
    protected $isFlowContent = true;

    public function addLi(Li $li)
    {
        $this->isPalpableContent = true;
        $this->addChild($li);
    }
}
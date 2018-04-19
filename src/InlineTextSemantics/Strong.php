<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:39 PM
 */

namespace HTML\InlineTextSemantics;


class Strong extends InlineTextSemantics
{
    protected $isPalpableContent = true;
    protected $isPhrasingContent = true;
    protected $isFlowContent = true;
}
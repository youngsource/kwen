<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:37 PM
 */

namespace HTML\InlineTextSemantics;

use HTML\LogicTraits\OnlyPhrasingContent;

class A extends InlineTextSemantics
{
    use OnlyPhrasingContent;

    protected $isPalpableContent = true;
    protected $isPhrasingContent = true;
    protected $isFlowContent = true;
    protected $isInteractiveContent = true;
}
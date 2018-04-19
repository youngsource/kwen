<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:37 PM
 */

namespace HTML\InlineTextSemantics;


class Kbd extends InlineTextSemantics
{
    protected $isPalpableContent = true;
    protected $isPhrasingContent = true;
    protected $isFlowContent = true;
}
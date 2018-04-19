<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:38 PM
 */

namespace HTML\InlineTextSemantics;


class Ruby extends  InlineTextSemantics
{
    protected $isPalpableContent = true;
    protected $isPhrasingContent = true;
    protected $isFlowContent = true;
}
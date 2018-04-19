<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:39 PM
 */

namespace HTML\InlineTextSemantics;


class Wbr extends InlineTextSemantics
{
    protected $isPhrasingContent = true;
    protected $isFlowContent = true;
}
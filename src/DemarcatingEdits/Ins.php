<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:41 PM
 */

namespace HTML\DemarcatingEdits;


use HTML\LogicTraits\OnlyPhrasingContent;

class Ins extends DemarcatingEdits
{
    use OnlyPhrasingContent;

    protected $isPalpableContent = true;
    protected $isPhrasingContent = true;
    protected $isFlowContent = true;
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:41 PM
 */

namespace HTML\DemarcatingEdits;


use HTML\LogicTraits\OnlyPhrasingContent;

class Del extends DemarcatingEdits
{
    use OnlyPhrasingContent;

    protected $isFlowContent = true;
}
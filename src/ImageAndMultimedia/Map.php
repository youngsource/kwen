<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:40 PM
 */

namespace HTML\ImageAndMultimedia;


use HTML\LogicTraits\OnlyPhrasingContent;

class Map extends ImageAndMultimedia
{
    use OnlyPhrasingContent;

    protected $isPalpableContent = true;
    protected $isFlowContent = true;
}
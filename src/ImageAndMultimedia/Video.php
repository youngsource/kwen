<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:40 PM
 */

namespace HTML\ImageAndMultimedia;


use HTML\AttributeTraits\Controls;

class Video extends ImageAndMultimedia
{
    use Controls {
        Controls::setControls as superSetControls;
    }

    protected $isPalpableContent = true;
    protected $isEmbeddedContent = true;
    protected $isPhrasingContent = true;
    protected $isFlowContent = true;

    public function setControls(bool $flag)
    {
        $this->isInteractiveContent = $flag;
        $this->superSetControls($flag);
    }
}
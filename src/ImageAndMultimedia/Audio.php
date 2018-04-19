<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:39 PM
 */

namespace HTML\ImageAndMultimedia;


use HTML\AttributeTraits\Controls;

class Audio extends ImageAndMultimedia
{
    use Controls {
        Controls::setControls as superSetControls;
    }

    protected $isFlowContent = true;
    protected $isPhrasingContent = true;
    protected $isEmbeddedContent = true;

    public function setControls(bool $flag)
    {
        $this->isInteractiveContent = $flag;
        $this->isPalpableContent = $flag;
        $this->superSetControls($flag);
    }
}
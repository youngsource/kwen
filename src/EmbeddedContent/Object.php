<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:40 PM
 */

namespace HTML\EmbeddedContent;


use HTML\AttributeTraits\Usemap;

class Object extends EmbeddedContent
{
    use Usemap{
        Usemap::setUsemap as superSetUsemap;
    }

    protected $isEmbeddedContent = true;
    protected $isPhrasingContent = true;
    protected $isFlowContent = true;
    protected $isPalpableContent = true;

    protected function setUsemap(string $map)
    {
        $this->isInteractiveContent = ($map !== "" || $map !== null);
        $this->superSetUsemap($map);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 10:26 AM
 */

namespace HTML\EmbeddedContent;


class Iframe extends EmbeddedContent
{
    protected $isFlowContent = true;
    protected $isPhrasingContent = true;
    protected $isPalpableContent = true;
    protected $isInteractiveContent = true;
    protected $isEmbeddedContent = true;
}
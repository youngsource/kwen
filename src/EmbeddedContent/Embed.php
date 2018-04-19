<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 8:40 PM
 */

namespace HTML\EmbeddedContent;


class Embed extends EmbeddedContent
{
    protected $isPalpableContent = true;
    protected $isInteractiveContent = true;
    protected $isEmbeddedContent = true;
    protected $isPhrasingContent = true;
    protected $isFlowContent = true;
}
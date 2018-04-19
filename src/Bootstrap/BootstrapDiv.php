<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/29/17
 * Time: 6:18 AM
 */

namespace HTML\Bootstrap;

use HTML\TextContent\Div;

abstract class BootstrapDiv extends Div
{
	public abstract function generateDOMTemplate()
	: BootstrapDiv;
}
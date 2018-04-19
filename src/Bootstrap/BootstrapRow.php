<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/29/17
 * Time: 6:18 AM
 */

namespace HTML\Bootstrap;

use HTML\TextContent\Div;
 
class BootstrapRow extends Div
{
	public function __construct($id = "", $classes = "")
	{
		parent::__construct($id, $classes . " row");
	}
}
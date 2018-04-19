<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/13/17
 * Time: 4:48 PM
 */

namespace HTML\Bootstrap;


use HTML\Forms\TypeSpecializations\Date;

class BootstrapDate extends BootstrapInput
{
	public function createCoreInput($name, $value="", $classes="")
	{
		$classes .= " form-control ";
		$this->setCoreInput(new Date($name,null, "", $classes));
	}
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/25/17
 * Time: 12:06 PM
 */

namespace HTML\Bootstrap;


use HTML\Forms\TextContent\Div;
use HTML\Forms\TypeSpecializations\Float_;

class BootstrapPercentage extends BootstrapInput
{
	public function __construct(string $name = "", $id = "", $classes = "", $required=false)
	{
		parent::__construct($name, "", "", $classes, $required);

		/** @var Div $div */
		$div = $this->getChildren()[1];
		$div->addClass("input-group");
		$addon = new Div("", "input-group-addon");
		$addon->setInnerHTML("%");
		$this->prependCoreInputWrapper($addon);
	}

	public function createCoreInput($name, $value = "", $classes="")
	{
		$this->setCoreInput(new Float_($name, 0, "", "form-control"));
	}
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/10/17
 * Time: 8:51 AM
 */

namespace HTML\Bootstrap;


use HTML\Forms\TextContent\Div;
use HTML\Forms\TypeSpecializations\Float_;

class BootstrapEuroInput extends BootstrapInput
{
	public function __construct(string $name = "", $id = "", $classes = "", $required=false)
	{
		parent::__construct($name, "", "", $classes, $required);

		/** @var Div $div */
		$div = $this->getChildren()[1];
		$div->addClass("input-group");
		$addon = new Div("", "input-group-addon");
		$addon->setInnerHTML("&euro;");
		$this->prependCoreInputWrapper($addon);
	}

	public function createCoreInput($name, $value = "", $classes="")
	{
		$this->setCoreInput(new Float_($name, 0, "", "form-control"));
	}

}
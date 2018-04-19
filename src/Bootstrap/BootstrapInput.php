<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/10/17
 * Time: 9:33 AM
 */

namespace HTML\Bootstrap;
use HTML\Forms\Input;
use HTML\Forms\Label;
use HTML\TextContent\Div;

abstract class BootstrapInput extends BootstrapRow
{
	public function __construct(Input $forms)
	{
		parent::__construct("", "form-group");
		$this->setCoreInput($forms);

		$this->in(new Div("", "col"))->in($forms);
	}

	public static function label(string $for, string $labelcontent): Label
	{
	    // @todo this is a logic fault.
		//$this->getCoreInput()->before($this->getCoreInput()->generateLabel());
	}

	public function removeLabel()
	{
		$siblings = $this->getCoreInput()->getSiblings();
		$pos = $siblings->find($this->getCoreInput());

		if (isset($siblings[$pos]) && $siblings[$pos] instanceof Label)
			$siblings[$pos]->detach();
	}

	private $coreInput;

	public function setCoreInput($input)
	{
		$this->coreInput = $input;
	}

	/**
	 * @return Input
	 */
	public final function getCoreInput()
	: Input
	{
		return $this->coreInput;
	}

	public function __clone()
	{
		$tbr = parent::__clone();
		foreach ($this->getChildren() as $child)
		{
			if ($child instanceof Div)
				$tbr->in(clone $child)->in(clone $child->getChildren()[0]);
			else
				$tbr->addChild(clone $child);
		}
	}
}
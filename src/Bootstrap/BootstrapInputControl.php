<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/10/17
 * Time: 9:33 AM
 */

namespace HTML\Bootstrap;
use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\Forms\FormsBase;
use HTML\Forms\Label;
use HTML\Forms\TypeSpecializations\Text;
use HTML\TextContent\Div;

class BootstrapInputControl extends BootstrapDiv
{
	public function __construct($name, string $value=null, $id = "", $classes = "", $required=false)
	{
		parent::__construct($id, "form-group row");
		$value = ($value === null) ? "" : $value;

		if ($name != "") {
			$div = new Div("", "col");
			$this->createCoreInput($name, $value, $classes);
			$label = $this->generateLabel("", "", "", "col col-form-label");

			$this->addChild($label);
			$this->addChild($div);
			$div->addChild($this->getCoreInput());
		}

		if ( $value !== "" )
			$this->getCoreInput()->setValue($value);
		if ( $required )
			$this->getCoreInput()->setRequired(true);
	}

	public function removeLabel()
	{
		for($i = 0; $i < count($this->getChildren()); ++$i)
		{
			if ($this->getChildren()[$i] instanceof Label)
				unset($this->getChildren()[$i]);
		}
	}

	public function generateDOMTemplate(): BootstrapDiv
	{
		return new BootstrapInputControl($this->getName());
	}


	public function prependCoreInputWrapper(Div $DOMElement)
	{
		/** @var Div $div */
		$div = $this->getChildren()[1];
		$div->insertChildAt(count($div->getChildren()) - 1, $DOMElement);
	}


	public function require()
	{
		$this->getCoreInput()->setAttribute(HTMLAttributeEnum::REQUIRED(), "true");
	}

	private $coreInput;

	public function setCoreInput($input)
	{
		$this->coreInput = $input;
	}

	public function createCoreInput($name, $value="", $classes="")
	{
		$this->setCoreInput(new Text($name, $value, $name, $classes . "form-control"));
	}

	/**
	 * @return FormsBase
	 */
	public final function getCoreInput()
	: FormsBase
	{
		//return $this->coreInput;
	}

	public function setValue(string $value)
	{
		$this->getCoreInput()->setValue($value);
		return $this;
	}

	/**
	 * @param string $name
	 * @return $this
	 */
	public function setName(string $name)
	{
		$this->getCoreInput()->setName($name);
		return $this;
	}

	public function getName()
	: string
	{
		return $this->getCoreInput()->getName();
	}

	public function generateLabel(string $labelcontent="", string $for="", string $id="", $classes="")
	: Label
	{
		return $this->getCoreInput()->generateLabel($labelcontent, $for, $id, $classes);
	}
}
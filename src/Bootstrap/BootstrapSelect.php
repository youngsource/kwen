<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/10/17
 * Time: 10:58 AM
 */

namespace HTML\Bootstrap;

use HTML\Forms\Select;

/**
 * Class BootstrapSelect
 * @package App\HTML\FormInputs
 */
class BootstrapSelect extends BootstrapInput
{
	public function __construct(string $name, array $possibleValues=null, $id = "", $classes = "", $required = false)
	{
		parent::__construct($name, "", $id, $classes, $required);
		/** @var Select $select */
		$select = $this->getCoreInput();
		$select->setPossibleValues($possibleValues);
	}

	public function createCoreInput($name, $value="", $classes="")
	{
		$value = ($value === "")?[]:$value;
		$this->setCoreInput(new Select($name, $value, $name, $classes . " form-control custom-select "));
	}

	public function setSelected(string $val)
	{
		/** @var Select $select */
		$select = $this->getCoreInput();
		$select->setSelected($val);
		return $this;
	}

	public function standardTemplate(): BootstrapRow
	{
		$select = $this->getCoreInput(); /** @var Select $select */
		return new BootstrapSelect($this->getName(), $select->getPossibleValues());
	}


}
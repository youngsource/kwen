<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/15/17
 * Time: 5:18 PM
 */

namespace HTML\Bootstrap;
use HTML\Forms\TypeSpecializations\Checkbox;

/**
 * Class BootstrapCheckbox
 * @package App\HTML\FormInputs
 *
 */
class BootstrapCheckbox extends BootstrapInput
{
	public function __construct($name, $value = null, $id = "", $classes = "", $required = false)
	{
	    /// @todo agr 1 must be Input, string given
		///parent::__construct($name, $value, $id, $classes, $required);
	}

	public function createCoreInput($name, $value = "", $classes="")
	{
		$this->setCoreInput(new Checkbox($name, $value, "", $classes ));
	}

	public function check()
	{
		/** @var Checkbox $checkbox */
		$checkbox = $this->getCoreInput();
		$checkbox->check();
	}

	/**
	 * @return bool
	 */
	public function isChecked()
	: bool
	{
		/** @var Checkbox $checkbox */
		$checkbox = $this->getCoreInput();
		return $checkbox->isChecked();
	}

	public function uncheck()
	{
		/** @var Checkbox $checkbox */
		$checkbox = $this->getCoreInput();
		$checkbox->uncheck();
	}
}
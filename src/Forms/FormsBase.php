<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/28/17
 * Time: 2:52 PM
 */

namespace HTML\Forms;


use HTML\AttributeTraits\Value;
use HTML\DOMElement;
use HTML\ElementEnumerations\FormsEnum;
use HTML\ElementEnumerations\HTMLAttributeEnum;

class FormsBase extends DOMElement
{
	use Value;
	/**
	 * FormControl constructor.
	 *
	 * @param FormsEnum $form   the type of the inputcontrol
	 * @param string $name      the name of the inputcontrol
	 * @param string $id        the id of the inputcontrol
	 * @param string $classes   the classes of the inputcontrol
	 *
	 * @effect  the parent constructor will be called with the given type, required, id and classes
	 *       |  parent::__construct(type, false, id ,classes)
	 * @post    if the given type is a self closing type, the FormControl will be self closing
	 *        | if (checkSelfClosing(type)) new.isSelfClosing() == true
	 * @post    the inputcontrol will have the given name, type and value and will be required or
	 *          not depending on the respective argument
	 *        | new.getName() == name
	 *        | new.getType() == type
	 */
	function __construct(FormsEnum $form, string $name="", string $id="", string $classes="")
	{
		parent::__construct($form, false, $id, $classes);

		if($this->checkSelfClosing($form))
			$this->setSelfClosing(true);

		if ( $name !== "" )
			$this->setName($name);
	}

	/** @var array containing all open types */
	private static $openForms = [FormsEnum::SELECT, FormsEnum::FORM, FormsEnum::LABEL];

	/**
	 * checks to see if the type is self closing
	 *
	 * @param FormsEnum $type the type to be checked
	 * @return bool   true if the open types contain the value of the given FormsEnum
	 *              | result == !array_has(openTypes, type->getVal())
	 */
	private function checkSelfClosing(FormsEnum $type)
	: bool
	{
		return (array_search($type->getVal(), self::$openForms) == false);
	}

	/**
	 * Sets the name.
	 *
	 * @param      string  $name   The name
	 * @raw
	 */
	public function setName(string $name)
	{
		parent::setAttribute(HTMLAttributeEnum::NAME(), $name);
	}

	/**
	 * Gets the name.
	 *
	 * @return     string  The name.
	 * @basic
	 */
	public function getName()
	: string
	{
		return parent::getAttribute(HTMLAttributeEnum::NAME());
	}
}
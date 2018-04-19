<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/20/17
 * Time: 2:20 PM
 */

namespace HTML\Forms;

use HTML\AttributeTraits\AutoComplete;
use HTML\AttributeTraits\Autofocus;
use HTML\AttributeTraits\Disabled;
use HTML\AttributeTraits\Formaction;
use HTML\AttributeTraits\Formenctype;
use HTML\AttributeTraits\Formmethod;
use HTML\AttributeTraits\Formnovalidate;
use HTML\AttributeTraits\Formtarget;
use HTML\AttributeTraits\Name;
use HTML\AttributeTraits\Spellcheck;
use HTML\AttributeTraits\Type;
use HTML\AttributeTraits\Value;
use HTML\ElementEnumerations\FormsEnum;
use HTML\HTMLAttrEnums\InputTypeEnum;
use HTML\AttributeTraits\Form;

/**
 * Class Input
 * The HTML <input> element is used to create interactive controls for web-based forms in order to accept data from the user.
 *
 * @package HTML\Forms
 */
abstract class Input extends Forms
{
	use Type, AutoComplete, Autofocus, Disabled, Form,
        Formaction, Formenctype, Formmethod, Formnovalidate, Formtarget,
        Spellcheck, Name, Value {
	    Type::setType as setSuperType;
    }

    protected $isPhrasingContent = true;
    protected $isFlowContent = true;

    /**
     * Input constructor.
     * @param InputTypeEnum $type
     * @param string $name
     * @param string $value
     */
	function __construct(InputTypeEnum $type, string $name="", string $value = "")
	{
		parent::__construct(FormsEnum::INPUT(), true);
		$this->setName($name);
		$this->setValue($value);
		$this->setType($type);
	}


	public function setType(InputTypeEnum $type)
    {
        $this->isInteractiveContent = ($type !== InputTypeEnum::HIDDEN());
        $this->isPalpableContent = ($type !== InputTypeEnum::HIDDEN());
        $this->setSuperType($type);
    }

    public function generateLabel()
	: Label
	{
		return new Label($this->getId(), $this->getId());
	}
}
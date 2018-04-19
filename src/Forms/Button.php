<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/24/17
 * Time: 2:35 PM
 */

namespace HTML\Forms;


use HTML\AttributeTraits\Form;
use HTML\AttributeTraits\Autofocus;
use HTML\AttributeTraits\ButtonType;
use HTML\AttributeTraits\Disabled;
use HTML\AttributeTraits\Formaction;
use HTML\AttributeTraits\Formenctype;
use HTML\AttributeTraits\Formmethod;
use HTML\AttributeTraits\Formnovalidate;
use HTML\AttributeTraits\Formtarget;
use HTML\AttributeTraits\Name;
use HTML\AttributeTraits\Value;
use HTML\DOMElement;
use HTML\ElementEnumerations\FormsEnum;
use HTML\HTMLAttrEnums\ButtonTypeEnum;
use HTML\LogicTraits\LabelAble;

class Button extends Forms
{
	use ButtonType, LabelAble, Autofocus, Disabled, Form,
        Formaction, Formenctype, Formmethod, Formnovalidate,
        Formtarget, Name, Value;

    protected $isPalpableContent = true;
    protected $isInteractiveContent = true;
    protected $isFlowContent = true;
    protected $isPhrasingContent = true;

	function __construct(ButtonTypeEnum $type, string $innerhtml, string $name="", string $value="")
	{
		parent::__construct(FormsEnum::BUTTON(), false);
		$this->setName($name);
		$this->setValue($value);
		$this->setType($type);
		$this->setInnerHTML($innerhtml);
	}

	public function canHaveAsChild($elem)
    {
        return parent::canHaveAsChild($elem) && $elem->isPhrasingContent();
    }

    public static function standardTemplate(): DOMElement
	{
		return new Button(ButtonTypeEnum::BUTTON(), "template");
	}

	public function generateSkeleton(): DOMElement
	{
		return new Button(	ButtonTypeEnum::resolve($this->getType()),
							$this->getInnerHTML(),
							$this->getName(),
							$this->getValue());
	}
}
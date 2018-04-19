<?php 
	
	declare(strict_types=1);

	namespace HTML\Forms;

	use HTML\AttributeTraits\AutoComplete;
    use HTML\AttributeTraits\Autofocus;
    use HTML\AttributeTraits\Cols;
    use HTML\AttributeTraits\Disabled;
    use HTML\AttributeTraits\Maxlength;
    use HTML\AttributeTraits\Minlength;
    use HTML\AttributeTraits\Name;
    use HTML\AttributeTraits\Required;
    use HTML\AttributeTraits\Rows;
    use HTML\AttributeTraits\Spellcheck;
    use HTML\AttributeTraits\Wrap;
    use HTML\DOMElement;
    use HTML\ElementEnumerations\FormsEnum;
    use HTML\AttributeTraits\Form;


	/**
	 * \class TextAreaInput
	 * class representing a textarea
	 *
	 * @package App\HTML\FormInputs
	 */
	class Textarea extends Forms
	{
	    use AutoComplete, Autofocus, Cols, Disabled, Form,
            Maxlength, Minlength, Name, Required, Rows, Spellcheck,
            Wrap;

        protected $isPalpableContent = true;
        protected $isPhrasingContent = true;
        protected $isFlowContent = true;
        protected $isInteractiveContent = true;

		public function __construct(string $name, string $innerhtml="", bool $required = false)
		{
			parent::__construct(FormsEnum::TEXTAREA(), false);
            $this->setInnerHTML($innerhtml);
            $this->setRequired($required);
		}

		public function canHaveAsChild($elem)
        {
            return false;
        }
    }

 ?>
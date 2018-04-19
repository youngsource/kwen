<?php 
	
	declare(strict_types=1);

	namespace HTML\Forms;

    use HTML\AttributeTraits\AcceptCharset;
    use HTML\AttributeTraits\Action;
    use HTML\AttributeTraits\AutoComplete;
    use HTML\AttributeTraits\Enctype;
    use HTML\AttributeTraits\Method;
    use HTML\AttributeTraits\Novalidate;
    use HTML\AttributeTraits\Target;
    use HTML\DOMElement;
    use HTML\ElementEnumerations\FormsEnum;
	use HTML\HTMLAttrEnums\MethodEnum;

	/**
	 * \class Form
	 * class representing a form
	 *
	 */
	class Form extends Forms
	{
		use AcceptCharset, Action, AutoComplete, Enctype,
            Method, Novalidate, Target;

        protected $isPalpableContent = true;
        protected $isFlowContent = true;

		/**
		 * constructs a Form
		 *
		 * @param      MethodEnum 		$method   The method
		 * @param      string                               $action   The action
		 * 
		 * @effect		this Form will be a domelement created with "form" as its nodetype
		 * 			  |	super("form")
		 *
		 * @post    the Form will not be selfClosing
		 *        | new.isSelfClosing() == false
		 * @post    the action will be equal to the given action
		 *          the target will be equal to the given target
		 *          the enctype will be equal to the given type
		 *        | new.getAction() == action
		 *        | new.getTarget() == target
		 *        | new.getEnctype() == enctype
		 */
		public function __construct(string $action = "", MethodEnum $method)
		{
			parent::__construct(FormsEnum::FORM(), false);

		    $this->setAction($action)
                 ->setMethod($method);
		}

		public function canHaveAsChild($elem)
        {
            return parent::canHaveAsChild($elem) && $elem->isFlowContent() &&
                    !($elem instanceof Form);
        }
    }

 ?>
<?php 
	
	declare(strict_types=1);

	namespace HTML\Forms;

	use HTML\AttributeTraits\Autofocus;
    use HTML\AttributeTraits\Disabled;
    use HTML\AttributeTraits\Multiple;
    use HTML\AttributeTraits\Name;
    use HTML\AttributeTraits\Required;
    use HTML\AttributeTraits\Size;
    use HTML\AttributeTraits\Form;
    use HTML\DOMElement;
    use HTML\ElementEnumerations\FormsEnum;
	use Psr\Log\InvalidArgumentException;

	/**
	 * class SelectForm
	 * The HTML <select> element represents a control that provides a menu of options:
	 *
	 * @package App\HTML\FormInputs
	 */
	class Select extends Forms
	{
	    use Autofocus, Disabled, Form, Multiple, Name, Required, Size;

        protected $isPalpableContent = true;
        protected $isPhrasingContent = true;
        protected $isFlowContent = true;
        protected $isInteractiveContent = true;

        /**
         * Select constructor.
         * @param string $name
         * @param array $possibleValues
         */
		public function __construct(string $name, array $possibleValues=null)
		{
			parent::__construct(FormsEnum::SELECT(), false);
			$this->setName($name);
			if ($possibleValues !== null)
			    $this->setPossibleValues($possibleValues);
		}

		/**
		 * @var Option $selected
		 */
		private $selected;

		//@todo come back here when Optgroups are allowed...
		public function setSelected(string $name)
		{
			$set = false;
			$multiple = $this->isMultiple();
			foreach($this->getPossibleValues() as $option)
			{
				if ($option->getInnerHTML() === $name || $option->getValue() === $name)
				{
					$this->selected = $option;
					$option->setSelected(true);
					$set = true;
				}
				elseif (!$multiple)
					$option->setSelected(false);
			}
			if (!$set)
				throw new InvalidArgumentException("did not find name, name given: " . $name);

			$this->selected->setSelected(true);
		}

		public function getSelected()
		: Option
		{
			return $this->selected;
		}

		private $possibleValues = [];

		/**
		 * @param array $values
		 */
		public function setPossibleValues(array $values)
		{
			foreach ($values as $value)
			{
				if ($value instanceof Option)
					$option = $value;

				elseif (is_string($value))
					$option = new Option($value);

				else
				    throw new \InvalidArgumentException("cannot have given values, they are not all of type string or Option");

				$this->addChild($option);
				array_push($this->getPossibleValues(), $option);
			}
		}

        /**
         * @return array
         */
		public function &getPossibleValues()
		: array
		{
			return $this->possibleValues;
		}

		public function canHaveAsChild($elem)
        {
            return parent::canHaveAsChild($elem) &&
                ($elem instanceof Option || $elem instanceof Optgroup);
        }
    }

 ?>
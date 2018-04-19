<?php 

	declare(strict_types=1);

	namespace HTML\Forms\TypeSpecializations;


	use HTML\ElementEnumerations\FormsEnum;
	use HTML\ElementEnumerations\HTMLAttributeEnum;
	use HTML\Forms\Form;
	use HTML\Forms\FormsBase;
	use HTML\Forms\Input;

	/**
	 * \class SubmitForm
	 * class representing a submit button
	 *
	 * @package App\HTML\FormInputs
	 */
	class Submit extends FormsBase
	{
		public function __construct(string $value="")
		{
			parent::__construct(FormsEnum::BUTTON());
			$this->setSelfClosing(false); /** @todo check OOP Principle of this */
			$this->setValue($value);
			$this->setInnerHTML($value);
		}

		public function generateDOMTemplate()
		: Submit
		{
			return new Submit($this->getValue());
		}

		public function getValue()
		: string
		{
			return $this->getAttribute(HTMLAttributeEnum::VALUE());
		}

		public function setValue(string $value)
		{
			$this->setAttribute(HTMLAttributeEnum::VALUE(), $value);
		}
	}

 ?>
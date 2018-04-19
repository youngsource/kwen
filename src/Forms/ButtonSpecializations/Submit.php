<?php 

	declare(strict_types=1);

	namespace HTML\Forms\ButtonSpecializations;
    use HTML\Forms\Button;
    use HTML\HTMLAttrEnums\ButtonTypeEnum;


    /**
	 * \class SubmitForm
	 * class representing a submit button
	 *
	 * @package App\HTML\FormInputs
	 */
	class Submit extends Button
	{
        /**
         * Submit constructor.
         * @param string $innerHTML
         * @param string $value
         */
		public function __construct(string $innerHTML, string $value="")
		{
			parent::__construct(ButtonTypeEnum::SUBMIT(), $innerHTML);
			$this->setValue($value);
			$this->setInnerHTML($innerHTML);
		}

		public function standardTemplate()
		: Submit
		{
			return new Submit($this->getValue());
		}
	}

 ?>
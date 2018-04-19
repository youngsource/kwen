<?php 

	declare(strict_types=1);

	namespace HTML\Forms\TypeSpecializations;
    use HTML\AttributeTraits\Checked;
    use HTML\Forms\Input;
    use HTML\HTMLAttrEnums\InputTypeEnum;


    /**
	 * \class RadioForm
	 * class representing a radio input
	 *
	 * @package App\HTML\FormInputs
	 */
	class Radio extends Input
	{
	    use Checked;

        /**
         * Radio constructor.
         * @param string $name
         * @param string $value
         * @param bool $checked
         */
		public function __construct(string $name, string $value, bool $checked = false)
		{
			parent::__construct(InputTypeEnum::RADIO(), $name, $value);
			$this->setChecked($checked);
		}
	}

 ?>
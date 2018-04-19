<?php 

	declare(strict_types=1);

	namespace HTML\Forms\TypeSpecializations;

	use HTML\Forms\Input;
    use HTML\HTMLAttrEnums\InputTypeEnum;

    /**
	 * \class HiddenForm
	 * class representing a hidden input
	 *
	 * @package App\HTML\FormInputs
	 */
	class Hidden extends Input
	{
		public function __construct(string $name, string $value)
		{
			parent::__construct(InputTypeEnum::HIDDEN(), $name, $value);
		}
	}
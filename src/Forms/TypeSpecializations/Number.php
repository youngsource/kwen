<?php 

	declare(strict_types=1);

	namespace HTML\Forms\TypeSpecializations;


	use HTML\AttributeTraits\Max;
    use HTML\AttributeTraits\Min;
    use HTML\AttributeTraits\Placeholder;
    use HTML\AttributeTraits\Readonly;
    use HTML\AttributeTraits\Step;
    use HTML\HTMLAttrEnums\InputTypeEnum;
    use HTML\AttributeTraits\List_;
    use HTML\Forms\Input;

	/**
	 * \class NumberForm
	 * class representing a number
	 * @package App\HTML\FormInputs
	 */
	class Number extends Input
	{
	    use List_, Min, Max, Placeholder, Readonly, Step;

		public function __construct(string $name, int $value=0, string $id="", string $classes="", bool $required=false)
		{
			parent::__construct(InputTypeEnum::NUMBER(), $name, (string) $value, $id, $classes, $required);
		}
	}

 ?>
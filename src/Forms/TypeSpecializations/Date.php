<?php 

	declare(strict_types=1);

	namespace HTML\Forms\TypeSpecializations;


	use Carbon\Carbon;
    use HTML\AttributeTraits\List_;
    use HTML\AttributeTraits\Max;
    use HTML\AttributeTraits\Min;
    use HTML\AttributeTraits\Placeholder;
    use HTML\AttributeTraits\Readonly;
    use HTML\AttributeTraits\Step;
    use HTML\Forms\Input;
    use HTML\HTMLAttrEnums\InputTypeEnum;

    /**
	 * \class DateForm
	 * class representing a date input
	 *
	 * @package App\HTML\FormInputs
	 */
	class Date extends Input
	{
	    use List_, Min, Max, Step, Placeholder, Readonly;

        /**
         * DateForm constructor.
         * @param string $name
         * @param Carbon|null $value
         * @param string $id
         * @param string $classes
         * @param Carbon|null $min
         * @param Carbon|null $max
         * @param bool $required
         */
        public function __construct(string $name, Carbon $value=null, string $id="", string $classes="", Carbon $min=null, Carbon $max=null, bool $required=false)
		{
			if ($value === null)
				$value = "";
			else
				$value = $value->format("Y-m-d");

			parent::__construct(InputTypeEnum::TEXT(), $name, (string) $value, $id, "datepicker " . $classes, $required);

			if ($min !== null)
				$this->setMin(intval($min));

			if ($max !== null)
				$this->setMax(intval($max));
		}
	}

 ?>
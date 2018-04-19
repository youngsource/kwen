<?php 

	declare(strict_types=1);

	namespace HTML\Forms\TypeSpecializations;


	use App\HTML\HTMLAttrEnums\InputTypeEnum;
	use HTML\Forms\Input;

	/**
	 * \class FloatForm
	 * class representing a float input
	 *
	 * @package App\HTML\FormInputs
	 */
	abstract class Float_ extends Input
	{
		public function __construct(string $name, int $value=0, string $id="", string $classes="", bool $required=false)
		{
			parent::__construct(InputTypeEnum::TEXT(), $name, (string) $value, $id, "float " . $classes, $required);
			$this->setData("min_val", "0");
		}
	}

 ?>
<?php 
	
	declare(strict_types=1);

	namespace HTML\Forms\TypeSpecializations;

    use HTML\AttributeTraits\Checked;
    use HTML\AttributeTraits\Name;
    use HTML\AttributeTraits\Value;
    use HTML\Forms\Input;
    use HTML\HTMLAttrEnums\InputTypeEnum;

    /**
     * Class Checkbox
     * <input> elements of type checkbox are rendered by default as square boxes that are checked (ticked) when activated, like you might see in an official government paper form. They allow you to select single values for submission in a form (or not).
     *
     * @package HTML\Forms\TypeSpecializations
     */
	class Checkbox extends Input
	{
	    use Checked, Name, Value;

        /**
         * Checkbox constructor.
         * @param string $name
         * @param string $value
         * @param bool $checked
         */
		public function __construct(string $name, string $value, bool $checked=false)
		{
			parent::__construct(InputTypeEnum::CHECKBOX(), $name, $value);
			$this->setChecked($checked);
		}
	}

 ?>
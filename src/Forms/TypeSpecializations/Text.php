<?php 

	declare(strict_types=1);

	namespace HTML\Forms\TypeSpecializations;

    use HTML\AttributeTraits\InputMode;
    use HTML\AttributeTraits\List_;
    use HTML\AttributeTraits\Maxlength;
    use HTML\AttributeTraits\Minlength;
    use HTML\AttributeTraits\Pattern;
    use HTML\AttributeTraits\Placeholder;
    use HTML\AttributeTraits\Readonly;
    use HTML\DOMElement;
    use HTML\Forms\Input;
    use HTML\HTMLAttrEnums\InputTypeEnum;

    /**
	 * \class TextForm
	 * class representing a text input
	 *
	 * @package App\HTML\FormInputs
	 */
	class Text extends Input
	{
		use Maxlength, InputMode, List_, Maxlength, Minlength, Pattern, Placeholder, Readonly;

        /**
         * Text constructor.
         * @param string $name
         * @param string $value
         */
		public function __construct(string $name, string $value = "")
        {
            parent::__construct(InputTypeEnum::TEXT(), $name, $value);
        }

        /**
         * A standard template inherits the minimum amount of parameters found possible in the constructor.
         *
         * @return DOMElement
         */
        public static function standardTemplate(): DOMElement
        {
            // TODO: Implement standardTemplate() method.
        }

        /**
         * A skeleton is inherits the respective parameters found in constructor.
         *
         * @return DOMElement
         */
        public function generateSkeleton(): DOMElement
        {
            // TODO: Implement generateSkeleton() method.
}}

?>
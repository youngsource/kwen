<?php 

	namespace HTML\HTMLAttrEnums;
	use App\TypedEnum;

	/**
	 * \class InputTypeEnum
	 * \brief   enumerates all the possible options the input attribute can have
	 *
	 * @method static InputTypeEnum BUTTON()
	 * @method static InputTypeEnum CHECKBOX()
	 * @method static InputTypeEnum COLOR()
	 * @method static InputTypeEnum DATE()
	 * @method static InputTypeEnum DATETIME_LOCAL()
	 * @method static InputTypeEnum EMAIL()
	 * @method static InputTypeEnum FILE()
	 * @method static InputTypeEnum HIDDEN()
	 * @method static InputTypeEnum IMAGE()
	 * @method static InputTypeEnum MONTH()
	 * @method static InputTypeEnum NUMBER()
	 * @method static InputTypeEnum PASSWORD()
	 * @method static InputTypeEnum RADIO()
	 * @method static InputTypeEnum RANGE()
	 * @method static InputTypeEnum RESET()
	 * @method static InputTypeEnum SEARCH()
	 * @method static InputTypeEnum SELECT()
	 * @method static InputTypeEnum SUBMIT()
	 * @method static InputTypeEnum TEXT()
	 * @method static InputTypeEnum TIME()
	 * @method static InputTypeEnum WEEK()
	 */
	class InputTypeEnum extends TypedEnum
	{
		const BUTTON 			= "button";
		const CHECKBOX 			= "checkbox";
		const COLOR 			= "color";
		const DATE 				= "date";
		const DATETIME_LOCAL 	= "datetime-local";
		const EMAIL 			= "email";
		const FILE 				= "file";
		const HIDDEN 			= "hidden";
		const IMAGE 			= "image";
		const MONTH 			= "month";
		const NUMBER 			= "number";
		const PASSWORD 			= "password";
		const RADIO 			= "radio";
		const RANGE 			= "range";
		const RESET 			= "reset";
		const SEARCH 			= "search";
		const SELECT 			= "select";
		const SUBMIT 			= "submit";
		const TEL 				= "tel";
		const TEXT 				= "text";
		const TIME 				= "time";
		const URL 				= "url";
		const WEEK 				= "week";
	}

?>
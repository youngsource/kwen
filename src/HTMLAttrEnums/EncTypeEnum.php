<?php 

	namespace HTML\HTMLAttrEnums;
	use App\TypedEnum;

	/**
	 * \class EncTypeEnum
	 * \brief   enumerates all the possible options the type of encryption the enctype attribute can have.
	 *
	 * @method static EncTypeEnum URLENCODED()
	 * @method static EncTypeEnum FORMDATA()
	 * @method static EncTypeEnum PLAIN()
	 */
	class EncTypeEnum extends TypedEnum
	{
		const URLENCODED = "application/x-www-form-urlencoded";
		const FORMDATA = "multipart/form-data";
		const PLAIN = "text/plain";
	}
 ?>
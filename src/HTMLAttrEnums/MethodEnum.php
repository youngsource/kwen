<?php 

	namespace HTML\HTMLAttrEnums;
	use App\TypedEnum;

	/**
	 * \class MethodEnum
	 * \brief   enumerates all the possible options the input attribute can have
	 *
	 * @method static MethodEnum GET()
	 * @method static MethodEnum POST()
	 */
	class MethodEnum extends TypedEnum
	{
		const GET = "GET";
		const POST = "POST";
	}
	
 ?>
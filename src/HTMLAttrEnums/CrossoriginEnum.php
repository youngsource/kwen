<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/29/17
 * Time: 8:09 AM
 */

namespace HTML\HTMLAttrEnums;


use App\TypedEnum;

/**
 * Class CrossoriginEnum
 * @package HTML\HTMLAttrEnums
 *
 * @method static CrossoriginEnum ANONYMOUS()
 * @method static CrossoriginEnum USE_CREDENTIALS()
 */
class CrossoriginEnum extends TypedEnum
{
	const ANONYMOUS = "anonymous";
	const USE_CREDENTIALS = "use-credentials";
}
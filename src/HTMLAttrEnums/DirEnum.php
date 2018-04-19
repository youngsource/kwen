<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/20/17
 * Time: 5:37 PM
 */

namespace HTML\HTMLAttrEnums;


use App\TypedEnum;

/**
 * Class DirEnum
 * @package App\HTML\HTMLAttrEnums
 *
 * @method static DirEnum   LTR()
 * @method static DirEnum   RTL()
 */
class DirEnum extends TypedEnum
{
	const LTR = "ltr";
	const RTL = "rtl";
}
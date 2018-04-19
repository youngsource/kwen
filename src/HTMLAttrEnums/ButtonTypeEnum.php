<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/24/17
 * Time: 2:38 PM
 */

namespace HTML\HTMLAttrEnums;

use App\TypedEnum;

/**
 * Class ButtonTypeEnum
 * @package App\HTML\HTMLAttrEnums
 *
 * @method static ButtonTypeEnum SUBMIT()
 * @method static ButtonTypeEnum RESET()
 * @method static ButtonTypeEnum BUTTON()
 */
class ButtonTypeEnum extends TypedEnum
{
	const SUBMIT = "submit";
	const RESET = "reset";
	const BUTTON = "button";
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/20/17
 * Time: 5:47 PM
 */

namespace HTML\HTMLAttrEnums;


use App\TypedEnum;

/**
 * Class DropzoneEnum
 * @package App\HTML\HTMLAttrEnums
 *
 * @method static DropzoneEnum COPY()
 * @method static DropzoneEnum MOVE()
 * @method static DropzoneEnum LINK()
 */
class DropzoneEnum extends TypedEnum
{
	const COPY = "copy";
	const MOVE = "move";
	const LINK = "link";
}
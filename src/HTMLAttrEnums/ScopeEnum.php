<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 11:42 AM
 */

namespace HTML\HTMLAttrEnums;


use App\TypedEnum;

/**
 * Class ScopeEnum
 * @package HTML\HTMLAttrEnums
 */
class ScopeEnum extends TypedEnum
{
	const ROW = "row";
	const COL = "col";
	const ROWGROUP = "rowgroup";
	const COLGROUP = "colgroup";
	const AUTO = "auto";
}
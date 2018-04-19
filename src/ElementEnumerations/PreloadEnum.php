<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 11:19 AM
 */

namespace HTML\ElementEnumerations;

/**
 * Class PreloadEnum
 * @package HTML\ElementEnumerations
 *
 * @method static PreloadEnum NONE()
 * @method static PreloadEnum METADATA()
 * @method static PreloadEnum AUTO()
 */
class PreloadEnum extends HTMLAttributeEnum
{
	const NONE = "none";
	const METADATA = "metadata";
	const AUTO = "auto";
}
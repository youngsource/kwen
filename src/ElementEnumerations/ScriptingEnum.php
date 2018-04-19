<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/15/17
 * Time: 8:13 PM
 */

namespace HTML\ElementEnumerations;

/**
 * Class ScriptingEnum
 * @package App\HTML\ElementEnumerations
 *
 * @method static ScriptingEnum CANVAS()
 * @method static ScriptingEnum NOSCRIPT()
 * @method static ScriptingEnum SCRIPT()
 */
class ScriptingEnum extends HTMLElementEnum
{
	const CANVAS = 'canvas';
	const NOSCRIPT = 'noscript';
	const SCRIPT = 'script';
}
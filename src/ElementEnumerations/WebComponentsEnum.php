<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/15/17
 * Time: 8:26 PM
 */

namespace HTML\ElementEnumerations;

/**
 * Class WebComponentsEnum
 * @package App\HTML\ElementEnumerations
 *
 * @method static WebComponentsEnum CONTENT ()
 * @method static WebComponentsEnum ELEMENT ()
 * @method static WebComponentsEnum SHADOW ()
 * @method static WebComponentsEnum SLOT ()
 * @method static WebComponentsEnum TEMPLATE ()
 */
class WebComponentsEnum extends HTMLElementEnum
{
	const CONTENT = 'content';
	const ELEMENT = 'element';
	const SHADOW = 'shadow';
	const SLOT = 'slot';
	const TEMPLATE = 'template';
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/15/17
 * Time: 8:03 PM
 */

namespace HTML\ElementEnumerations;

/**
 * Class TextContentEnum
 * @package App\HTML\ElementEnumerations
 *
 * @method static TextContentEnum BLOCKQUOTE()
 * @method static TextContentEnum DD()
 * @method static TextContentEnum DIV()
 * @method static TextContentEnum DL()
 * @method static TextContentEnum DT()
 * @method static TextContentEnum FIGCAPTION()
 * @method static TextContentEnum FIGURE()
 * @method static TextContentEnum HR()
 * @method static TextContentEnum LI()
 * @method static TextContentEnum MAIN()
 * @method static TextContentEnum OL()
 * @method static TextContentEnum P()
 * @method static TextContentEnum PRE()
 * @method static TextContentEnum UL()
 */
class TextContentEnum extends HTMLElementEnum
{
	const BLOCKQUOTE = 'blockquote';
	const DD = 'dd';
	const DIV = 'div';
	const DL = 'dl';
	const DT = 'dt';
	const FIGCAPTION = 'figcaption';
	const FIGURE = 'figure';
	const HR = 'hr';
	const LI = 'li';
	const MAIN = 'main';
	const OL = 'ol';
	const P = 'p';
	const PRE = 'pre';
	const UL = 'ul';
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/15/17
 * Time: 8:00 PM
 */

namespace HTML\ElementEnumerations;

/**
 * Class DocumentMetadataEnum
 * @package App\HTML\ElementEnumerations
 *
 * @method static BASE()
 * @method static LINK()
 * @method static META()
 * @method static STYLE()
 * @method static TITLE()
 */
class DocumentMetadataEnum extends HTMLElementEnum
{
	const BASE = 'base';
	const LINK = 'link';
	const META = 'meta';
	const STYLE = 'style';
	const TITLE = 'title';
}
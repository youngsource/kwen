<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/15/17
 * Time: 8:11 PM
 */

namespace HTML\ElementEnumerations;

/**
 * Class EmbeddedContentEnum
 * @package App\HTML\ElementEnumerations
 *
 * @method static EmbeddedContentEnum EMBED()
 * @method static EmbeddedContentEnum OBJECT()
 * @method static EmbeddedContentEnum PARAM()
 * @method static EmbeddedContentEnum SOURCE()
 */
class EmbeddedContentEnum extends HTMLElementEnum
{
	const EMBED = 'embed';
	const OBJECT = 'object';
	const PARAM = 'param';
	const SOURCE = 'source';
}
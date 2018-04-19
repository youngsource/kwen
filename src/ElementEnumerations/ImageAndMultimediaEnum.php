<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/15/17
 * Time: 8:10 PM
 */

namespace HTML\ElementEnumerations;

/**\
 * Class ImageAndMultimediaEnum
 * @package App\HTML\ElementEnumerations
 *
 * @method static ImageAndMultimediaEnum AUDIO()
 * @method static ImageAndMultimediaEnum IMG()
 * @method static ImageAndMultimediaEnum MAP()
 * @method static ImageAndMultimediaEnum TRACK()
 * @method static ImageAndMultimediaEnum VIDEO()
 */
class ImageAndMultimediaEnum extends HTMLElementEnum
{
	const AREA = 'area';
	const AUDIO = 'audio';
	const IMG = 'img';
	const MAP = 'map';
	const TRACK = 'track';
	const VIDEO = 'video';
}
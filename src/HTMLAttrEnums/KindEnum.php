<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/1/17
 * Time: 10:16 AM
 */

namespace HTML\HTMLAttrEnums;


use App\TypedEnum;

/**
 * Class KindEnum
 * @package HTML\HTMLAttrEnums
 *
 * @method static KindEnum SUBTITLES()
 * @method static KindEnum CAPTIONS()
 * @method static KindEnum DESCRIPTIONS()
 * @method static KindEnum CHAPTERS()
 * @method static KindEnum METADATA()
 */
class KindEnum extends TypedEnum
{
	const SUBTITLES = 'subtitles';
	const CAPTIONS = 'captions';
	const DESCRIPTIONS = 'descriptions';
	const CHAPTERS = 'chapters';
	const METADATA = 'metadata';
}
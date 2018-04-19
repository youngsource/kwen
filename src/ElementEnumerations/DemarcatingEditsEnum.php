<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/15/17
 * Time: 8:20 PM
 */

namespace HTML\ElementEnumerations;

/**
 * Class DemarcatingEditsEnum
 * @package App\HTML\ElementEnumerations
 *
 * @method static DemarcatingEditsEnum DEL()
 * @method static DemarcatingEditsEnum INS()
 */
class DemarcatingEditsEnum extends HTMLElementEnum
{
	const DEL = 'del';
	const INS = 'ins';
}
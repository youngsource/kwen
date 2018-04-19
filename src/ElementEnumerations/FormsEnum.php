<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/15/17
 * Time: 8:22 PM
 */

namespace HTML\ElementEnumerations;

/**
 * Class FormsEnum
 * @package App\HTML\ElementEnumerations
 *
 * @method static FormsEnum BUTTON()
 * @method static FormsEnum DATALIST()
 * @method static FormsEnum FIELDSET()
 * @method static FormsEnum FORM()
 * @method static FormsEnum INPUT()
 * @method static FormsEnum LABEL()
 * @method static FormsEnum LEGEND()
 * @method static FormsEnum METER()
 * @method static FormsEnum OPTGROUP()
 * @method static FormsEnum OPTION()
 * @method static FormsEnum OUTPUT()
 * @method static FormsEnum PROGRESS()
 * @method static FormsEnum SELECT()
 * @method static FormsEnum TEXTAREA()
 */
class FormsEnum extends HTMLElementEnum
{
	const BUTTON = 'button';
	const DATALIST = 'datalist';
	const FIELDSET = 'fieldset';
	const FORM = 'form';
	const INPUT = 'input';
	const LABEL = 'label';
	const LEGEND = 'legend';
	const METER = 'meter';
	const OPTGROUP = 'optgroup';
	const OPTION = 'option';
	const OUTPUT = 'output';
	const PROGRESS = 'progress';
	const SELECT = 'select';
	const TEXTAREA = 'textarea';
}
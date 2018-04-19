<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:47 PM
 */

namespace HTML\Forms\TypeSpecializations;


use HTML\AttributeTraits\Placeholder;
use HTML\AttributeTraits\Readonly;
use HTML\Forms\Input;

class DatetimeLocal extends Input
{
    use Placeholder, Readonly;
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:48 PM
 */

namespace HTML\Forms\TypeSpecializations;


use HTML\AttributeTraits\Maxlength;
use HTML\AttributeTraits\Minlength;
use HTML\AttributeTraits\Pattern;
use HTML\AttributeTraits\Placeholder;
use HTML\AttributeTraits\Readonly;
use HTML\AttributeTraits\Size;
use HTML\Forms\Input;

class Tel extends Input
{
    use Maxlength, Minlength, Pattern, Placeholder, Readonly, Size;
}
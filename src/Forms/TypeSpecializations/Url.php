<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:42 PM
 */

namespace HTML\Forms\TypeSpecializations;


use HTML\AttributeTraits\InputMode;
use HTML\AttributeTraits\List_;
use HTML\AttributeTraits\Pattern;
use HTML\AttributeTraits\Placeholder;
use HTML\AttributeTraits\Readonly;
use HTML\AttributeTraits\Size;
use HTML\Forms\Input;

class Url extends Input
{
    use InputMode, List_, Pattern, Placeholder, Readonly, Size;
}
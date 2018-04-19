<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:39 PM
 */

namespace HTML\Forms\TypeSpecializations;


use HTML\AttributeTraits\Height;
use HTML\AttributeTraits\Src;
use HTML\AttributeTraits\Width;
use HTML\Forms\Input;

class Image extends Input
{
    use Height, Src, Width;
}
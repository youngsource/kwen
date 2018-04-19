<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:35 PM
 */

namespace HTML\Forms\TypeSpecializations;


use HTML\AttributeTraits\Accept;
use HTML\AttributeTraits\Capture;
use HTML\Forms\Input;

class File extends Input
{
    use Accept, Capture;
}
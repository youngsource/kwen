<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 12:04 PM
 */

namespace HTML\LogicTraits;


use HTML\Forms\Label;

trait LabelAble
{
    public function generateLabel()
    {
        return new Label($this->getId(), $this->getName());
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/4/17
 * Time: 6:46 PM
 */

namespace HTML\Scripting;


use HTML\DOMElement;
use HTML\ElementEnumerations\HTMLElementEnum;

abstract class Scripting extends DOMElement
{
	function __construct(HTMLElementEnum $element, $selfClosing = false, $id = "", $classes = "") { parent::__construct($element, $selfClosing, $id, $classes); }
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/25/17
 * Time: 11:01 AM
 */

namespace HTML\Forms;


use HTML\AttributeTraits\Disabled;
use HTML\AttributeTraits\Selected;
use HTML\AttributeTraits\Label;
use HTML\AttributeTraits\Value;
use HTML\DOMElement;
use HTML\ElementEnumerations\FormsEnum;

/**
 * Class Option
 * The HTML <option> element is used to define an item contained in a <select>, an <optgroup>, or a <datalist> element. As such, <option> can represent menu items in popups and other lists of items in an HTML document.
 *
 * @package HTML\Forms
 */
class Option extends Forms
{
	use Selected, Disabled, Label, Value;

    /**
     * Option constructor.
     * @param string $innerhtml
     * @param bool $selected
     */
	function __construct(string $innerhtml, bool $selected=false)
	{
		parent::__construct(FormsEnum::OPTION(), false);
		$this->setInnerhtml($innerhtml);
		$this->setSelected($selected);
	}

	public function canHaveAsChild($elem)
    {
        return false;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/20/17
 * Time: 5:59 PM
 */

namespace HTML;


use App\Helpers\Helper;
use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\DropzoneEnum;

trait DOMElementExperimental
{
	/**
	 * set this DOMElement draggable or not
	 *
	 * @param string $val
	 */
	public function setDraggable(bool $val)
	{
	$this->setAttribute(HTMLAttributeEnum::DIR(), Helper::boolToString($val));
	}

	/**
	 * returns whether or not the DOMElement is draggable
	 *
	 * @return string
	 */
	public function isDraggable()
	: bool
	{
	return Helper::stringToBool($this->getAttribute(HTMLAttributeEnum::DIR()));
	}

	/**
	 * sets the dropzone type
	 *
	 * @param DropzoneEnum $val
	 */
	public function setDropzone(DropzoneEnum $val)
	{
	$this->setAttribute(HTMLAttributeEnum::DRAGGABLE(), $val->getVal());
	}

	/**
	 * returns the dropzone type
	 *
	 * @return string
	 * @basic
	 */
	public function getDropzone()
	: string
	{
	return $this->getAttribute(HTMLAttributeEnum::DRAGGABLE());
	}

	public function setSlot(string $val)
	{
		$this->setAttribute(HTMLAttributeEnum::ITEMPROP(), $val);
	}

	public function getSlot()
	{
		return $this->getAttribute(HTMLAttributeEnum::ITEMPROP());
	}

	public function setSpellcheck(string $val)
	{
		$this->setAttribute(HTMLAttributeEnum::SLOT(), $val);
	}

	public function getSpellcheck()
	{
		return $this->getAttribute(HTMLAttributeEnum::SLOT());
	}
}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/16/17
 * Time: 12:25 PM
 */

namespace HTML\Bootstrap;


use HTML\Forms\TypeSpecializations\Submit;

class BootstrapKeyValEntry extends BootstrapRow
{
	public function __construct(BootstrapInput $key, BootstrapInput $val, Submit $removeBtn)
	{
		parent::__construct("", "container");
		$this->setKey($key);
		$this->setVal($val);
		$this->setRemoveBtn($removeBtn);
		$this->addChildren($key, $val, $removeBtn);
	}

	public function standardTemplate(): BootstrapRow
	{
		/** @var BootstrapInput $key */
		$key = $this->getKey()->standardTemplate();
		/** @var BootstrapEuroInput $val */
		$val = $this->getVal()->standardTemplate();
		return new BootstrapKeyValEntry($key, $val, $this->getRemoveBtn()->generateDomTemplate());
	}

	private $key, $val;
	/** @var  Submit $removeBtn */
	private $removeBtn;

	/**
	 * @return Submit
	 */
	public function getRemoveBtn(): Submit
	{
		return $this->removeBtn;
	}

	/**
	 * @param Submit $removeBtn
	 */
	public function setRemoveBtn(Submit $removeBtn)
	{
		$this->removeBtn = $removeBtn;
	}

	/**
	 * @return BootstrapInput
	 */
	public function getKey()
	: BootstrapInput
	{
		return $this->key;
	}

	/**
	 * @param BootstrapInput $key
	 */
	public function setKey(BootstrapInput $key)
	{
		$this->key = $key;
	}

	/**
	 * @return BootstrapInput
	 */
	public function getVal()
	: BootstrapInput
	{
		return $this->val;
	}

	/**
	 * @param BootstrapInput $val
	 */
	public function setVal(BootstrapInput $val)
	{
		$this->val = $val;
	}
}
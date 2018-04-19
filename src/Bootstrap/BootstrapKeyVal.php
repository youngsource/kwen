<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 7/13/17
 * Time: 11:05 AM
 */

namespace HTML\Bootstrap;




use HTML\Forms\TextContent\Div;
use HTML\Forms\TypeSpecializations\Submit;

class BootstrapKeyVal extends BootstrapRow
{
	public function __construct(string $keyName, string $valName, string $name, string $classes="")
	{
		parent::__construct("", $classes . " row ");
		$this->setName($name);
		$this->addClass(" dynamic_key_val ");
		$this->setKeyName(str_replace(' ', '_', $keyName));
		$this->setValName(str_replace(' ', '_', $valName));

		$div = new Div("","container");
		$newButton = new Submit("nieuwe " . str_replace("_", " ", $name) . " toevoegen");
		$newButton->addClass("new_key_val btn");
		$div->addChild($newButton);
		$this->addChild($div);

		if (is_null($this->coreKey))
			$this->setCoreKey($this->generateCoreKey());
		if (is_null($this->coreVal))
			$this->setCoreVal($this->generateCoreVal());

		$this->setDOMTemplate($this->standardTemplate());
	}

	private function generateCoreKey()
	: BootstrapInput
	{
		return new BootstrapInput($this->getKeyName());
	}

	private function generateCoreVal()
	: BootstrapInput
	{
		return new BootstrapEuroInput($this->getValName());
	}

	public function print()
		: string
	{
		$tbr = parent::print();
		$tbr .= $this->getDOMTemplate()->print();
		return $tbr;
	}

	/** @var BootstrapKeyValEntry $DOMTemplate */
	private $DOMTemplate = null;
	/** @var string $keyName */
	private $keyName="";
	/** @var string $name */
	private $name = "";

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getKeyName()
	: string
	{
		return $this->keyName;
	}

	/**
	 * @param string $keyName
	 */
	public function setKeyName(string $keyName)
	{
		$this->keyName = $keyName;
	}

	/**
	 * @return string
	 */
	public function getValName()
	: string
	{
		return $this->valName;
	}

	/**
	 * @param string $valName
	 */
	public function setValName(string $valName)
	{
		$this->valName = $valName;
	}
	/** @var string $keyName */
	private $valName="";

	public function standardTemplate()
	: BootstrapRow
	{
		$key = $this->generateCoreKey();
		$val = $this->generateCoreVal();
		$removeInput = new Submit("verwijder " . str_replace("_", " ",$this->getName()));
		$removeInput->addClass("delete_entry btn btn-sm btn-danger");
		$tbr = new BootstrapKeyValEntry($key, $val, $removeInput);
		$tbr->addClass(" index_template invisible ");
		return $tbr;
	}

	private $coreKey = null;

	/**
	 * @return BootstrapInput
	 */
	public function getCoreKey()
	: BootstrapInput
	{
		return $this->coreKey;
	}

	/**
	 * @param BootstrapInput $coreKey
	 */
	public function setCoreKey(BootstrapInput $coreKey)
	{
		$this->coreKey = $coreKey;
	}

	/**
	 * @return BootstrapInput
	 */
	public function getCoreVal()
	: BootstrapInput
	{
		return $this->coreVal;
	}

	/**
	 * @param BootstrapInput $coreVal
	 */
	public function setCoreVal(BootstrapInput $coreVal)
	{
		$this->coreVal = $coreVal;
	}

	private $coreVal = null;

	public function addCollection(array $collection)
	{
		$i = 0;
		foreach($collection as $key => $val)
		{
			if ($val !== null && $key !== null) {
				/** @var BootstrapKeyValEntry $entry */
				$entry = $this->standardTemplate(); //force it to generate a new one, deep clone is not feasable in this language
				$entry->removeClass("index_template invisible ");
				$entry->getKey()->setValue($key);
				$entry->getKey()->setName($this->getKeyName() . "_" . $i);

				$entry->getVal()->setValue($val);
				$entry->getVal()->setName($this->getValName() . "_" . $i);

				$this->addChild($entry);
				++$i;
			}
		}
	}

	public function getDOMTemplate()
	: BootstrapKeyValEntry
	{
		return $this->DOMTemplate;
	}

	private function setDOMTemplate(BootstrapRow $template)
	{
		$this->DOMTemplate = $template;
	}
}
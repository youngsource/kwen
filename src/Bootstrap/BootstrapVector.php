<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/29/17
 * Time: 6:13 AM
 */

namespace HTML\Bootstrap;

use App\Helpers\Helper;
use HTML\Forms\Button;
use HTML\Forms\TypeSpecializations\Hidden;
use HTML\HTMLAttrEnums\ButtonTypeEnum;
use HTML\Scripting\Script;
use HTML\TextContent\Div;

class BootstrapVector extends BootstrapDiv
{
	/**
	 * BootstrapVector constructor.
	 * @param string $name
	 * @param BootstrapTuple $template
	 */
	public function __construct(string $name, BootstrapTuple $template)
	{
		parent::__construct("", "form-group Kwen-vector");
		$this->loadRandomAggregator();
		$template->setData(self::aggregatorKeyName, $this->getAggregatorKey());
		$this->buildDOMStructure($name, $template);
	}

	const aggregatorKeyName = "aggregatorkey";

	/**
	 * @var string[]
	 */
	private static $REGISTERED_KEYS = [];

	/**
	 * @return string[]
	 */
	private static function getRegisteredKeys()
	: array
	{
		return self::$REGISTERED_KEYS;
	}

	private static function hasRegisteredKey(string $key)
	: bool
	{
		return (array_search($key, self::getRegisteredKeys()) !== false);
	}

	private static function addRegisteredKey(string $key)
	{
		array_push(self::$REGISTERED_KEYS, $key);
	}


	private function buildDOMStructure(string $name, BootstrapTuple $template)
	{
		$cont = new Div("", "row");
		$newButton = new Button(ButtonTypeEnum::BUTTON(),  "btn", "nieuwe " . str_replace("_", " ", $name) . " toevoegen");
		$newButton->addClass("button kwen-vec-push-back")->setData(self::aggregatorKeyName, $this->getAggregatorKey());

		$this->addChild($cont->addChild($newButton)->addChild($template));
		$template->addChild(new Hidden("Kwen-vec-aggregatorkey",$this->getAggregatorKey()));
		$this->setTemplate($template->hide()->addClass("Kwen-tuple-template")->setData("new-index", "0"));
		$this->addChild(new Script(url("js/Kwen/vector.js")));
		$template->addAsInput(new Button(ButtonTypeEnum::BUTTON(), "btn btn-danger Kwen-tuple-delete", "verwijder"));
	}

	private $aggregatorKey = "";

	/**
	 * @return string
	 */
	public function getAggregatorKey(): string
	{
		return $this->aggregatorKey;
	}

	/**
	 * @param string $aggregatorKey
	 */
	public function setAggregatorKey(string $aggregatorKey)
	{
		$this->aggregatorKey = $aggregatorKey;
	}

	private function generateRandomAggregator()
	: string
	{
		do {
			$key = str_random(4);
		} while(self::hasRegisteredKey($key));

		return $key;
	}

	private function loadRandomAggregator()
	{
		$key = $this->generateRandomAggregator();
		self::addRegisteredKey($key);
		$this->setAggregatorKey($key);
		$this->setData(self::aggregatorKeyName, $this->getAggregatorKey());
	}

	public function pushBack(BootstrapTuple $tuple)
	{
		$this->addChild($tuple);
		$tuple->addAsInput(new Button(ButtonTypeEnum::BUTTON(), "btn btn-danger Kwen-tuple-delete", "verwijder"));
		/** @var BootstrapTuple $input */
		foreach(array_flatten($tuple->getCoreInputs()) as $input)
			$input->setName($input->getName() . "_" . $this->getIndex());

		++$this->index;
		$this->getTemplate()->setData("new-index", $this->getIndex());
	}

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

	/** @var BootstrapTuple $template */
	private $template = null;

	/**
	 * @return BootstrapTuple
	 */
	public function getTemplate(): Div
	{
		return $this->template;
	}

	/**
	 * @param Div $template
	 */
	public function setTemplate(Div $template)
	{
		$this->template = $template;
	}

	public  function generateDOMTemplate()
	: BootstrapDiv
	{
		/** @var BootstrapTuple $bd */
		$bd = $this->getTemplate()->generateDOMTemplate();
		$bd->addClass(self::templateClassTags);
		return $bd;
	}

	private const templateClassTags =  "template tuple";

	private $index = 0;

	/**
	 * @return int
	 */
	public function getIndex(): int
	{
		return $this->index;
	}

	/**
	 * @param int $index
	 */
	public function setIndex(int $index)
	{
		$this->index = $index;
	}

	/**
	 * @param array ...$collection
	 * @return $this
	 */
	public function addCollection(...$collection)
	{
		/** @var BootstrapInputControl[] $collection */
		$collection = Helper::freeInputToArray($collection);

		foreach($collection as $elem) {
			$this->addChild($elem);
			foreach($elem->getChildren() as $child) {
				if ($child instanceof BootstrapInputControl) {
					$child->setName($child->getName() . "_" . $this->getIndex())
						->setData(self::aggregatorKeyName, $this->getData(self::aggregatorKeyName));
				}
			}
			++$this->index;
		}

		return $this;
	}
}
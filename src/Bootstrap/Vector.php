<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/29/17
 * Time: 6:13 AM
 */

declare(strict_types=1);

namespace HTML\Bootstrap;

use App\Helpers\Helper;
use HTML\Exceptions\TypeMismatchException;
use HTML\Forms\Button;
use HTML\Generic;
use HTML\Kwen;
use HTML\TextContent\Div;
use HTML\HTMLAttrEnums\ButtonTypeEnum;

class Vector extends BootstrapRow implements Generic
{
	/**
	 * BootstrapVector constructor.
	 *
	 * @pre 	The template must take care it is cloneable.
	 *
	 * @param string $name
	 * @param BootstrapTuple $template
	 */
	public function __construct(string $name, string $templateClass)
	{
		parent::__construct("", "form-group Kwen-vector");
		$this->setName($name);
		$this->setTemplateClass($templateClass);
		$this->vector = new \Ds\Vector();
		$this->loadRandomAggregator();
		$this->buildGraphicalTemplate($name, $templateClass);
		$this->buildDOMStructure();
	}

	/****************************************************************************************************
	 * everything about generic enforcement
	 */
	private $templateClass = "";

	private function setTemplateClass(string $template) { $this->templateClass = $template; }
	public function getTemplateClass(): string { return $this->templateClass; }

	public function canHaveAsItem($item)
	{
		return (Helper::gtc($item) === $this->getTemplateClass());
	}

	public static function buildType(...$templates): string
	{
		if (count($templates) !== 1)
			throw new \InvalidArgumentException("Can only have one template!");

		return Vector::class . "<" . $templates[0] . ">";
	}

	public function decltype(): string { return self::buildType($this->getTemplateClass()); }

	/****************************************************************************************************
	 * Everything about internal logic
	 */

	/** @var  \Ds\Vector */
	private $vector;
	private $name = "";

	public function pushBack($item)
	{
		if (!$this->canHaveAsItem($item))
			throw new TypeMismatchException($this->getTemplateClass(), Helper::gtc($item));

		$this->vector->push($item);
	}

	public function getName(): string { return $this->name; }
	public function setName(string $name) { $this->name = $name; }
	public function get($i) { return $this->vector[$i]; }


	/**public function pushBack($val)
	{
		if (get_class($val) !== g)
			$this->addChild($tuple);
		$tuple->addAsInput(new Button(ButtonTypeEnum::BUTTON(), "btn btn-danger Kwen-tuple-delete", "verwijder"));
		/** @var BootstrapTuple $input
		foreach(array_flatten($tuple->getCoreInputs()) as $input)
			$input->setName($input->getName() . "_" . $this->getIndex());

		++$this->index;
		$this->getTemplate()->setData("new-index", $this->getIndex());
	}*/

	/****************************************************************************************************
	 * Everything about graphical implementation
	 */

	/** @var  BootstrapTuple */
	private $graphicalTemplate;

	/** @return BootstrapTuple */
	private function getGraphicalTemplate(): BootstrapTuple { return $this->graphicalTemplate; }
	/** @param BootstrapTuple $graphicalTemplate */
	public function setGraphicalTemplate(BootstrapTuple $graphicalTemplate) { $this->graphicalTemplate = $graphicalTemplate; }


	private function buildDOMStructure(): void
	{
		$test = $this->in(Kwen::bsRow())->
			in($this->buildNewButton($this->getName()))->
			after(Kwen::script("js/Kwen/vector.js"))->
			after($this->getGraphicalTemplate());
	}

	private function buildNewButton(string $name): Button
	{
		return Kwen::button(ButtonTypeEnum::BUTTON(), "nieuwe " . str_replace("_", " ", $name) . " toevoegen")->
					addClass("button Kwen-vec-push-back");
	}

	private function buildGraphicalTemplate(string $name, $template): void
	{
		$template = BootstrapTuple::create($name, $template, bsBtnDanger::class);
		$template->set(1, $this->generateDeleteButton())->setHidden(true)->addClass("Kwen-tuple-template");
		$this->setGraphicalTemplate($template);
	}

	private function generateDeleteButton(): bsBtnDanger
	{
		return Kwen::bsBtnDanger(ButtonTypeEnum::BUTTON(), "verwijder")->addClass("Kwen-tuple-delete");
	}

	/****************************************************************************************************
	 * Everything about aggregation on front end.
	 */

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





	/** @var BootstrapTuple $template */
	private $template = null;

	/**
	 * @return BootstrapTuple
	 */
	public function cloneTemplate(): Div
	{
		return clone $this->template;
	}

	/**
	 * @param Div $template
	 */
	public function setTemplate(Div $template)
	{
		$this->template = $template;
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
		/** @var BootstrapInput[] $collection */
		$collection = Helper::freeInputToArray($collection);

		foreach($collection as $elem) {
			$this->addChild($elem);
			foreach($elem->getChildren() as $child) {
				if ($child instanceof BootstrapInput) {
					$child->setName($child->getName() . "_" . $this->getIndex())
						->setData(self::aggregatorKeyName, $this->getData(self::aggregatorKeyName));
				}
			}
			++$this->index;
		}

		return $this;
	}


	/****************************************************************************************************
	 * Array access implementation

	public function offsetExists($offset) 		{ $this->vector->offsetExists($offset); 		}
	public function offsetGet($offset) 			{ $this->vector->offsetGet($offset); 			}
	public function offsetSet($offset, $value) 	{ $this->vector->offsetSet($offset, $value); 	}
	public function offsetUnset($offset) 		{ $this->vector->offsetUnset($offset); 			}
	public function getIterator()				{ $this->vector->getIterator();					}*/

}
<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/29/17
 * Time: 5:27 AM
 */

namespace HTML\Bootstrap;

use App\Helpers\Helper;
use Ds\Vector;
use HTML\DOMElement;
use HTML\Generic;
use HTML\Kwen;
use Prophecy\Exception\InvalidArgumentException;

/**
 * Class BootstrapTuple
 * @package HTML\Bootstrap
 */
class BootstrapTuple extends BootstrapRow implements  Generic
{
	/**
	 * BootstrapTuple constructor.
	 *
	 * @param string $name
	 * @param array  ...$classes
	 */
	public function __construct(string $name, ...$inputs)
	{
		parent::__construct("", "row tuple");
		$this->setCoreInputs(new Vector($inputs));
		$this->buildClassList(...$inputs);
		$this->setupFrontendStructure($name, $inputs);
	}

	public static function &create(string $name, string ...$templates): BootstrapTuple
	{
		$tbr = new BootstrapTuple($name);
		$tbr->setTemplateList(new Vector($templates));
		self::fill($tbr->getCoreInputs(), count($templates));
		$tbr->setupFrontendStructure($name, $templates);
		return $tbr;
	}

	private static function fill(Vector $vec, int $times): void
	{
		for($i = 0; $i < $times; ++$i)
			$vec->push(null);
	}

	public static function buildType(...$types):string
	{
		$tbr = BootstrapTuple::class . "<";
		foreach ($types as $type)
			$tbr .= $type . ", ";
		$tbr = rtrim($tbr, ", ");
		return $tbr . ">";
	}

	/** @var Vector */
	private $coreInputs,
			$templateList;

	public function getName(): string 						{ return $this->getData("name"); }
	public function setName(string $name): DOMElement 		{ return $this->setData("name", $name); }
	public function &getCoreInputs(): Vector 				{ return $this->coreInputs; }
	private function setCoreInputs(Vector $vec) 			{ $this->coreInputs = $vec;	}
	private function &getTemplateList(): Vector 			{ return $this->templateList; }
	private function setTemplateList(Vector $templateList) 	{ $this->templateList = $templateList; }

	private function setupFrontendStructure(string $name, array $inputs): void
	{
		$this->setData("name", $name);
		foreach($inputs as $var)
			$this->addChild((Kwen::div("", "col"))->addChild($var));
	}

	public function generateHeading() : BootstrapTuple
	{
		$names = new Vector();
		$names->allocate($this->getChildren()->count());

		$i = 0;
		foreach ($this->getChildren() as $child) {
			if (method_exists($child, "getName"))
				$names->push($child->getName());
			else
				$names->push($i);
			++$i;
		}

		return new BootstrapTuple("heading " . $this->getName(), ...$names);
	}

	private function buildCLassList(...$inputs): void
	{
		$vec = new Vector();
		$vec->allocate(count($inputs));
		$this->setTemplateList($vec);

		foreach ($inputs as $input)
			$this->getTemplateList()->push(Helper::gtc($input));
	}

	public function canHaveAsCoreInputs(...$inputs):bool
	{
		$count = count($inputs);
		for($i = 0; $i < $count; ++$i)
		{
			if (!$this->canHaveAsCoreInput($i, $inputs[$i]))
				return false;
			++$i;
		}
		return true;
	}

	public function canHaveAsCoreInput(int $index, $input): bool
	{
		return ($this->getTemplateList()[$index] === Helper::gtc($input));
	}

	/**
	 * @param int $index
	 * @return DOMElement
	 */
	public function get(int $index)
	{
		return $this->getCoreInputs()[$index];
	}

	public function set(int $index, $val): BootstrapTuple
	{
		if (!$this->canHaveAsCoreInput($index, $val))
			throw new InvalidArgumentException("Cannot have as core input.");

		$this->getCoreInputs()[ $index ] = $val;

		return $this;
	}

	public function setAll(array $vec): void
	{
		$count = count($vec);
		for($i = 0; $i < $count; ++$i)
			$this->set($i, $vec[$i]);
	}

	/**
	 * @inheritdoc
	 */
	public function generateSkeleton(): DOMElement
	{
		$copy = new Vector();

		/** @var DOMElement $core */
		foreach($this->getCoreInputs() as $core)
			$copy->push($core->generateSkeleton());

		return new self($this->getData("name"), ...$copy);
	}

	/**
	 * @return DOMElement
	 */
	public static function generateTemplate(): DOMElement
	{
		return new self("template");
	}

	public function __clone()
	{
		$coreClones = new Vector();
		$coreClones->allocate($this->getCoreInputs()->count());

		foreach($this->getCoreInputs() as $coreInput)
			$coreClones->push(Helper::clone_($coreInput));

		return new BootstrapTuple($this->getName(), ...$coreClones);
	}

	public function toArray(): array { return $this->getCoreInputs()->toArray(); }

	/**
	 * @param array ...$args
	 */
	public function tie(&...$args): void
	{
		$count = count($this->getCoreInputs());
		for ($i = 0; $i < $count; ++$i)
			$args[$i] = $this->getCoreInputs()[$i];
	}



	public function decltype(): string
	{
		return self::buildType(...$this->getTemplateList());
	}
}
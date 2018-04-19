<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/24/17
 * Time: 9:12 PM
 */

namespace HTML\Scripting;


use HTML\AttributeTraits\Src;
use HTML\DOMElement;
use HTML\ElementEnumerations\ScriptingEnum;

class Script extends Scripting
{
    use Src;

    protected $isPhrasingContent = true;
    protected $isFlowContent = true;
    protected $isMetaData = true;

    /** @var Script[] */
    private static $loaded_scripts = [];

    function __construct(string $source)
	{
		parent::__construct(ScriptingEnum::SCRIPT(), false);
		$this->setSrc($source);
		array_push(self::$loaded_scripts, $this);
		return $this;
	}

	private function find(string $source)
	: ?Script
	{
		foreach (self::$loaded_scripts as $loaded_script)
		{
			if($loaded_script->getSrc() === $source)
				return $loaded_script;
		}
		return null;
	}

	/**
	 * @inheritdoc
	 */
	public function generateSkeleton(): DOMElement
	{
		return new Script($this->getSrc());
	}

	/**
	 * @inheritdoc
	 */
	public static function standardTemplate(): DOMElement
	{
		return new Script("template");
	}
}
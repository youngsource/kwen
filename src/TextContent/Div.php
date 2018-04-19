<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/8/17
 * Time: 7:50 PM
 */

namespace HTML\TextContent;

use HTML\DOMElement;
use HTML\ElementEnumerations\TextContentEnum;

/**
 * Class Div
 * The HTML <div> element is the generic container for flow content and does not inherently represent anything. Use it to group elements for purposes such as styling (using the class or id attributes), marking a section of a document in a different language (using the lang attribute), and so on.
 *
 * @package HTML\TextContent
 */
class Div extends TextContent
{
    protected $isFlowContent = true;
    protected $isPalpableContent = true;

    /**
     * Div constructor.
     * @param string $id
     * @param string $classes
     */
	public function __construct(string $id = "", string $classes = "")
	{
		parent::__construct(TextContentEnum::DIV(), $id, $classes);
	}

	public function canHaveAsChild($elem)
    {
    	if ($elem instanceof DOMElement)
    		return parent::canHaveAsChild($elem) && method_exists($elem, "isFlowContent");

        return parent::canHaveAsChild($elem);
    }

    /****************************************************************************************************
     * Factory implementations.
     */

    public static function standardTemplate(): DOMElement
	{
		return new Div();
	}

	/**
	 * @inheritdoc
	 */
	public function generateSkeleton(): DOMElement
	{
		return new Div($this->getId(), $this->getClasses());
	}
}
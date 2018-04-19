<?php
	declare(strict_types=1);

	namespace HTML;

	use App\Helpers\Helper;
	use Ds\Stack;
	use Ds\Vector;
	use HTML\AttributeTraits\Accesskey;
	use HTML\AttributeTraits\Class_;
	use HTML\AttributeTraits\Contenteditable;
	use HTML\AttributeTraits\Contextmenu;
	use HTML\AttributeTraits\Data;
	use HTML\AttributeTraits\Dir;
	use HTML\AttributeTraits\Draggable;
	use HTML\AttributeTraits\Dropzone;
	use HTML\AttributeTraits\Hidden;
	use HTML\AttributeTraits\Id;
	use HTML\AttributeTraits\Lang;
	use HTML\AttributeTraits\Spellcheck;
	use HTML\AttributeTraits\Style;
	use HTML\AttributeTraits\Tabindex;
	use HTML\AttributeTraits\Title;
	use HTML\AttributeTraits\Translate;
	use HTML\Bootstrap\BootstrapTuple;
	use HTML\ElementEnumerations\HTMLAttributeEnum;
	use HTML\ElementEnumerations\HTMLElementEnum;
	use Symfony\Component\Console\Exception\LogicException;


	/**
	 * @class        DOMElement
	 * class representing a DOM element
	 *
	 * This is a class om representing a dom element
	 *
	 * @invariant    each DOMElement must be able to have its attributes as its own attributes
	 *              | canHaveAsAttributes(this.getAttributes())
	 * @invariant    each DOMElement must be able to have its own innerHTML
	 *            | canHaveAsInnerHTML(this.getInnerHTML())
	 *
	 *
	 */
	abstract class DOMElement
	{
		use Accesskey, Generator, Class_, Contenteditable, Contextmenu, Data, Dir,
			Draggable, Dropzone, Hidden, Id, Lang, Spellcheck, Style, Tabindex,
			Title, Translate;

		/**
		 * checks to see if the given DOMElement can have the given attribute as its attribute
		 *
		 * @param HTMLAttributeEnum $enum
		 *
		 * @return bool true
		 * @note         this method only makes sense if it is overridden
		 * @noinspection PhpUnusedParameterInspection
		 */
		public function canHaveAsAttribute(HTMLAttributeEnum $enum): bool
		{
			return true;
		}


		/**
		 * Gets the attribute.
		 *
		 * @param      HTMLAttributeEnum $attribute The attribute to be fetched
		 *
		 * @return     string  The attribute value if it exists, an empty string otherwise
		 */
		public function getAttribute(HTMLAttributeEnum $attribute): string
		{
			return ($this->hasAttribute($attribute)) ? $this->attributes[ $attribute->getVal() ] : "";
		}

		/**
		 * @return array
		 * @basic
		 */
		public function &getAttributes(): array
		{
			return $this->attributes;
		}

		/**
		 * removes the given attribute if it exists
		 *
		 * @param HTMLAttributeEnum $attribute the attribute to be removed
		 *
		 * @post    the given attribute will be removed
		 *        | new.hasAttribute($attribute) == false
		 * @return $this
		 */
		public function removeAttribute(HTMLAttributeEnum $attribute)
		{
			if ($this->hasAttribute($attribute))
				unset($this->attributes[ $attribute->getVal() ]);

			return $this;
		}

		/**
		 * checks to see if the element has the given attribute
		 *
		 * @param HTMLAttributeEnum $attribute
		 *
		 * @return bool true if the attribute is set
		 */
		public function hasAttribute(HTMLAttributeEnum $attribute): bool
		{
			return (isset($this->attributes[ $attribute->getVal() ]));
		}

		/**
		 * DOMElement constructor.
		 *
		 * @param HTMLElementEnum $element     the HTMLElement this DOMElement needs to be
		 * @param string          $id          the id of this element
		 * @param string          $classes     the classes of this element
		 * @param bool            $selfClosing argument determining whether or not the DOMElement is self closing
		 */
		function __construct(HTMLElementEnum $element, bool $selfClosing = false, string $id = "", string $classes = "")
		{
			$this->setElement($element);

			$this->setSelfClosing($selfClosing);

			if ($id !== "")
				$this->setId($id);

			if ($classes !== "")
				$this->setClasses($classes);

			$this->children = new Vector();
		}

		/****************************************************************************************************
		 * Everything to do with Children
		 */

		/** @var Vector  */
		private $children;

		protected $isMetaData = false;
		protected $isFlowContent = false;
		protected $isSectioningContent = false;
		protected $isHeadingContent = false;
		protected $isPhrasingContent = false;
		protected $isEmbeddedContent = false;
		protected $isInteractiveContent = false;
		protected $isPalpableContent = false;
		protected $isFormAssociatedContent = false;

		/**
		 * Elements belonging to the metadata content category modify the presentation or the behavior of the rest of
		 * the document, set up links to other documents, or convey other out of band information.
		 *
		 * @return bool
		 */
		public function isMetaData(): bool
		{
			return $this->isMetaData;
		}

		/**
		 * Elements belonging to the flow content category typically contain text or embedded content.
		 *
		 * @return bool
		 */
		public function isFlowContent(): bool
		{
			return $this->isFlowContent;
		}

		/**
		 * Elements belonging to the sectioning content model create a section in the current outline that defines the
		 * scope of  <header> elements, <footer> elements, and heading content.
		 *
		 * @return bool
		 */
		public function isSectioningContent(): bool
		{
			return $this->isSectioningContent;
		}

		/**
		 * Heading content defines the title of a section, whether marked by an explicit sectioning content element or
		 * implicitly defined by the heading content itself.
		 *
		 * @return bool
		 */
		public function isHeadingContent(): bool
		{
			return $this->isHeadingContent;
		}

		/**
		 * Phrasing content defines the text and the mark-up it contains. Runs of phrasing content make up paragraphs.
		 *
		 * @return bool
		 */
		public function isPhrasingContent(): bool
		{
			return $this->isPhrasingContent;
		}

		/**
		 * Embedded content imports another resource or inserts content from another mark-up language or namespace into
		 * the document.
		 *
		 * @return bool
		 */
		public function isEmbeddedContent(): bool
		{
			return $this->isEmbeddedContent;
		}

		/**
		 * Interactive content includes elements that are specifically designed for user interaction.
		 *
		 * @return bool
		 */
		public function isInteractiveContent(): bool
		{
			return $this->isInteractiveContent;
		}

		/**
		 * A content is palpable when it's either empty or hidden. Elements whose model is flow content or phrasing
		 * content should have at least one node which is palpable.
		 *
		 * @return bool
		 */
		public function isPalpableContent(): bool
		{
			return $this->isPalpableContent;
		}

		/**
		 * Form-associated content comprises elements that have a form owner, exposed by a form attribute. A form owner
		 * is either the containing <form> element or the element whose id is specified in the form attribute.
		 *
		 * @return bool
		 */
		public function isFormAssociatedContent(): bool
		{
			return $this->isFormAssociatedContent;
		}

		/**
		 * filters the first parent element where the closure returns true.
		 *
		 * @param \Closure $check
		 *
		 * @return DOMElement|null
		 */
		public function findToRoot(\Closure $check)
		{
			$curr = $this;
			do {
				if ($check->call($curr, $curr))
					return $curr;

				$curr = $curr->getParent();
			} while ($curr->getParent());

			return null;
		}

		/**
		 * @param \Closure $check
		 *
		 * @return DOMElement|null
		 */
		public function findDescendant(\Closure $check): ?DOMElement
		{
			$stack = new Stack([$this]);
			$curr = null;
			while ($stack->count() > 0) {
				$curr = $stack->pop();
				if ($check->call($curr, $curr))
					return $curr;

				foreach ($curr->getChildren() as $descendant)
					$stack->push($descendant);
			}

			return null;
		}

		/**
		 * parameter determinig whether or not the element is selfClosing
		 * @var bool
		 */
		private $selfClosing = false;

		/**
		 * @return bool
		 * @basic
		 */
		public function isSelfClosing(): bool
		{
			return $this->selfClosing;
		}

		/**
		 * @param DOMElement $elem
		 *
		 * @return bool
		 */
		public function canHaveAsChild($elem)
		{
			return !$this->isSelfClosing();
		}

		/**
		 * @param bool $selfClosing
		 *
		 * @return $this
		 * @raw
		 */
		protected function setSelfClosing(bool $selfClosing)
		{
			$this->selfClosing = $selfClosing;

			return $this;
		}

		/**
		 * inserts a child at the given position
		 *
		 * @param int        $pos the position the child needs to be inserted at, works the same as php array
		 *                        positioning
		 * @param DOMElement $DOM the DOMElement to be inserted
		 *
		 * @pre     the position must be lower than the length of the list of children and be higher or equal to zero
		 *      | pos >= 0 && pos < this.getChildren().length
		 * @throws  \LogicException if the DOMElement is selfClosing
		 *        | isSelfClosing == true
		 *
		 * @post    the domelement will be inserted at the given position
		 *        | new.getChildren()[pos] == dom
		 * @return $this
		 */
		public function insertChildAt(int $pos, DOMElement $DOM)
		: DOMElement
		{
			if ($this->isSelfClosing() === true)
				throw new \LogicException("this DOMElement is selfclosing \n" . var_dump($this));

			$this->children->insert($pos, $DOM);
			$DOM->setParent($this);
			return $this;
		}

		public function before(DOMElement $elem=null)
		: DOMElement
		{
			$index = $this->getSiblings()->find($this);
			return $this->insertChildAt($index, $elem);
		}

		public function after(DOMElement $elem)
		: DOMElement
		{
			$index = $this->getSiblings()->find($this);

			if ($index === $this->getSiblings()->count() - 1)
				return $this->getParent()->addChild($elem);
			else
				return $this->getParent()->insertChildAt($index + 1, $elem);
		}

		/**
		 * checks to see if the DOMElement contains children
		 *
		 * @return bool true if the count of getchildren is equal to zero
		 *            | result == this.getChildren().length === 0
		 */
		public function hasChildren(): bool
		{
			return !$this->getChildren()->isEmpty();
		}

		/**
		 * @return DOMElement[]&
		 * @basic
		 */
		public function &getChildren(): Vector
		{
			return $this->children;
		}

		/**
		 * add a child at the end of the childrens' list
		 *
		 * @param DOMElement $elem the element to be added
		 *
		 * @throws  \LogicException if the DOMElement is selfClosing
		 *        | isSelfClosing == true
		 * @post    the child will be pushed back at the end
		 *        | end(getChildren()) == elem
		 * @return $this
		 */
		public function addChild($elem)
		{
			if (!$this->canHaveAsChild($elem))
				throw new \LogicException("this DOMElement is selfclosing \n" . var_dump($this));

			$this->children->push($elem);

			if ($elem instanceof DOMElement)
				$elem->setParent($this);

			return $this;
		}

		private $parent;

		private function setParent(?DOMElement $parent)
		{
			$this->parent = $parent;
		}

		public function getParent(): ?DOMElement
		{
			return $this->parent;
		}

		/**
		 * @param DOMElement $elem
		 *
		 * @return DOMElement
		 */
		public function in(DOMElement $elem): DOMElement
		{
			$this->addChild($elem);

			return $elem;
		}

		public function child(DOMElement $element): DOMElement
		{
			return $this->addChild($element);
		}

		/**
		 * @return DOMElement
		 */
		public function up(): DOMElement
		{
			$parent = $this->getParent();
			if($parent !== null)
				return $parent;
			else
				throw new LogicException("already at root!");
		}

		/**
		 * @return $this
		 */
		public function detach(): DOMElement
		{

			$index = $this->getSiblings()->find($this);
			$this->getSiblings()->remove($index);
			$this->setParent(null);
			return $this;
		}

		public function getSiblings(): Vector
		{
			return $this->getParent()->getChildren();
		}

		/** end testingtodo */

		/**
		 * adds the given children in free form (in an Traversable container and/or splatted form)
		 *
		 * @param array ...$elems the children to be added
		 *
		 * @pre     All non traversable arguments or items must be an instance of DOMElement
		 * @throws  \LogicException if the DOMElement is selfClosing
		 *        | isSelfClosing == true
		 * @post    the children will be added
		 *        | foreach (freeInputToArray(...elems) as elem) array_find(element, new.getChildren) != false
		 * @return $this
		 */
		public function addChildren(...$elems)
		{
			if ($this->isSelfClosing() === true)
				throw new \LogicException("this DOMElement is selfclosing \n" . var_dump($this));

			$args = Helper::freeInputToArray(...$elems);

			foreach ($args as $arg)
				$this->addChild($arg);

			return $this;
		}

		/****************************************************************************************************
		 * Everything to do with the element
		 */

		/**
		 * the html element this DOMElement entails
		 * @var        HTMLElementEnum
		 */
		private $element = "";

		/**
		 * Sets the node type.
		 *
		 * @param      HTMLElementEnum $element The node type
		 *
		 * @raw
		 */
		private function setElement(HTMLElementEnum $element)
		{
			$this->element = $element;
		}

		/**
		 * Gets the node type.
		 *
		 * @return     HTMLElementEnum  The node type.
		 * @basic
		 */
		public function getElement(): HTMLElementEnum
		{
			return $this->element;
		}


		/****************************************************************************************************
		 * Everything to do with innerHTML
		 */

		private $innerHTML = "";

		/**
		 * clears the inner html
		 *
		 * @post    the inner html will be an empty string
		 *        | new.getInnerHTML() == ""
		 */
		public function clearInnerHTML()
		{
			$this->setInnerHTML("");

			/*foreach ($this->getChildren() as $child) {
				$child->detach();
				$child = null;
			}

			$this->children = new Vector();*/
		}

		/**
		 * @param string $html
		 *
		 * @throws \InvalidArgumentException throws it it cannot have the given HTML
		 * @return $this
		 */
		public function setInnerHTML(string $html)
		{
			if (!$this->canHaveAsInnerHTML($html))
				throw new \InvalidArgumentException("cannot have given inner html");

			$this->innerHTML = $html;

			return $this;
		}

		/**
		 * checks to see if it can have the given html
		 *
		 * @param string $html the given html
		 *
		 * @return bool true if the element is not self closing
		 *            | result == !isSelfClosing()
		 */
		public function canHaveAsInnerHTML(string $html)
		{
			return !$this->isSelfClosing();
		}

		/**
		 * concatenates the given string to the inner html
		 *
		 * @param string $html
		 */
		public function addInnerHTML(string $html)
		{
			$this->setInnerHTML($this->getInnerHTML() . $html);
		}

		/**
		 * @return string
		 * @basic
		 */
		public function getInnerHTML(): string
		{
			return $this->innerHTML;
		}



		/****************************************************************************************************
		 * Everything to do with printing
		 */

		/**
		 * returns the DOMElement as its HTML representation
		 */
		public function print(): string
		{
			$html = "<" . $this->getElement()->getVal();

			if ($this->hasAttributes()) {
				$html .= " ";
				foreach ($this->attributes as $attr => $val)
					$html .= $attr . '="' . $val . '" ';
				$html = trim($html);
			}

			$html .= ">";

			$html .= $this->getInnerHTML();

			foreach ($this->getChildren() as $elem) {
				if (is_object($elem) && !method_exists($elem, "__toString"))
					$html .= serialize($elem);
				else
					$html .= (string) $elem;
			}

			$html .= "</" . $this->getElement()->getVal() . ">";

			return $html;
		}


		/**
		 * the lists of attributes of the DOMElement
		 *
		 * @var        array
		 */
		private $attributes = [];

		/**
		 * checks to see if the element can have the given attributes
		 *
		 * @param   array $attributes the attributes to be checked
		 *
		 * @return    bool    returns true if all the elements in the array are HTMLAttributeEnum and can have its own
		 *                    attribute as an attribute
		 */
		public function canHaveAsAttributes(array $attributes): bool
		{
			/** @var string $attribute */
			foreach ($attributes as $key => $attribute) {
				$attr = HTMLAttributeEnum::resolve($key);
				if (!($attr instanceof HTMLAttributeEnum) || !($this->canHaveAsAttribute($attr)))
					return false;
			}

			return true;
		}

		/**
		 * checks to see if the HTMLElement has attributes
		 *
		 * @return bool true if the HTMLElement has attributes
		 *              result == count(getAttributes() != 0)
		 */
		public function hasAttributes(): bool
		{
			return (count($this->getAttributes()) !== 0);
		}

		/**
		 * Sets the attribute.
		 *
		 * @param      HTMLAttributeEnum $enum  The attribute
		 * @param      string            $value The value
		 *
		 * @return      $this
		 * @raw
		 */
		public function setAttribute(HTMLAttributeEnum $enum, string $value)
		{
			if (!($this->canHaveAsAttribute($enum)))
				throw new \InvalidArgumentException("cannot have given attribute, attribute given: " . $enum->getVal());

			$this->attributes[ $enum->getVal() ] = $value;

			return $this;
		}

		protected function setAttributes(array $attr)
		{
			$this->attributes = $attr;
		}

		/**
		 * A standard template inherits the minimum amount of parameters found possible in the constructor.
		 * @return DOMElement
		 */
		abstract public static function standardTemplate() : DOMElement;

		/**
		 * A skeleton is inherits the respective parameters found in constructor.
		 *
		 * @return DOMElement
		 */
		abstract public function generateSkeleton() : DOMElement;

		public function __clone()
		{
			$class = get_class($this);
			$tbr = new $class;
			return $this->cloneFields($tbr);
		}

		protected function cloneFields(DOMElement $tbr): DOMElement
		{
			$tbr->setAttributes($this->getAttributes());
			$tbr->setInnerHTML($this->getInnerHTML());
			$tbr->setSelfClosing($this->selfClosing);
			$tbr->isMetaData = $this->isMetaData();
			$tbr->isFlowContent = $this->isFlowContent();
			$tbr->isSectioningContent = $this->isSectioningContent();
			$tbr->isHeadingContent = $this->isHeadingContent();
			$tbr->isPhrasingContent = $this->isPhrasingContent();
			$tbr->isEmbeddedContent = $this->isEmbeddedContent();
			$tbr->isInteractiveContent = $this->isInteractiveContent();
			$tbr->isPalpableContent = $this->isPalpableContent();
			$tbr->isFormAssociatedContent = $this->isFormAssociatedContent();

			return $tbr;
		}

		public function __toString()
		{
			return $this->print();
		}
	}

<?php 
	
	declare(strict_types=1);

	namespace HTML\Forms;

	use HTML\AttributeTraits\FOR_;
    use HTML\DOMElement;
    use HTML\ElementEnumerations\FormsEnum;

	/**
	 * class Label
	 * The HTML <label> element represents a caption for an item in a user interface.
     *
	 * @package App\HTML\FormInputs
	 */
	class Label extends Forms
	{
	    use FOR_;

	    protected $isPalpableContent = true;
        protected $isInteractiveContent = true;
        protected $isPhrasingContent = true;
        protected $isFlowContent = true;
        
		/**
		 * constructs a new label
		 *
		 * @param      string  $for           For
		 * @param      string  $labelContent  The label content
		 * @param      string  $id            The identifier
		 * @param      string  $classes       The classes
		 * 
		 * \effect		the label will be a new DOMElement with the given id and classes with "label" as the nodetype
		 * 			  |	super("label", id, classes)
		 * \post		the label will have the given string for as its for attribute
		 * 			  |	new.getFor() == for
		 * \post		the label will have the given labelcontent
		 * 			  |	new.getLabelContent() == labelContent
		 */
		public function __construct(string $for, string $labelContent)
		{
			parent::__construct(FormsEnum::LABEL());

			$this->setFor($for);
			$this->setInnerHTML($labelContent);
		}

		public function canHaveAsChild($elem)
        {
            return parent::canHaveAsChild($elem) && $elem->isPhrasingContent() &&
                    !($elem instanceof Label);
        }
    }
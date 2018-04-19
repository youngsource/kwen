<?php
	/**
	 * Created by PhpStorm.
	 * User: ghlen
	 * Date: 10/8/17
	 * Time: 4:17 PM
	 */

	namespace HTML\Bootstrap;


	use HTML\Forms\Button;
	use HTML\HTMLAttrEnums\ButtonTypeEnum;

	class bsBtnDanger extends Button
	{
		function __construct(ButtonTypeEnum $type, $innerhtml, $name = "", $value = "")
		{
			parent::__construct($type, $innerhtml, $name, $value);
			$this->addClass("btn btn-danger");
		}
	}
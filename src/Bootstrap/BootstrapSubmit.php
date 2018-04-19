<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/24/17
 * Time: 3:11 PM
 */

namespace HTML\Bootstrap;

use HTML\Forms\TypeSpecializations\Submit;

class BootstrapSubmit extends Submit
{
	public function __construct($value = "", string $buttonClass="")
	{
		parent::__construct($value);
		if ($buttonClass === "")
			$this->addClass(" btn btn-default ");
		else
			$this->addClass(" btn " . $buttonClass . " ");
	}
}
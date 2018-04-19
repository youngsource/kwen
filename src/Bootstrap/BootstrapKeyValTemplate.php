<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 8/24/17
 * Time: 3:17 PM
 */

namespace HTML\Bootstrap;


class BootstrapKeyValTemplate extends BootstrapKeyVal
{
	public function __construct(BootstrapInput $key, BootstrapInput $val, $name, $classes = "")
	{
		$this->setCoreKey($key);
		$this->setCoreVal($val);
		parent::__construct($key->getName(), $val->getName(), $name, $classes);
	}
}
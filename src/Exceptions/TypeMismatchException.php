<?php
	/**
	 * Created by PhpStorm.
	 * User: ghlen
	 * Date: 10/10/17
	 * Time: 9:47 PM
	 */

	namespace HTML\Exceptions;


	use Throwable;

	class TypeMismatchException extends \UnexpectedValueException implements Throwable
	{
		/** @var  string */
		private $expected, $result;


		public function __construct(string $expected, string $result, string $message="")
		{
			$this->setExpected($expected);
			$this->setResult($result);
			$this->message = $message;
		}

		/** @return string */
		public function getExpected(): string { return $this->expected; }
		/** @param string $expected */
		public function setExpected(string $expected) { $this->expected = $expected; }
		/** @return string */
		public function getResult(): string { return $this->result; }
		/** @param string $result */
		public function setResult(string $result) { $this->result = $result; }
	}
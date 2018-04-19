<?php
	/**
	 * Created by PhpStorm.
	 * User: ghlen
	 * Date: 10/10/17
	 * Time: 9:41 PM
	 */

	namespace HTML;


	interface Generic
	{
		/**
		 * Returns the extended type with the templates included in c++ style.
		 * eg. A vector with a string should return: Vector<string>.
		 * @return string
		 */
		public function decltype(): string;

		/**
		 * Builds the type according to the templates that are inserted.
		 * This allows yet to be defined templates to already be declared.
		 *
		 * @return string
		 */
		public static function buildType(...$templates): string;
	}
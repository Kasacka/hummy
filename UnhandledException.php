<?php
	class UnhandledException extends Exception {
		private $errorNumber;

		public function __construct($errorNumber, $errorMessage) {
			$this->errorNumber = $errorNumber;
			parent::__construct($errorMessage);
		}

		public function getErrorNumber() {
			return $this->errorNumber;
		}
	}
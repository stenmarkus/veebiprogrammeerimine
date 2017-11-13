<?php
	class Photoupload {
		//properties ehk muutujad, methods ehk meetodid
		public $testPublic;
		private $testPrivate;
		//protected
		
		function __construct($x) {
			$this->testPublic = "Väga avalik muutuja";
			$this->testPrivate = $x;
		}
	}//klassi lõpp
?>
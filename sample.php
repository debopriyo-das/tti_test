<?php
	interface livable {
		public function eat();
		public function walk();
		public function see();
	}

	abstract class LivingBeing implements livable {
		public function __construct() {
			$this -> eat();
			$this -> walk();
			$this -> see();
		}
	}

	class Human extends LivingBeing {
		public function __construct() {
			parent::__construct();
		}
		public function eat() {
			echo "Human Eat ";
		}

		public function walk() {
			echo "Human Walk ";
		}

		public function see() {
			echo "Human See \n";
		}
	}

	$obj = new Human();
?>
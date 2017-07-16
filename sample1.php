<?php

	interface car {
		public function walk($legs,$hands);
	}

	class human implements car {

		public function walk($hands) {
			echo"walkingasds";
		}

	}
	$obj = new human();
	$obj->walk();
?>
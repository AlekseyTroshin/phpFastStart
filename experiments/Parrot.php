<?php 
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-TYpe" content="text/html;charset=utf-8"/>

<?php
	require_once 'Pet.php';

	class Parrot extends Pet {
		public function speak() {
			return "My name is Popka";
		}

		public function plays() {
			return 'I can fly';
		}
	}
?>
<?php 
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-TYpe" content="text/html;charset=utf-8"/>

<?php
	require_once 'Pet.php';

	class Dog extends Pet {
		public function speak() {
			return "Gav! Gav!";
		}

		public function plays() {
			return 'bring me anything';
		}
	}
?>
<?php 
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-TYpe" content="text/html;charset=utf-8"/>

<?php
	require_once 'Pet.php';

	class Cat extends Pet {
		public function speak() {
			return "Myu! Myu!";
		}

		public function plays() {
			return 'catch mouse';
		}
	}
?>
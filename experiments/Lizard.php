<?php 
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-TYpe" content="text/html;charset=utf-8"/>

<?php
	require_once 'Pet.php';

	class Lizard extends Pet {
		public function speak() {
			return "tssssss ";
		}

		public function plays() {
			return 'find place under sun';
		}
	}
?>
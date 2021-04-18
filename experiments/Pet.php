<?php 
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-TYpe" content="text/html;charset=utf-8"/>

<?php
	class Pet {
		public $name;
		public function __construct($name) {
			$this -> name = $name;
		}

		public function speak() {
			return 'nothing';
		}
	}
?>
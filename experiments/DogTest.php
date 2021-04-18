<?php 
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-TYpe" content="text/html;charset=utf-8"/>

<?php 
	require "Dog.php";
	$fido = new Dog("Fido");
	echo "Dog name: " . $fido->name . "<br />";
	echo "Dog say: " . $fido->speak() . "<br />";
	
	$fifi = new Dog("Fifi");
	echo "Dog name: " . $fifi->name . "<br />";
	echo "Dog say: " . $fifi->speak() . "<br />";
?>
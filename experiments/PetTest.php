<?php 
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-TYpe" content="text/html;charset=utf-8"/>

<?php 
	require "Dog.php";
	require "Cat.php";
	require "Fish.php";
	require "Lizard.php";
	require "Parrot.php";

	$fido = new Dog("Fido");
	echo "Dog name: " . $fido->name . "<br />";
	echo "Dog say: " . $fido->speak() . "<br />";
	echo "Dog play: " . $fido->plays() . "<br /><br />";

	$mittens = new Cat("Mittens");
	echo "Cat name: " . $mittens->name . "<br />";
	echo "Cat say: " . $mittens->speak() . "<br />";
	echo "Cat play: " . $mittens->plays() . "<br /><br />";

	$bubble = new Fish("Babble");
	echo "Fish name: " . $bubble->name . "<br />";
	echo "Fish say: " . $bubble->speak() . "<br /><br />";

	$jopka = new Parrot("Jopka");
	echo "Parrot name: " . $jopka->name . "<br />";
	echo "Parrot say: " . $jopka->speak() . "<br />";
	echo "Parrot play: " . $jopka->plays() . "<br /><br />";

	$tsss = new Lizard("TSsssss");
	echo "Lizard name: " . $tsss->name . "<br />";
	echo "Lizard say: " . $tsss->speak() . "<br />";
	echo "Lizard play: " . $tsss->plays() . "<br /><br />";
?>
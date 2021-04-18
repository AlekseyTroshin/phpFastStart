<?php 
	header("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

<?php
	$myVar = "Hello world! Use variable";

	echo $myVar;

	$myVar = "Bye the world";

	echo "<br />" . $myVar;

	$arr = [elem => 'hello', elem2 => 'hello2'];

	echo "<br />" . var_dump($arr);

	echo phpinfo();
?>
<?php
	$db = new PDO("mysql:host=localhost;dbname=testposts","roott","root");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	try {
		$queryStr = "INSERT INTO posts (content) VALUES ('content')";
		$db->query($queryStr);
	} catch (PROException $e) {
		echo $e->getMessage();
	}
?>
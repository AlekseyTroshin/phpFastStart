<?php
	$db = new PDO("mysql:host=localhost;dbname=testposts","roott","root");
	// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	try {
		$queryStr = "CREATE TABLE posts (id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, content LONGTEXT)";
		$db->query($queryStr);
	} catch (PROException $e) {
		echo $e->getMessage();
	}
?>
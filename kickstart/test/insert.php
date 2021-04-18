<?php
	$db = new PDO("mysql:host=localhost;dbname=kickstartapp","roott","root");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	try {
		$queryStr = "INSERT INTO users (name, password, email) VALUES ('admin', MD5('admin'), 'youremail@domain.com')";
		$db->query($queryStr);
	} catch (PROException $e) {
		echo $e->getMessage();
	}
?>
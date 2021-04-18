<?php
	$db = new PDO("mysql:host=localhost;dbname=kickstartapp","roott","root");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	try {
		$queryStr = "SELECT * FROM users";
		$query = $db->prepare($queryStr);
		$query -> execute();
		while($row = $query->fetch()) {
			echo $row['id'] . ' - ' . $row['name'] . ' - '  . $row['email'] . ' - '  . $row['password'];
			echo '<br />';
		}
		$query->closeCursor();
	} catch (PROException $e) {
		echo $e->getMessage();
	}
?>
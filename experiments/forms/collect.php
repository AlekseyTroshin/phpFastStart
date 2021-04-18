<?php 
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-TYpe" content="text/html;charset=utf-8"/>

<?php
	echo var_dump($_POST) . "<br> ";
	echo var_dump($_GET) . "<br> ";

	if(!empty($_POST['data'])) {
		echo "Next str send from N1 " . $_POST['data'];
	}
	elseif(!empty($_GET['data'])) {
		echo "Next str send from N2 " . $_GET['data'];
	}
?>
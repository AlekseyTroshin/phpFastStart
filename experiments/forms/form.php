<?php 
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-TYpe" content="text/html;charset=utf-8"/>

<html>
<body>

<form method="post" action="collect.php">
	<h1>Form №1</h1>
	<input type="text" name="data" placeholder="Enter string">
	<button type="submit">Send</button>
</form>

<form method="get" action="collect.php">
	<h1>Form №2</h1>
	<input type="text" name="data" placeholder="Enter string">
	<button type="submit">Send</button>
</form>

</body>
</html>
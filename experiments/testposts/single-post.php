<?php 
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

<h1>List message</h1>

<h3>Message № <?php echo $posts[0]['id']; ?></h3>
<hr>
<?php echo $posts[0]['content'] . "<br />"; ?>
<a href='<?php echo "http://localhost:8888/php-fast-start/experiments/testposts/post.php"; ?>'> Back for list message </a>

<?php 
	header("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

<h1>List message</h1>
<?php foreach($posts as $post): ?>

<h3>Message № <?php echo $post['id']; ?></h3>
<?php echo $post['content']; ?>
<a href="<?php echo "http://localhost:8888/php-fast-start/experiments/testposts/post.php?id=".$post['id']; ?>"> more details </a>
<hr>

<?php endforeach ?>
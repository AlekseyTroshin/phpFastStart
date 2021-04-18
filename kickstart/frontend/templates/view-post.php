<?php 
	header("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

<?php require_once 'includes/temps/header.php'; ?>
<br>

<a href='<?php echo $this->base->url; ?>' class="btn btn-primary">Back for the list messages</a>

<?php foreach ($posts as $post): ?>
	<h3>Message № <?php echo $post['id']; ?></h3>
	<?php echo htmlspecialchars($post['content']); ?>
	<hr>
<?php endforeach ?>


<?php require_once('includes/temps/footer.php'); ?>
<?php 
	header("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

<?php require_once 'includes/temps/header.php'; ?>

<?php foreach ($posts as $post): ?>
	<h3>Message № <?php echo $post['id']; ?></h3>
	<p><?php echo implode(' ', array_slice(expode(' ', strip_tags($post['content'])), 0, 10)); ?> [...]</p>
	<a href='<?php echo $this->base->url."/?id=".$post['id']; ?>' class="btn btn-primary">More details</a>
	<hr>
<?php endforeach ?>

<?php require_once('includes/temps/footer.php'); ?>
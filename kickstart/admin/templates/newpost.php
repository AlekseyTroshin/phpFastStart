<?php 
	header("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

<?php require_once 'includes/temps/header.php'; ?>

<a href="<?php echo $this->base->url; ?>/posts.php?action=create" class="btn btn-info">Create message</a>

<table>
	<thead>
		<tr>
			<td>Заголовок</td>
			<td>Содержимое</td>
			<td>Действия</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($posts as $post): ?>
			<tr>
				<td>
					<h3>Message №<?php echo htmlspecialchars($post['id']);?></h3>
				</td>
				<td>
					<p>
						<?php echo implode(' ', array_slice(explode(' ', strip_tags($post['content'])), 0, 10)) ?> [...]
					</p>
				</td>
				<td>
					<a href="<?php echo $this->base->url."/posts.php?id=".$post['id']."&action=edit"; ?>"
						class="btn btn-primary"
					>Edit</a>
					<a href="<?php echo $this->base->url."/?id=".$post['id']."&action=delete"; ?>"
						class="btn btn-primary"
					>Delete</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<?php require_once('includes/temps/footer.php'); ?>
<?php 
	header("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

<?php require_once '../../includes/temps/header.php'; ?>

<?php if (!empty($error)): ?>
	<div class="alert alert-error">~<?php echo $error; ?></div>
<?php endif ?>

<form action="<?php echo htmlspecialchars($_SERVER['']); ?>" method="POST" class="form-horizontal offset2">
	<h3>Вход в админ-панель</h3>
	<div class="control-group <?php echo (!empty($error) ? 'error' : '') ?>">
		<label class="control-label" for="inputEmail">Имя пользователя</label>
		<div class="controls">
			<input type="text" name="username" id="inputEmail" placeholder="Имя пользователя">
		</div>
	</div>

	<div class="control-group <?php echo (!empty($error) ? 'error' : '') ?>">
		<label class="control-label" for="inputPassword">Пароль</label>
		<div class="controls">
			<input type="text" name="password" id="inputPassword" placeholder="Пароль">
		</div>
	</div>

	<div class="control-group <?php echo (!empty($error) ? 'error' : '') ?>">
		<div class="controls">
			<button type="submit" class="btn">Войти</button>
		</div>
	</div>

</form>

<?php require_once('../../includes/temps/footer.php'); ?>
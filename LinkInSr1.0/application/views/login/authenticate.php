<h2>Login</h2>

<?php echo validation_errors(); ?>

<!-- <?php echo form_open('news/create') ?> -->
	<form action="http://localhost:8888/ci/index.php/login/authenticate" method="post">
	<label for="user_id">Username: </label>
	<input type="input" name="username" maxlength="30"/><br />

	<label for="name">Password: </label>
	<input type="password" name="pword" maxlength="16" /><br />

	<input type="submit" name="submit" value="Login" />

</form>
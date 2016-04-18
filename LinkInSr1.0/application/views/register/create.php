<h2>Create a New User Account</h2>

<?php echo validation_errors(); ?>

<!-- <?php echo form_open('news/create') ?> -->
	<form action="http://localhost:8888/ci/index.php/register/create" method="post">
	<label for="username">Username: </label>
	<input type="input" name="username" maxlength="30" value="<?php echo set_value('username'); ?>" /><br />
	<label for="password">Password: </label>
	<input type="password" name="pword" maxlength="16" value="<?php echo set_value('password'); ?>"/><br />

	<input type="submit" name="submit" value="Register New Account" />

</form>
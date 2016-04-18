<h3>Complete Your User Profile</h3>

<?php echo validation_errors(); ?>

<form action="http://localhost:8888/ci/index.php/register/userprofile_form" method="post">
	<label for="username">Username: </label>
	<input type="text" name="username" value="<?php echo set_value('username'); ?>" /><br />
	<label for="password">Confirm Password: </label>
	<input type="password" name="pword" value="<?php echo set_value('password'); ?>"/><br />
	<label for="name">Full Name: </label>
	<input type="text" name="name" maxlength="99" /><br />
	<label for="">email: </label>
	<input type="text" name="email" maxlength="99" /><br />
	<label for="">DOB (YYYY-MM-DD): </label>
	<input type="text" name="date_of_birth" /><br />
	<label for="">Phone Number: </label>
	<input type="text" name="phone_number" maxlength="15" /><br />
	<!--<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />
	<label for=""> : </label>
	<input type="text" name="" maxlength="" /><br />-->
	<input type="submit" name="submit" value="Submit" />

</form
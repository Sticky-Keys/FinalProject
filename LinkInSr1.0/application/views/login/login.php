<?php

?>

<html>
<head>
	<style>
		#pageContent {
			max-width: 1000px;
			min-width: 775px;
			margin-top: 10px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 10px;
			border: 1px solid black;
			padding: 5px;
			height: auto;
		}

		.wrapper {
			max-width: 950px;
			min-width: 750px;
			margin-top: 5px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 5px;
			border: 1px dashed grey;
			padding: 5px;
			height: 225px;
			text-align: center;
		}
		
		#loginWrapper {
/* 			text-align: center; */
		}
		
		input {
		
		}
	</style>
</head>
<body>
	<div id="pageContent">
		<div class="wrapper" id="loginWrapper">
			<div id="loginHeader">
				<span><b>Enter Username & Password</b></span>
				<br>
				<br>
			</div>
			<div id="loginFormContainer">
				<form action="" method="POST">
					<label for="username">username:</label>
					<input type="text" id="username" length="25" maxlength="20"></input>
					<label for="userPassword">password:</label>
					<input type="password" id="userPassword" length="40" maxlength="20"></input>
				</form>
			</div>
		</div>
		
	</div>
</body
</html>
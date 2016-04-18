<html>
<head>
<style>
	#menuWrapper {
		max-width: 800px;
		min-width: 775px;
		margin-top: 10px;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 10px;
		border: 1px solid black;
		padding: 5px;
		height: 75px;
	}
	
	#leftNavContainer {
		width: 200px;
		height: auto;
		float: left;
	}

	#homeButtonContainer {
		width: 180px;
		height: 25px;
		margin-top: 40px;
		padding-top:5px;
		margin-left: 5px;
		margin-right: 5px;
		border: 1px dashed grey;
		text-align: center;
	}

	#home {
		width: 100px;
	}
	
	#logoContainer {
		width: 180px;
		height: 25px;
		margin-top: 5px;
		padding-top: 5px;
		margin-left: 5px;
		margin-right: 5px;
		border: 1px dashed grey;
		text-align: center;
		float: left;
	}
	
	#rightNavContainer {
		min-width: 500px;
		height: 70px;
		margin-left: 50px;
		border: 1px dashed grey;
		float: left;
		text-align: center;
		
	}
	
	#searchButtonContainer {
		margin-left: 20px;
		margin-right: 20px;
		padding-top: 5px;
	}
	
	#searchButton {
		width: 300px;
		height: 20px;
	}
	
	#buttons {
		margin-left: 20px;
		margin-right: 20px;
		border: 1px dashed grey;
		margin-top: 10px;
		padding-top: 5px;
		padding-bottom: 5px;
	}
	
	.menuButtons {
		width: 100px;
		margin-left: 5px;
		margin-right: 5px;
	}
	
	.group:before,
		.group:after {
   		content: "";
    	display: table;
	} 
	
	.group:after {
    	clear: both;
	}
	.group {
    	zoom: 1; /* For IE 6/7 (trigger hasLayout) */
	}
	
</style>
<!-- <script type="text/javascript" >  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
</head>

<body>
<div id="menuWrapper" class="group">
	<div id="leftNavContainer">
		<div id="logoContainer">
			<img src="" alt="company_logo" ></img>
		</div>
		<div id="homeButtonContainer">
			<button type="button" id="home" value="Home">Home</button>
		</div>
	</div>
	<div id="rightNavContainer">
		<div id="searchButtonContainer">
			<button type="button" id="searchButton">Search / Filter Results...</button>
		</div>
		<div id="buttons">
			<button type="button" class="menuButtons" id="loginButton" value="login">Login</button>
			<button type="button" class="menuButtons" id="registerButton" value="register">Register</button>
			<button type="button" class="menuButtons" id="profileButton">Profile</button>
			<button type="button" class="menuButtons" id="messageButton">Messages(?)</button>
<!-- 			<button type="button" class="menuButtons" id="">[ etc.. ]</button> -->
		</div>
	</div>	
</div>
</body>
<script>
 	$(document).ready(function(){
 	
 		$('#loginButton').click( function() {
			window.location = "/ci/index.php/login/authenticate";
		});
		
		$('#registerButton').click( function() {
			window.location = "/ci/index.php/register/create";
		});
		
 	});
</script>
</html>
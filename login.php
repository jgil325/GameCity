<?php
	include_once 'header.php';
	if(isset($_COOKIE['mycookie'])) {
		header('Location: produstList.php');
	}
	else {
		
	}
?>

<head>
	<style>
		label{float:left;width:8em; text-align:right; color:navy;font-weight:bold;}
		.mov { width: 10em; margin-left:.25em; margin-bottom:.5em;}
		#submit{margin-left:3em; margin-top:.5em}
	</style>
	
</head>

<main>
	<form action="includes/check.inc.php" method="post">
		<label>Username</label>
		<input type="text" name="name" class="mov"><br>
		<label>Password</label>
		<input type="password" name="password" class="mov"><br>
		<button type="submit" value="Login" id="submit">Log in</button>
	</form>
    <br><a href="signup.php">Don't have an account? Sign up here for free!</a>

</main>
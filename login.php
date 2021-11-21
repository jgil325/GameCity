<?php
include_once 'header.php';
if (isset($_COOKIE['mycookie'])) {
	header('Location: produstList.php');
} else {
}
?>

<head>
	<style>
		label {
			float: left;
			width: 8em;
			text-align: right;
			color: navy;
			font-weight: bold;
		}

		.mov {
			width: 10em;
			margin-left: .25em;
			margin-bottom: .5em;
		}

		#submit {
			margin-left: 3em;
			margin-top: .5em
		}
	</style>
	<script>
		function validateForm() {
			let x = document.forms["login"]["name"].value;
			if (x == "") {
				alert("Name must be filled out");
				return false;
			}

			let y = document.forms["login"]["password"].value;
			if (y == "") {
				alert("Password must be filled out");
				return false;
			}
		}
	</script>
</head>

<main>
	<form name="login" action="includes/check.inc.php" method="post" onsubmit="return validateForm()">
		<label>Username</label>
		<input type="text" name="name" class="mov"><br>
		<label>Password</label>
		<input type="password" name="password" class="mov"><br>
		<button type="submit" value="Login" id="submit">Log in</button>
	</form>
	<br><a href="signup.php">Don't have an account? Sign up here for free!</a>

</main>
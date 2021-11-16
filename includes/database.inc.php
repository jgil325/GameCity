<?php
	$dsn = 'mysql:host=localhost;dbname=game_city';
	$username = 'root';
	$password = '';

	try {
		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		exit();
	}
?>
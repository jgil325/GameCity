<?php
require('database.inc.php');

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['uid'];
$password = $_POST['pwd'];

$query = "INSERT INTO users (userName, userEmail, userUid, userPwd) VALUES (:name, :email, :username, :password)";

$statement = $db->prepare($query);
$statement->bindValue(':name', $name);
$statement->bindValue(':email', $email);
$statement->bindValue(':username', $username);
$statement->bindValue(':password', $password);
$statement->execute();
$statement->closeCursor();

header('Location: ../index.php');

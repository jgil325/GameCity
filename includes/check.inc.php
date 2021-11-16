<?php
require('database.inc.php');

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare()) {

    }
}

$uname = $_POST['name'];
$password = $_POST['password'];
/*$check = $_POST['check'];*/
session_start();
$query = "SELECT * FROM users WHERE userUid='$uname' AND userPwd='$password'";

$data = $db->query($query);

if ($data->rowCount() > 0) {
    /*if ($check == '1') {*/
        setcookie("mycookie", TRUE, time() + 6);
        $_SESSION["userid"] = true;
        $_SESSION["useruid"] = true;
        header('Location: ../index.php');
    /*}*/
} else {
    $_SESSION["userid"] = false;
    $_SESSION["useruid"] = false;
    header('Location: ../error.php');
}

?>
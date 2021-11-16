<?php
    include_once 'header.php';
?>

<!DOCTYPE>
<html>
    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name..."><br>
            <input type="text" name="email" placeholder="Email..."><br>
            <input type="text" name="uid" placeholder="Username..."><br>
            <input type="password" name="pwd" placeholder="Password..."><br>
            <input type="password" name="pwdrepeat" placeholder="Repeat password..."><br><br>
            <button type="submit" name="submit">Sign Up </button>
        </form>
    </section>
</html>
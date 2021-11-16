<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Favicon-->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!--Box icons-->
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">


        <!--Custom stylesheet-->
        <link rel="stylesheet" href="css/styles.css">
        <title>Game City</title>
    </head>
    <body>
        <!--Header-->
        <header id="home" class="header">
            <nav class="nav">
                <div class="navigation container">
                    <div class="logo">
                        <h1>Game City</h1>
                    </div>
                
                    <div class="menu">
                        
                        <div class="top-nav">
                            <div class="logo">
                                <h1>Game City</h1>
                            </div>
                            <div class="close">
                                <i class='bx bx-x'></i>
                            </div>
                        </div>
                        
    
                        <ul class="nav-list">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="productList.php" class="nav-link">Products</a>
                            </li>
                            <li class="nav-item">
                                <a href="reviews.php" class="nav-link">Reviews</a>
                            </li>
                            <?php
                                if (isset($_SESSION["useruid"])) {
                                    echo '<li class="nav-item"><a href="account.php" class="nav-link">Account</a></li>';
                                    echo '<li class="nav-item"><a href="includes/logout.inc.php" class="nav-link">Log out</a></li>';
                                } else {
                                    echo '<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>';
                                }
                            ?>
                            <li class="nav-item">
                                <a href="cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
                            </li>
                        </ul>
                    </div>

                    <a href="cart.html" class="cart-icon">
                        <i class="bx bx-shopping-bag"></i>
                    </a>

                    <div class="hamburger">
                        <i class="bx bx-menu"></i>
                    </div>
                </div>
            </nav>
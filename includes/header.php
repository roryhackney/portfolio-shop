<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php echo $title;?></title>
        <meta charset="utf-8">
        <meta name="author" content="Rory Hackney">
        <meta name="description" content=
        "Portfolio, shop, and blog for Rory, a trans neurodiverse artist who makes comics, games, and websites.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./favicon.ico">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Mali:wght@400;600&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
        crossorigin="anonymous">
        <link rel="stylesheet" href="assets/styles/styles.css">
        <script src="assets/scripts/script.js" defer></script>
    </head>
    <body class=<?php echo $currentPage; ?>>
        <header>
            <a href="index.php"><img alt="Logo for Rory's Stories" src="assets/images/logo.png"></a>
            <div>
                <a href="index.php">
                    <i class="fas fa-star"></i><span> Rory's Stories </span><i class="fas fa-star"></i>
                    <p>Art, Stories, and Code</p>
                </a>
            </div>
            <nav>
                <ul>
                    <li><a <?php
                    if ($currentPage === "home") {
                        echo 'class="here"';
                    }
                    ?> href="index.php">Portfolio</a></li>
                    <li><a <?php
                    if ($currentPage === "shop") {
                        echo 'class="here"';
                    }
                    ?> href="shop.php">Shop</a></li>
                    <li><a <?php
                    if ($currentPage === "commissions") {
                        echo 'class="here"';
                    }
                    ?> href="commissions.php">Commissions</a></li>
                    <li><a <?php
                    if ($currentPage === "about") {
                        echo 'class="here"';
                    }
                    ?> href="about.php">About</a></li>
                    <li><a <?php
                    if ($currentPage === "blog") {
                        echo 'class="here"';
                    }
                    ?> href="blog.php">Blog</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div id="account-banner">
                <p>Welcome, friend!</p>
                <div>
                    <a href="login.php">Log In</a>
                    <a href="register.php">Register</a>
                    <i class="fas fa-lg fa-shopping-cart" id="cart-icon"></i>
                    <span id="cart-number">0</span>
                </div>
            </div>
            <div id="cart" class="hidden">
                <h3>Edit Cart</h3>
                <hr/>
                <img src="assets/images/tiny-eli-cover.jpg" alt="Eli's Tragic Backstory front cover">
                <label for="qty">Qty:</label>
                <input id="qty" name="qty" type="text" value="1"></input>
                <p>$5.99</p>
                <button>Edit</button>
                <button>Remove</button>
                <p class="title">Eli's Tragic Backstory (PDF)</p>
                <button id="save">Save</button>
                <hr/>
                <div id="total">
                    <p>Subtotal: <span>$5.99</span></p>
                    <p>Tax: <span>$<?php echo round(5.99 * .1025, 2);?></span></p>
                    <p>Shipping: <span>N/A</span></p>
                    <p>Total: <span>$6.09</span></p>
                </div>
                <hr/>
                <p>Thank you for supporting me!</p>
                <a href="checkout.php"><button class="checkout">Check Out</button></a>
            </div>
<?php
include("includes/functions.php");
include("includes/page-info.php");
?>
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
        <main>
            <div class="process">
                <div class="progress">
                    <i class="fas fa-circle"></i>
                    <i class="fas fa-circle"></i>
                    <i class="fas fa-circle"></i>
                    <i class="fas fa-circle"></i>
                    <hr/>
                </div>
                <div class="swap">
                    <h1>Account</h1>
                    <p>With an account, you can save your shipping and billing information, customize your experience (fun display names, anyone?), and get coupons, updates, and thank yous through your email.</p>
                    <form id="loginForm" action="loginProcessing.php" method="POST">
                        <h2>Log In</h2>
                        <label for="loginEmail">Email</label>
                        <input type="email" placeholder="Email" name="loginEmail" id="loginEmail">
                        <label for="loginPassword">Password</label>
                        <input type="password" placeholder="Password" name="loginPassword" id="loginPassword">
                        <button type="submit">Log In</button>
                    </form>
                    <form id="regForm" action="accountProcessing.php" method="POST">
                        <h2>Create Account</h2>
                        <label for="displayName">Display Name</label>
                        <input type="text" placeholder="Display name" name="displayName" id="displayName">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Email" name="email" id="email">
                        <label for="pronouns">Pronouns</label>
                        <input type="text" placeholder="Pronouns" name="pronouns" id="pronouns">
                        <label for="regpass1">Password</label>
                        <input type="password" placeholder="Password" name="regpass1" id="regpass1">
                        <label for="regpass2">Password (again)</label>
                        <input type="password" placeholder="Password (again)" name="regpass2" id="regpass2">
                        <button type="submit">Register</button>
                    </form>
                    <div id="guest">
                        <h2>Guest Checkout</h2>
                        <a href="shipping.php" class="button">Confirm</a>
                    </div>
                    <a href="shop.php">Back To Shop</a>
                </div>
                <div id="cart">
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
                </div>
            </div>
        </main>
    </body>
</html>
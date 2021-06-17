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
                    <hr/>
                    <i class="fas fa-circle"></i>
                    <i class="fas fa-circle"></i>
                    <i class="fas fa-circle"></i>
                    <i class="fas fa-circle"></i>
                </div>
                <div class="swap">
                    <h1>Shipping</h1>
                    <p>And where shall I send your items, esteemed guest?</p>
                    <form id="shippingForm" action="shippingProcessing.php" method="POST">
                        <h2>Shipping Information</h2>
                        <label for="fullName">Full Name</label>
                        <input type="text" placeholder="Full name" name="fullName" id="fullName">
                        <label for="shipEmail">Email</label>
                        <input type="email" placeholder="Email" name="shipEmail" id="shipEmail">
                        <label for="shipZip">Zip Code</label>
                        <input type="text" placeholder="Zip code" name="shipZip" id="shipZip">
                        <label for="shipStreet">Street Address</label>
                        <input type="text" placeholder="Street address" name="shipStreet" id="shipStreet">
                        <label for="shipCity">City</label>
                        <input type="text" placeholder="City" name="shipCity" id="shipCity">
                        <label for="shipState">State</label>
                        <input type="text" placeholder="State" name="shipState" id="shipState">
                        <button type="submit">Confirm</button>
                    </form>
                    <a href="shop.php">Back To Shop</a>
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
                    <a href="checkout.php"><button class="checkout">Check Out</button></a>
                </div>
            </div>
        </main>
    </body>
</html>
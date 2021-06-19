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
                    <p><span>Account</span><span>Shipping</span><span>Billing</span><span>Confirm</span></p>
                    <div class="circles">
                        <i class="fas fa-circle fa-4x complete"></i>
                        <i class="fas fa-circle fa-4x complete"></i>
                        <i class="fas fa-circle fa-4x complete"></i>
                        <i class="fas fa-circle fa-4x"></i>
                    </div>
                    <div class="checks">
                        <i class="fas fa-check fa-2x"></i>
                        <i class="fas fa-check fa-2x"></i>
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <hr class="complete step4" />
                    <hr/>
                </div>
                <div id="cart-checkout">
                    <h3>Edit Cart</h3>
                    <hr/>
                    <img src="assets/images/tiny-eli1.jpg" alt="Eli's Tragic Backstory front cover">
                    <label for="qty">Qty:</label>
                    <input type="text" id="qty" name="qty"  value="1"></input>
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
                        <p>Total: <span>$6.60</span></p>
                    </div>
                    <hr/>
                    <p>Thank you for supporting me!</p>
                </div>
                <div class="swap">
                    <h1>Confirm Order</h1>
                    <p>Just to confirm, esteemed guest:
                    <p>You're purchasing 1 item for a total of $6.60 including shipping and tax.</p>
                    <p>Your items will be shipped to Esteemed Guest, 1234 E Road St, Seattle WA 98103.</p>
                    <p>You're paying with a card ending in *1234.</p>
                    <p>Your receipt and digital goods will be delivered to email@email.com.</p>
                    <p>Is this correct?</p>
                    <a href="receipt.php" class="button lg">Complete Transaction</a>
                    <a href="billing.php" id="goback">No, go back</a>
                </div>
                <a href="billing.php" id="back">Back To Billing</a>
            </div>
        </main>
    </body>
</html>
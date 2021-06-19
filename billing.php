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
                        <i class="fas fa-circle fa-4x"></i>
                        <i class="fas fa-circle fa-4x"></i>
                    </div>
                    <div class="checks">
                        <i class="fas fa-check fa-2x"></i>
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <hr class="complete step3" />
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
                    <h1>Billing</h1>
                    <p>Thank you! Your support makes my art possible.</p>
                    <form id="billingForm" class="single" action="billingProcessing.php" method="POST">
                        <label for="useShipping" id="checkLabel">Use Shipping Information?</label>
                        <input type="checkbox" id="useShipping" name="useShipping" checked>
                        <div class="radios">
                            <input type="radio" id="credit" name="payment" value="credit" checked>
                            <label for="credit">Credit Card</label>
                            <input type="radio" id="debit" name="payment" value="debit">
                            <label for="debit">Debit Card</label>
                            <input type="radio" id="paypal" name="payment" value="paypal">
                            <label for="paypal">Paypal</label>
                            <input type="radio" id="apple" name="payment" value="apple">
                            <label for="apple">Apple Pay</label>
                            <input type="radio" id="google" name="payment" value="google">
                            <label for="google">Google Pay</label>
                            <input type="radio" id="samsung" name="payment" value="samsung">
                            <label for="samsung">Samsung Pay</label>
                        </div>
                        <input type="text" placeholder="Card number" name="cardNumber" id="cardNumber" 
                        aria-label="Card number">
                        <input type="text" placeholder="Zip code" name="billZip" id="billZip" aria-label="Zip code">
                        <input type="text" placeholder="Security number (back of card)" name="securityNumber" 
                        id="securityNumber" aria-label="Security Number (back of card)">
                        <input type="text" placeholder="Expiration date" name="expiration" id="expiration" 
                        aria-label="Expiration date">
                        <!-- <button type="submit" class="button">Confirm</button> -->
                    </form>
                    <a href="confirm.php" class="button">Confirm</a>
                </div>
                <a href="shipping.php" id="back">Back To Shipping</a>
            </div>
        </main>
    </body>
</html>
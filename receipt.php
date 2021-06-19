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
                        <i class="fas fa-circle fa-4x complete"></i>
                    </div>
                    <div class="checks">
                        <i class="fas fa-check fa-2x"></i>
                        <i class="fas fa-check fa-2x"></i>
                        <i class="fas fa-check fa-2x"></i>
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <hr class="complete step5" />
                    <hr/>
                </div>
                <div id="cart-checkout" class="receipt">
                    <h3>Receipt</h3>
                    <hr/>
                    <img src="assets/images/tiny-eli1.jpg" alt="Eli's Tragic Backstory front cover">
                    <label for="qty">Qty:</label>
                    <input type="text" id="qty" name="qty"  value="1" disabled></input>
                    <p>$5.99</p>
                    <p class="title">Eli's Tragic Backstory (PDF)</p>
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
                    <h1>Success!</h1>
                    <p>Thank you, esteemed guest.</p>
                    <p>You've purchased 1 item for $6.60 with a card ending in *1234.
                        Your receipt and digital goods have been delivered to email@email.com.
                        Physical items will be shipped to 1234 E Road St - track them <a href="">here</a>.
                        If you have any questions, please <a href="contact.php">contact me</a> so I can help.</p>
                    <p>For more of my work, please check out my <a href="">Patreon</a>, 
                    <a href="https://www.instagram.com/roryhackney">Instagram</a>, or 
                    <a href="blog.php">blog</a>.</p>
                    <p>I also take <a href="commissions.php">commissions</a>.</p>
                    <p>Thank you so much for supporting my work. A digital thank you card is on its way!</p>
                    <p>Sincerely,</p>
                    <p class="cursive">Rory</p>
                    <p>(You can safely close the tab.)</p>
                    <a href="">Print Receipt</a>
                    <a href="index.php">Home</a>
                </div>
            </div>
        </main>
    </body>
</html>
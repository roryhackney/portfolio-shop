<?php

//Set title, h1, currentPage, and other content depending on page
$page = basename($_SERVER['PHP_SELF']);
switch ($page) {
    case 'index.php':
        $title = "Portfolio | Rory's Stories, Art Portfolio and Shop";
        $heading = "Portfolio";
        $currentPage = "home";
        $promo = "<p>Rory is a nonbinary artist and developer with autism and anxiety. " .
                "They enjoy telling stories centering queer, neurodivergent characters " .
                "overcoming magical but harsh internal and external worlds, using ink, " .
                "watercolor, digital tools, and code. They make comics, games, and websites.</p>";
        break;
    case 'shop.php':
        $title = "Shop | Rory's Stories, Art Portfolio and Shop";
        $heading = "Shop";
        $currentPage = "shop";
        $promoHeading = "Store Launch Sale!";
        $promo = "<p class=\"bolder\">10% off</p>" .
                "<p>Digital goods and commissions</p>" .
                "<p class=\"small\">4/15-4/21</p>";
        break;
    case 'detail.php':
        $title = "Product Detail | Rory's Stories, Art Portfolio and Shop";
        $currentPage = "shop";
        break;
    case 'checkout.php':
    case 'shipping.php':
        $title = "Checkout | Rory's Stories, Art Portfolio and Shop";
        $currentPage = "checkoutBody";
        break;
    default:
        $title = "Rory's Stories, Art Portfolio and Shop";
        $heading = "Page Not Found";
        $currentPage = "404";
        $promo = "Page Not Found";
        break;
};

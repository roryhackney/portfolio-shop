<?php
include("includes/credentials.php");
include("includes/functions.php");
include("includes/page-info.php");
include("includes/header.php");
?>
            <div id="hero">
                <img src="assets/images/hero-rory-cliff.jpg" alt="A digital illustration of a cliff by the woods.">
                <p id="promo-heading"><?php echo $promoHeading; ?></p>
                <div>
                    <?php echo $promo; ?>
                </div>
                <i class="fas fa-caret-left i-bg-l"></i><i class="fas fa-caret-left"></i>
                <i class="fas fa-caret-right i-bg-r"></i><i class="fas fa-caret-right"></i>
            </div>
            <div id="content">
                <h1><?php echo $heading; ?></h1>
                <div id="content-top">
                    <button id="drop-down">Sort By <i class="fas fa-angle-down"></i></button>
                    <form method="get" action="main-search-processor.php">
                        <input type="text" placeholder="Search" name="search" id="search" aria-label="search">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <?php include("includes/sidebar-shop.php"); ?>
                <div class="row">
                    <?php allProductCards(); ?>
                </div>
            </div>
<?php include("includes/footer.php");
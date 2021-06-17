<?php
include("includes/functions.php");
include("includes/page-info.php");
include("includes/header.php");
?>
            <div id="hero">
                <img src="assets/images/hero-rory-forest.jpg" alt="A digital illustration of Rory standing in a forest">
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
                <?php include("includes/sidebar-home.php"); ?>
                <div class="row">
                    <div class="item-card">
                        <img src="assets/images/card-eli.jpg" alt="Digital illustration of a scary looking lady.">
                        <h3>Eli's Tragic Backstory (2016)</h3>
                        <p>24 page comic about mistakes, time travel, and making the right choices.</p>
                        <p>Comic | Color | Purchasable | Digital</p>
                    </div>
                    <div class="item-card">
                        <img src="assets/images/card-home.jpg" alt="Ink drawing of a creature pouring flour in a bowl.">
                        <h3>Home (2014)</h3>
                        <p>3 page comic about home, loneliness, and filling the void.</p>
                        <p>Comic | BW | Purchasable | Ink</p>
                    </div>
                    <div class="item-card">
                        <img src="assets/images/card-pitch.jpg" alt="Ink painting of a thief running from a store">
                        <h3>Be Your Best (2016)</h3>
                        <p>4 page pitch for a story about magic, friendship, and choices.</p>
                        <p>Comic | Color | Purchasable | Ink</p>
                    </div>
                </div>
            </div>
<?php include("includes/footer.php");
<?php
include("includes/credentials.php");
include("includes/functions.php");
include("includes/page-info.php");
include("includes/header.php");
?>
            <div id="content">
                <div id="left">
                <p id="breadcrumb">
                <a href="shop.php">Shop</a>
                <span> > </span>
                <?php
                if (isset($_GET['id'])) {
                    $productId = cleanId($_GET['id']);
                } else {
                    $productId = cleanId(0);
                }
                $connect = @mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DATABASE);
                $query = "SELECT * FROM Products WHERE id=" . mysqli_real_escape_string($connect, $productId);
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) === 1) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<a href="shop.php?filter=' . $row['category'] . 's">' . $row['category'] . 's</a>';
                        echo '<span> > ' . $row['title'] . ' (' . $row['yearMade'] . ')</span>';
                        echo '</p>';
                        echo '<div class="previews">';
                        echo '<img class="tiny" src="assets/images/tiny-' . $row['imgName'] . '1.jpg" ' .
                        'alt="' . $row['img1alt'] . '">';
                        echo '<img class="tiny" src="assets/images/tiny-' . $row['imgName'] .  '2.jpg" ' .
                        'alt="' . $row['img2alt'] . '">';
                        echo '<img class="tiny" src="assets/images/tiny-' . $row['imgName'] . '3.jpg" ' .
                        'alt="' . $row['img3alt'] . '">';
                        echo '</div>';
                        //TODO CHANGE IMG SRC AND ALT OF LARGE ON CLICK OF TINY IMG - HOW TO DO WITH DATABASE + ONCLICK?
                        echo '<img class="large" src="assets/images/large-' . $row['imgName'] . '1.jpg" ' .
                        'alt="' . $row['img1alt'] . '">';
                        echo '</div> <!--end left div-->';
                        echo '<div id="right">';
                        echo '<h1>' . $row['title'] . ' (' . $row['yearMade'] . ')</h1>';
                        echo '<p>' . $row['longDesc'] . '</p>';
                        //display format options - PDF, original, print, color or BW
                        if ($row['pdfPrice'] !== null) {
                            if ($row['color'] === 'Color') {
                                echo '<p>Available as a full color PDF for $' . $row['pdfPrice'] . '.</p>';
                            } else {
                                echo '<p>Available as a grayscale PDF for $' . $row['pdfPrice'] . '.</p>';
                            }
                        }
                        if ($row['origPrice'] !== null) {
                            if ($row['color'] === 'Color') {
                                echo '<p>Available as full color original art for $' . $row['origPrice'] .
                                ' (plus shipping).</p>';
                            } else {
                                echo '<p>Available as grayscale original art for $' . $row['origPrice'] .
                                ' (plus shipping).</p>';
                            }
                        }
                        if ($row['printPrice'] !== null) {
                            if ($row['color'] === 'Color') {
                                echo '<p>Available as a full color print for $' . $row['printPrice'] .
                                ' (plus shipping).</p>';
                            } else {
                                echo '<p>Available as a grayscale print for $' . $row['printPrice'] .
                                ' (plus shipping).</p>';
                            }
                        }
                        //display link to portfolio detail page if it exists
                        if ($row['portfolioLink'] !== null) {
                            echo '<a href="' . $row['portfolioLink'] . '">See more about this project</a>';
                        }
                        //display cart buttons depending on format options
                        //TODO Test formatting if all 3 buttons exist
                        echo '<div>';
                        if ($row['pdfPrice'] !== null) {
                            echo '<button class="add-cart" id="pdf">PDF</button>';
                        }
                        if ($row['origPrice'] !== null) {
                            echo '<button class="add-cart" id="orig">Original</button>';
                        }
                        if ($row['printPrice'] !== null) {
                            echo '<button class="add-cart" id="print">Print</button>';
                        }
                        echo '</div>';
                        //confirmation message
                        echo '<div id="addedMessage" class= "hidden">';
                        echo '<p>Added to cart.</p>';
                        echo '</div>';
                        echo '<a id="back" href="shop.php">Back To Shop</a>';
                        //format-specific details
                        echo '<h2>Product Details</h2>';
                        if ($row['pdfDetails'] !== null) {
                            echo '<p><span class="bold">PDF: </span>' . $row['pdfDetails'] . '</p>';
                        }
                        if ($row['origDetails'] !== null) {
                            echo '<p><span class="bold">Original: </span>' . $row['origDetails'] . '</p>';
                        }
                        if ($row['printDetails'] !== null) {
                            echo '<p><span class="bold">Print: </span>' . $row['printDetails'] . '</p>';
                        }
                        echo '<button class="review">Leave Review</button>';
                        echo '</div> <!--end right div-->';
                    }
                } else {
                    echo '<h1>Product Not Found</h1>';
                    echo '<a href="shop.php">Back To Shop</a>';
                }
                @mysqli_free_result($result);
                @mysqli_close($connect);
                ?>
            </div> <!--end content div-->
<?php include("includes/footer.php");
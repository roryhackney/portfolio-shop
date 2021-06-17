<?php

//Define copyright year, to be inserted into footer
function getCopyDate()
{
    date_default_timezone_set('America/Los_Angeles');
    $currentYear = date('Y');
    //if past 2021, return 2021-$currentYear
    if ($currentYear > 2021) {
        return("2021 - " . $currentYear);
    } else {
        return("2021");
    }
}
//end getCopyDate()

//displays database data, takes sql query
function allProductCards($sql = 'SELECT * FROM Products')
{
    $connect = @mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DATABASE);
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['pdfPrice'] !== null) {
                $price = $row['pdfPrice'];
                $format = 'Digital';
            } elseif ($row['origPrice'] !== null) {
                $price = $row['origPrice'];
                $format = 'Original';
            } else {
                $price = $row['printPrice'];
                $format = 'Print';
            }
            echo '<div class="item-card">';
            echo '<a href="detail.php?id=' . $row['id'] . '">';
            echo '<img src="assets/images/card-' . $row['imgName'] . '.jpg" alt="' . $row['img1alt'] . '">';
            echo '</a>';
            echo '<a href="detail.php?id=' . $row['id'] . '">';
            echo '<h3>' . $row['title'] . ' (' . $row['yearMade'] . ')</h3>';
            echo '</a>';
            echo '<p>' . $row['shortDesc'] . '</p>';
            echo '<p>' . $row['category'] . ' | ' . $row['color'] . ' | $' . $price . ' | ' . $format . '</p>';
            echo '</div>';
        }
    } else {
        echo 'No information found';
    }
    @mysqli_free_result($result);
    @mysqli_close($connect);
}

//check type, positive value of int param, return clean integer
function cleanId($input)
{
    if (is_numeric($input) !== true) {
        $input = 0;
    }
    $input = (int)$input;
    if ($input < 0) {
        $input = 0;
    }
    if (is_numeric($input) === true) {
        return $input;
    } else {
        return 0;
    }
}

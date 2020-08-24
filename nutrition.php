<?php

include 'connection.php';

if (isset($_GET['item'])) {
    $id = $_GET['item'];
} else {
    $id = 1;
}
// gets information from currently selected item
$this_item_query = "SELECT * FROM items WHERE ItemID='" . $id . "'";
$this_item_result = mysqli_query($con, $this_item_query);
$this_item_record = mysqli_fetch_assoc($this_item_result);

// selects the name and ID of every item to populate drop down
$all_items_query = "SELECT ItemID, ItemName FROM items";
$all_items_result = mysqli_query($con, $all_items_query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>WGC CANTEEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bikkieday.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">WGC Canteen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Home</a>
            <a class="nav-item nav-link" href="order.php">Order</a>
            <a class="nav-item nav-link" href="studentsignup.php">Get a student ID</a>
            <a class="nav-item nav-link active" href="nutrition.php">Nutritional information<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="admin.php">Admin</a>
            <a class="nav-item nav-link" href="loginpage.php">Log in</a>
            <a class="nav-item nav-link" href="process_logout.php">Logout</a>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Nutritional info</h1>
        <p class="lead"></p>
    </div>
</div>

<body>

<h3>Select item to view KJ content</h3>
<! -- Items form -->
<form name='items_form' id='items_form' method='get' action='nutrition.php'>
    <select id='item' name='item'>
        <! -- options -->
        <?php
        while ($all_items_record = mysqli_fetch_assoc($all_items_result)) {
            echo "<option value = '" . $all_items_record['ItemID'] . "'>";
            echo $all_items_record['ItemName'];
            echo "</option>";
        }
        ?>
    </select>

    <input type="submit" name="items_button" value="Show me the nutritional information">
</form>

<?php
echo "<p1> Name: " . $this_item_record['ItemName'] . "<br>";
echo "<p1> KJ: " . $this_item_record['KJ'] . "<br>";
?>

<h4>Know what you're looking for? Try searching</h4>

<form action="" method="post">
    <input type="text" name='search'>
    <input type="submit" name="submit" value="search">
</form>

<?php
if (isset($_POST['search'])) {
    $search = $_POST['search'];

    // selects everything from items table pertaining to their search
    $query1 = "SELECT * FROM items WHERE ItemName LIKE '%$search'";
    $query = mysqli_query($con, $query1);
    $count = mysqli_num_rows($query);

    if ($count == 0) {
        echo "There were no search results";
    } else {
        while ($row = mysqli_fetch_array($query)) {
            echo $row['ItemName'];
            echo "<br>";
        }
    }
}
?>


<!-- Footer -->
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="drinks.php"><i class="fa fa-angle-double-right"></i>Order</a></li>
                    <li><a href="orders.php;"><i class="fa fa-angle-double-right"></i>Admin</a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/RNZFB/"
                                                    aria-label="Link to Blind Foundation Facebook"><i
                                    class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/blindnz?lang=en"
                                                    aria-label="Link to Blind Foundation Twitter"><i
                                    class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/blindfoundation/?hl=en"
                                                    aria-label="Link to Blind Foundation Instagram"><i
                                    class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
    die();
} else {
    echo "connected to database";
}

if((!isset($_SESSION['logged_in'])) or $_SESSION['logged_in']!=1){
    header("Location: error_page.php");
}

if (isset($_GET['item'])){
    $id = $_GET['item'];
}else{
    $id = 1;
}

$this_item_query = "SELECT ItemName, Price, KJ, Stock, Availability, Category FROM items WHERE ItemID='" . $id . "'";
$this_item_result = mysqli_query($con, $this_item_query);
$this_item_record = mysqli_fetch_assoc($this_item_result);

$all_items_query = "SELECT ItemID, ItemName, Price FROM items";
$all_items_result = mysqli_query($con, $all_items_query);

$update_items = "SELECT * FROM items";
$update_items_record = mysqli_query($con, $update_items);

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
            <a class="nav-item nav-link" href="nutrition.php">Nutritional information</a>
            <a class="nav-item nav-link active" href="admin.php">Admin<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="loginpage.php">Log in</a>
            <a class="nav-item nav-link" href="process_logout.php">Logout</a>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">WGC Canteen</h1>
        <p class="lead">Welcome!</p>
    </div>
</div>

<h2>Login</h2>


<h4>Add another</h4>
<form action="insert.php" method="post">
    Item Name: <input type="text" name="ItemName"><br>
    Cost: <input type="text" name="Price"><br>
    KJ: <input type="text" name="KJ"><br>
    Availability(Type 'everyday' or specify day of week: <input type="text" name="Availability"><br>
    Stock (Type 1 for in stock, 0 for out of stock): <input type="text" name="Stock"><br>
    Category (hot or cold): <input type="text" name="Category"><br>
    <input type="submit" value="Insert">
</form>


<h4>Update items</h4>

<table>
    <tr>
        <th>Item Information</th>
        <th>Price</th>
        <th>KJ</th>
        <th>Availability</th>
        <th>Stock</th>
        <th>Category</th>
        <th>Submit</th>
        <th>Delete</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($update_items_record))
    {
        echo "<tr><form action = update.php method= post>";
        echo "<td><input type='text' name='ItemName' value='".$row['ItemName']."'></td>";
        echo "<td><input type='text' name='Price' value='".$row['Price']."'></td>";
        echo "<td><input type='text' name='KJ' value='".$row['KJ']."'></td>";
        echo "<td><input type='text' name='Availability' value='".$row['Availability']."'></td>";
        echo "<td><input type='text' name='Stock' value='".$row['Stock']."'></td>";
        echo "<td><input type='text' name='Category' value='".$row['Category']."'></td>";
        echo "<input type=hidden name=ItemID value='".$row['ItemID']."'>";
        echo "<td><input type =submit></td>";
        echo "<td><a href=delete.php?ItemID=".$row['ItemID'].">Delete</a></td>";
        echo "</form></tr>";
    }
    ?>
</table>


<!-- Footer -->
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="drinks.php"><i class="fa fa-angle-double-right"></i>Order</a></li>
                    <li><a href="admin.php;"><i class="fa fa-angle-double-right"></i>Admin</a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/RNZFB/" aria-label="Link to Blind Foundation Facebook"><i
                                class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/blindnz?lang=en" aria-label="Link to Blind Foundation Twitter"><i
                                class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/blindfoundation/?hl=en" aria-label="Link to Blind Foundation Instagram"><i
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
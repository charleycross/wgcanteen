<?php

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
    die();
} else {
    echo "connected to database";
}

if (isset($_GET['item'])) {
    $id = $_GET['item'];
} else {
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
            <a class="nav-item nav-link active" href="order.php">Order<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="nutrition.php">Nutritional information</a>
            <a class="nav-item nav-link" href="admin.php">Admin</a>
            <a class="nav-item nav-link" href="loginpage.php">Log in</a>
            <a class="nav-item nav-link" href="process_logout.php">Logout</a>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Order</h1>
        <p class="lead">Feel free to place an order here! Press the buttons to sort by category.</p>
    </div>
</div>


<h4>Enter your details to begin your order</h4>
<form action="insertstudent.php" method="post">
    First Name: <input type="text" name="FName"><br>
    Last Name: <input type="text" name="LName"><br>
    <input type="submit" value="Begin">
</form>

<h2>Menu</h2>

<?php

$result = $con->query($all_items_query);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
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
                    <li><a href="order.php"><i class="fa fa-angle-double-right"></i>Order</a></li>
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
<?php

include 'connection.php';


if (isset($_GET['item'])) {
    $id = $_GET['item'];
} else {
    $id = 1;
}

// selects details of currently selected item
$this_item_query = "SELECT * FROM items WHERE ItemID='" . $id . "'";
$this_item_result = mysqli_query($con, $this_item_query);
$this_item_record = mysqli_fetch_assoc($this_item_result);

// selects ID, name, and price, sorts them by ascending price and then ascending name
$all_items_query = "SELECT ItemID, ItemName, Price FROM items ORDER BY Price ASC, ItemName ASC";
$all_items_result = mysqli_query($con, $all_items_query);

// selects everything from items
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
            <a class="nav-item nav-link" href="studentsignup.php">Get a student ID</a>
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

<h2>Place your order here: </h2>

<form action="insertorder.php" method="post">
    StudentID: <input type="text" name="StudentID"><br>
    ID of item to order: <input type="text" name="ItemID"><br>
    <input type="submit" name="order" value="Submit">
</form>

<h3>Select a day of the week to view everything available on that day. Otherwise, choose by category.</h3>

<form action="order.php" method="post">
    <input type='submit' name='Monday' value="Monday">
</form>

<form action="order.php" method="post">
    <input type='submit' name='Tuesday' value="Tuesday">
</form>

<form action="order.php" method="post">
    <input type='submit' name='Wednesday' value="Wednesday">
</form>

<form action="order.php" method="post">
    <input type='submit' name='Thursday' value="Thursday">
</form>

<form action="order.php" method="post">
    <input type='submit' name='Friday' value="Friday">
</form>

<form action="order.php" method="post">
    <input type='submit' name='Hot' value="Hot">
</form>

<form action="order.php" method="post">
    <input type='submit' name='Cold' value="Cold">
</form>

<form action="order.php" method="post">
    <input type='submit' name='Drink' value="Drinks">
</form>



<?php
if(isset($_POST['Monday']))
{
    // selects all items that are available on monday or everyday
    $result=mysqli_query($con, "SELECT * FROM items WHERE Availability='monday' OR Availability='everyday'");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}
?>

<?php
if(isset($_POST['Tuesday']))
{
    // selects all items that are available on tuesday or everyday
    $result=mysqli_query($con, "SELECT * FROM items WHERE Availability='tuesday' OR Availability='everyday'");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}
?>

<?php
if(isset($_POST['Wednesday']))
{
    // selects all items that are available on wednesday or everyday
    $result=mysqli_query($con, "SELECT * FROM items WHERE Availability='wednesday' OR Availability='everyday'");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}

if(isset($_POST['Thursday']))
{
    // selects all items that are available on thursday or everyday
    $result=mysqli_query($con, "SELECT * FROM items WHERE Availability='thursday' OR Availability='everyday'");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}

if(isset($_POST['Friday']))
{
    // selects all items that are available on friday or everyday
    $result=mysqli_query($con, "SELECT * FROM items WHERE Availability='friday' OR Availability='everyday'");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}

if(isset($_POST['Hot']))
{
    // selects items that have the hot category
    $result=mysqli_query($con, "SELECT * FROM items WHERE Category='hot'");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}

if(isset($_POST['Cold']))
{
    // selects items that have the cold category
    $result=mysqli_query($con, "SELECT * FROM items WHERE Category='cold'");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}
if(isset($_POST['Drink']))
{
    // selects items that have the drink category
    $result=mysqli_query($con, "SELECT * FROM items WHERE Category='drink'");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}
?>

<h4>Prefer to see everything? Choose how you want it to be sorted: </h4>

<form action="order.php" method="post">
    <input type='submit' name='PriceLow' value="Price low to high">
</form>

<form action="order.php" method="post">
    <input type='submit' name='PriceHigh' value="Price high to low">
</form>

<form action="order.php" method="post">
    <input type='submit' name='Alphabetical' value="Alphabetical">
</form>

<form action="order.php" method="post">
    <input type='submit' name='Random' value="Give me random">
</form>

<?php

if(isset($_POST['PriceLow']))
{
    // selects everything from items in price, low to high
    $result=mysqli_query($con, "SELECT * FROM items ORDER BY Price ASC");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}
if(isset($_POST['PriceHigh']))
{
    // selects everything from items in price, high to low
    $result=mysqli_query($con, "SELECT * FROM items ORDER BY Price DESC");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}
if(isset($_POST['Alphabetical']))
{
    // selects everything from items in alphabetical order
    $result=mysqli_query($con, "SELECT * FROM items ORDER BY ItemName ASC");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
        }
    }
}
if(isset($_POST['Random']))
{
    // selects everything from items
    $result=mysqli_query($con, "SELECT * FROM items");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            echo "<table><tr><th>Item ID</th><th>Name</th><th>Price</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["ItemID"]. "</td><td>" . $row["ItemName"]. "</td><td>" . $row["Price"]. "</td></tr>";
            }
            echo "</table>";
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
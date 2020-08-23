<?php

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
    die();
} else {
    echo "connected to database";
}

if (isset($_GET['item'])){
    $id = $_GET['item'];
}else{
    $id = 1;
}


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
            <a class="nav-item nav-link" href="nutrition.php">Nutritional information</a>
            <a class="nav-item nav-link" href="admin.php">Admin</a>
            <a class="nav-item nav-link active" href="loginpage.php">Log in<span class="sr-only">(current)</span></a>
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

<form name='login_form' id='login_form' method='post' action='process_login.php'>
    <label for='username'>Username:</label>
    <input type='text' name='username'><br>

    <label for='password'>Password:</label>
    <input type='password' name='password'><br>

    <input type='submit' name='submit' id='submit' value='Log In'>

</form>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
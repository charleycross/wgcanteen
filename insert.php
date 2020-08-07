<?php

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
    die();
} else {
    echo "connected to database";
}

$ItemName = $_POST['ItemName'];
$Price = $_POST['Price'];

$insert_item = "INSERT INTO items (ItemName, Price) VALUES ('$ItemName', '$Price')";

if(!mysqli_query($con, $insert_item))
{
    echo 'Not Inserted';
}
else
{
    echo 'Inserted';
}

header("refresh:2; url = admin.php");

?>
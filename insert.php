<?php

include 'connection.php';

$ItemName = $_POST['ItemName'];
$Price = $_POST['Price'];
$KJ = $_POST['KJ'];
$Availability = $_POST['Availability'];
$Stock = $_POST['Stock'];
$Category = $_POST['Category'];


// inserts all user-inputted details into database
$insert_item = "INSERT INTO items (ItemName, Price, KJ, Stock, Availability, Category) VALUES ('$ItemName', '$Price', '$KJ', '$Stock', '$Availability', '$Category')";

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
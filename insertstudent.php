<?php

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
    die();
} else {
    echo "connected to database";
}

$FName = $_POST['FName'];
$LName = $_POST['LName'];

$insert_student = "INSERT INTO students (FName, LName) VALUES ('$FName', '$LName')";

if(!mysqli_query($con, $insert_student))
{
    echo 'Not Inserted';
}
else
{
    echo 'Inserted';
}

header("refresh:2; url = order.php");

?>
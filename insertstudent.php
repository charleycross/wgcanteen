<?php

include 'connection.php';

$FName = $_POST['FName'];
$LName = $_POST['LName'];
$Email = $_POST['Email'];

// inserts user inputted values into students table in database
$insert_student = "INSERT INTO students (FName, LName, Email) VALUES ('$FName', '$LName', '$Email')";



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
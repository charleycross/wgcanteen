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
$Email = $_POST['Email'];

$insert_student = "INSERT INTO students (FName, LName, Email) VALUES ('$FName', '$LName', '$Email')";

$to= "crossch@wgc.school.nz";

$email_from = 'crossch@wgc.school.nz';

$email_subject = "Your student ID";

$email_body = "Hello $FName.\n".
    "Here is your student ID: 1";


$headers = "From: $email_from \r\n";

$headers .= "Reply-To: charleycross2002@gmail.com \r\n";


mail($to ,$email_subject,$email_body,$headers);


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
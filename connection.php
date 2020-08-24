<?php
$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL:" . mysqli_connect_error();
die();
} else {
echo "connected to database";
}
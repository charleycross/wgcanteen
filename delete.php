<?php

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
    die();
} else {
    echo "connected to database";
}

$delete_item = "DELETE FROM items WHERE ItemID='$_GET[ItemID]'";

if (!mysqli_query($con, $delete_item)) {
    echo 'Not Deleted';
} else {
    echo "Deleted";
}

header("refresh:2; url=admin.php");
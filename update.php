<?php

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
    die();
} else {
    echo "connected to database";
}

$update_item = "UPDATE items SET ItemName='$_POST[ItemName]', Price='$_POST[Price]',KJ='$_POST[KJ]',Availability='$_POST[Availability]',Stock='$_POST[Stock]', Category='$_POST[Category]' WHERE ItemID='$_POST[ItemID]'";

if (!mysqli_query($con, $update_item)) {
    echo 'Not updated';
} else {
    echo 'Updated';
}

header("refresh:2; url = admin.php");

?>
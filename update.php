<?php

include 'connection.php';

// updates the item details to be that that was entered by the user
$update_item = "UPDATE items SET ItemName='$_POST[ItemName]', Price='$_POST[Price]',KJ='$_POST[KJ]',Availability='$_POST[Availability]',Stock='$_POST[Stock]', Category='$_POST[Category]' WHERE ItemID='$_POST[ItemID]'";

if (!mysqli_query($con, $update_item)) {
    echo 'Not updated';
} else {
    echo 'Updated';
}

header("refresh:2; url = admin.php");

?>
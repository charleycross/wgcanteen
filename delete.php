<?php

include 'connection.php';

// query to delete selected item from database
$delete_item = "DELETE FROM items WHERE ItemID='$_GET[ItemID]'";

if (!mysqli_query($con, $delete_item)) {
    echo 'Not Deleted';
} else {
    echo "Deleted";
}

header("refresh:2; url=admin.php");
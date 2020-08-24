<?php

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
$StudentID = "";
$ItemID = "";

if (isset($_POST['order'])) {
    $StudentID = $_POST['StudentID'];
    $ItemID = $_POST['ItemID'];

    $sql_e = "SELECT * FROM items WHERE ItemID='$ItemID'";
    $res_e = mysqli_query($con, $sql_e);

    if(mysqli_num_rows($res_e) > 0){
        $query = "INSERT INTO orders (StudentID, ItemID) VALUES ('$StudentID', '$ItemID')";
        $results = mysqli_query($con, $query);
        $namequery = "SELECT FName from students WHERE StudentID='$StudentID'";
        $nameresults = mysqli_query($con, $namequery);
        while($row = mysqli_fetch_array($nameresults)) {
            echo "Order made successfully. Thank you ";
            echo $row['FName'];
            echo " .You may now press back to return to the main website."; }
        exit();

    }else{
        echo "Sorry! It appears this item does not exist. Please press the back button and try again.";

        }

}

header("refresh:10; url = order.php");


?>
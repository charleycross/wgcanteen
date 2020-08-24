<?php

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
$FName = "";
$LName = "";
$Email = "";

if (isset($_POST['register'])) {
    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $Email = $_POST['Email'];

    // selects everything from students that has the entered email- checks it's not in use
    $sql_e = "SELECT * FROM students WHERE Email='$Email'";
    $res_e = mysqli_query($con, $sql_e);

    if(mysqli_num_rows($res_e) > 0){
        echo "You already have a student ID- email already registered";

    }else{
        // inserts the user inputted values into database
        $query = "INSERT INTO students (FName, LName, Email) VALUES ('$FName', '$LName', '$Email')";
        $results = mysqli_query($con, $query);
        // gets the generated studentID that corresponds to the email they just entered
        $IDquery = "SELECT StudentID from students WHERE Email='$Email'";
        $IDresults = mysqli_query($con, $IDquery);
        while($row = mysqli_fetch_array($IDresults)) {
            echo "Registered successfully. Your student ID is: ";
            echo $row['StudentID'];
            echo " You may now press back to return to the main website.";

        }
        exit();
    }
    }

    header("refresh:2; url = studentsignup.php");


?>
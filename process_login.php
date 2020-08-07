<?php

session_start();

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
    die();
} else {
    echo "connected to database";
}

echo "worked";


$user = trim($_POST['Username']);
$pass = trim($_POST['Password']);

$login_query = "SELECT Password FROM admins WHERE Username='".$user."'";
$login_result = mysqli_query($con, $login_query);
$login_record = mysqli_fetch_assoc($login_result);

$hash = $login_record['Password'];

/*$verify = password_verify($pass, $hash);
if($verify){
    echo "Logged In";
}
else{
    echo "Incorrect username or password";
}
*/
$verify = password_verify($pass, $hash);
if($verify){
    $_SESSION['logged_in']=1;
    header("Location: index.php");
}
else{
    echo "Incorrect username or password";
    header("Location: admin.php");
}

?>
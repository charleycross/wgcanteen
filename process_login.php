<?php

session_start();

include 'connection.php';

$user = trim($_POST['username']);
$pass = trim($_POST['password']);


// selects the password that corresponds to the username
$login_query = "SELECT Password FROM admins WHERE Username='".$user."'";
$login_result = mysqli_query($con, $login_query);
$login_record = mysqli_fetch_assoc($login_result);

$hash = $login_record['password'];


$verify = password_verify($pass, $hash);
if($verify){
    $_SESSION['logged_in']=1;
    header("Location: index.php");
}
else{
    echo "Incorrect username or password";
    header("Location: order.php");
}

?>
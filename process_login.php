<?php

session_start();

$con = mysqli_connect("localhost", "crossch", "tallpark84", "crossch_canteen");

$user = trim($_POST['Username']);
$pass = trim($_POST['Password']);

$login_query = "SELECT password FROM admins WHERE username='".$user."'";
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
    header("Location: index.php");
}

?>
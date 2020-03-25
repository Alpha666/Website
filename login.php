<?php

session_start();

include ("connection.php");

$username = $_POST["utr-username"];
$password =$_POST["utr-password"];

$data = mysqli_query($con,"SELECT username,password FROM users WHERE username = '$username' and password = '$password'");
$cekdata = mysqli_fetch_row($data);

if ($cekdata > 0) {
    $_SESSION['utr-username'] = $username;
    $_SESSION['status'] = "login";
    header("location: oee-details.html");
}
else {
    // echo "Username atau Password salah !";
    header("location:sign-in.html");
}
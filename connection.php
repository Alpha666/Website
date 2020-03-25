<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "utr";

$con = new mysqli($server, $username, $password, $database);

if($con->connect_error){
    die("Connection Failed".$con->connect_error);
}
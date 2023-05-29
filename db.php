<?php

$server ="localhost";
$username="root";
$password="";
$dbName="squadUsers";

$conn = mysqli_connect($server,$username,$password,$dbName);

if(!$conn){
    die("error" . mysqli_connect_error());
}


?>
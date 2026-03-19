<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "web_db";

$conn = mysqli_connect($host, $user , $password , $database);

if(!$conn){
    // die("connection Failed:" . mysqli_connect_error());
    // echo "Connection Falied";
}else{
    // echo "Connection Succesflly";
}

?>
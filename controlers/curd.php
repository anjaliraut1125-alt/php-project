<?php 
include "../includes/config.php";



$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$message = $_POST['message'];

// echo $full_name; we can do this when we have to find an error

$sql = "INSERT INTO curd(full_name , email , phone , city , message)
VALUES('$full_name' , '$email' , '$phone' , '$city' ,'$message')";

if(mysqli_query($conn,$sql)){
    echo "Data Insert Successfully.";
    // header("Location: ../my-account.php");

}else{
    echo "Data Failed!";
}



?>



<!-- display data -->


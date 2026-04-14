<?php 
include "../includes/config.php";



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$message = $_POST['message'];

// echo $full_name; we can do this when we have to find an error

$sql = "INSERT INTO curd(name , email , phone , city , message)
VALUES('$name' , '$email' , '$phone' , '$city' ,'$message')";

if(mysqli_query($conn,$sql)){
    // echo "Data Insert Successfully.";
    header("Location: ../curd-practice/form.php");

}else{
    echo "Data Failed!";
}



?>



<!-- display data -->


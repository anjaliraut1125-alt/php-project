<?php 
include "../includes/config.php";



$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$phone = $_POST['phone'];


// echo $full_name; we can do this when we have to find an error

$query = "SELECT *FROM users WHERE email = '$email'";
$result = mysqli_query($conn , $query);

if(mysqli_num_rows($result)> 0){
    echo "Email Already Exists";
}else{

$sql = "INSERT INTO users(full_name , email , password , country , phone)
VALUES('$full_name' , '$email' , '$password' , '$country' , '$phone')";



    if(mysqli_query($conn, $sql)){
        header("Location: ../my-account.php");
    } else {
        echo "Data Failed!";
    }
}
?>










<?php 
include "../includes/config.php";



$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$phone = $_POST['phone'];


// echo $full_name; we can do this when we have to find an error

$sql = "INSERT INTO users(full_name , email , password , country , phone)
VALUES('$full_name' , '$email' , '$password' , '$country' , '$phone')";

if(mysqli_query($conn,$sql)){
    // echo "Data Register Successfully.";
    header("Location: ../my-account.php");

}else{
    echo "Data Failed!";
}



// if(mysqli_query($conn,$sql)){
//     echo "<p style='color:green;'>Data Register Successfully</p>";
// }else{
//     echo "<p style='color:red;'>Email already exists!</p>";
// }


?>
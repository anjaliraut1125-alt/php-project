<?php 
include "../includes/config.php";


$id = $_POST['id'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// echo $full_name; we can do this when we have to find an error

$sql = "UPDATE contacts SET name='$full_name' , email='$email' , phone='$phone' , message='$message' WHERE id ='$id' ";

if(mysqli_query($conn,$sql)){
    // echo "Data Updatetd Successfully.";
    header("Location: ../my-account.php");

}else{
    echo "Updated Failed!";
}



?>
<?php
include "../includes/config.php";


$id = $_GET['id'];

$sql = "DELETE FROM contacts WHERE id = '$id'";

if(mysqli_query($conn,$sql)){
    // echo "Deleted Successfully!";
    header("Location: ../my-account.php");

}else{
    echo "Something Went Wrong!";
}



?>
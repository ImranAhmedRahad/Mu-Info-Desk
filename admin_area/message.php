<?php
include("../config/connect.php");
if(isset($_POST["isert_message"])){     

    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $insert = "INSERT INTO `mess`(`name`, `subject`, `email`, `message`) VALUES ('$name','$subject','$email','$message')";
    
    $runUpQuery = mysqli_query($con,$insert);
    
    
    if($runUpQuery){
        header("Location: ../index.php?true");
    }else{
        header("Location: ../index.php?false");
    }
    




}else{
    header("Location: ../index.php?false");
}




?>
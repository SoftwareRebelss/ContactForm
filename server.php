<?php

require 'index.php';
require 'Database.php';
/*include 'validation.php';*/
$user_name ="";
$email  ="";
$choose ="";
$comment ="";

//Getting user input from the form
if(isset($_POST['submit_B']) == 'POST'){
    $error = "";
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $choose = $_POST['choose'];
    $comment = $_POST['comment'];


validateinput();
//Inserting to Database

$sql = "INSERT INTO userdata (user_name,email,catagory,comment) VALUES ('$user_name','$email','$choose','$comment')";

mysqli_query($db,$sql);
if($sql != TRUE ){
$error = "Issues Detected!!";
}else{
                           
    echo "<script>alert('Registration successfully completed!')</script>";
    echo "<script>window.location='view.php'</script>";
}
} else
    
echo $error = "invalid request!";
?>
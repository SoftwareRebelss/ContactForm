<?php
 /**********************Ensuring Securty!!**************************/ 
function validateinput(){

//validating user input before we submit to Database 
if ( (!empty($_POST['user_name'])) && (!empty($_POST['choose']))
&& (!empty($_POST['comment']))) {
    
    /* protecting the form from XSS attacks - using this PHP fuction to escape HTML*/
	$user_name = htmlspecialchars($_POST['user_name']); 

     /*Checking if its a valid email or not */ 
    if (!empty($_POST['email'])) {

        $email = trim(htmlspecialchars($_POST['email']));
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    
        if ($email === false) {
            echo $error = "invalid email!";
        }
    }

	$choose = htmlspecialchars($_POST['choose']);	
	$comment = htmlspecialchars($_POST['comment']);	
	
}else{
    echo $error = "Please enter  the required data";
}
}

/**********************************************************************************/
?>
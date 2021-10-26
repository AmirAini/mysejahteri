
<?php
session_start();

$username1 = $_POST['user_name'];
valUserName($username1);

function valUserName($username1) {
    include "../connect.php";
    include "../Model/mobileno_model.php";
    $regex = "/^[a-zA-Z]{3}+[a-zA-Z\s]+$/";
    
    //Accept
    if(preg_match($regex,$username1)){
        
        //Admin
        if ($username1 == "admin"){
            postAdmin($username1);
            return $username1;
        } 
        
        //normal
        else{
        postName($username1);
        return $username1;
        }

    } else {
        postReturn();
    }

    //Go admin
    
    
    
}

